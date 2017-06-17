<?php
if(isset($_COOKIE['username'])){
    session_start();
    $_SESSION['username'] = $_COOKIE['username'];
    header('Location: loged_in.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../../public/css/styleLogin.css">
</head>
<body>
<!--Div for slide show-->
<link rel="stylesheet" href="../../public/css/SlideShowStyle.css">
<ul class="slideshow">
    <li><span>Image 01</span><div><h3 style="line-height: 775px;">Music Portal</h3></div></li>
    <li><span>Image 02</span></li>
    <li><span>Image 03</span></li>
    <li><span>Image 04</span></li>
    <li><span>Image 05</span></li>
    <li><span>Image 06</span></li>
</ul>
<div id="wrapper">
    <form role="form" name="loginForm" method="post" action="postLogin.php" id="login" class="box">
        <div class="default"><i class="icon-briefcase"></i><h1>Press login</h1></div>
        <input type="text" placeholder="username" name="username" autocomplete="off" required/>
        <input type="password" placeholder="password" name="password" autocomplete="off" required/>
        <label for="rememberMe" style="text-align: center;"><input type="checkbox" id="rememberMe" style="width: 100%;" value="r"> Remember Me</label>
        <button type="submit" class="login"><i class="icon-ok"></i></button>
        <a href="signUp.php" style="margin-top: 20px; float: right;">Register New Account</a>
    </form>
</div>
<script type="text/javascript" src="/public/vendors/jquery/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="/public/vendors/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>