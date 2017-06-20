<?php
if(isset($_POST['username']) && $_POST['username']!= ''){
    $username = $_POST['username'];
    $password = $_POST['password'];

    require_once ('../../config/dbconfig.php');

    require_once('salt.php');
    $password = crypt($password, KEY_SALT);
    $sql = "select * from table_user where user_name='$username' and user_password='$password'";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        $row = $result->fetch_object();
        $id = $row->id;
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        if($_POST['rememberMe'] == 'r'){
            setcookie('id', $id, time()+60*60*24);
            setcookie('username', $username, time()+60*60*24);
        }
        header('Location: ../../index.php');
//        echo "trov";
    }else{
        header('Location: loginPage.php');
//        echo "khos";
    }
}else{
    header('Location: loginPage.php');
}
?>