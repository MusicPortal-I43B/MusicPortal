<!DOCTYPE html>
<html>
<head>
    <title>Register New Account</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../../public/css/styleLogin.css">
</head>
<body>
<!--Div for slide show-->
<link rel="stylesheet" href="../../public/css/SlideShowStyle.css">
<ul class="slideshow">
    <li><span>Image 01</span></li>
    <li><span>Image 02</span></li>
    <li><span>Image 03</span></li>
    <li><span>Image 04</span></li>
    <li><span>Image 05</span></li>
    <li><span>Image 06</span></li>
</ul>
<div id="wrapper1">
    <form enctype="multipart/form-data" name="registerForm" method="post" action="processRegister.php" id="login" class="box">
        <div class="default"><i class="icon-briefcase"></i><h1>Press Register</h1></div>
        <input type="text" placeholder="username" name="username" autocomplete="off" required/>
        <input type="password" placeholder="password" name="password" id="password" autocomplete="off" required/>
        <input type="password" placeholder="confirm password" name="confirm_password" id="confirm_password" autocomplete="off" required/>
        <select name="gender" id="gender" required>
            <option value="">Gender</option>
            <option value="female">&nbsp;&nbsp;Female</option>
            <option value="male">&nbsp;&nbsp;Male</option>
        </select>
        <label for="name" class="btn" style="text-align: left;">Select a profile image</label>
        <input type="file" id="photo" name="photo" style="visibility:hidden;">
        <button type="submit" class="login" name="submit" id="submit"><i class="icon-ok"></i></button>
        <a href="loginPage.php" style="margin-top: 20px; float: right;">I have an account</a>
    </form>
</div>
<script>
    var password = document.getElementById("password")
        , confirm_password = document.getElementById("confirm_password");

    function validatePassword(){
        if(password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Passwords not confirmed");
        } else {
            confirm_password.setCustomValidity('');
        }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
</script>
<script type="text/javascript" src="../../public/vendors/jquery/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="../../public/vendors/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>