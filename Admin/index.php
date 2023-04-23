<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aavas.com Admin</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
    <link rel="stylesheet" href="assets/css/Pretty-Header.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
</head>

<body id="backgroundadmin">
    <nav class="navbar navbar-default custom-header">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="#">Aavas.com </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav links">
                    <li role="presentation"><a href="#">Overview </a></li>
                    <li role="presentation"><a href="#" class="custom-navbar"> Roles<span class="badge">new</span></a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="active" role="presentation"><a href="#">Admin Team</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="row form">
        <div class="col-sm-6"></div>
        <div class="col-sm-6 signinform">
            <form method="POST">
                <h1 class="text-center signheading"> Admin Sign-In</h1>
                <input class="form-control" type="email" id="email1" placeholder="Email Address" name="email">
                <input class="form-control" type="password" id="pass" placeholder="Password" name="password">
                <div class="col-md-12">
                    <button class="btn btn-default active signin" type="submit" name="signin">Sign In</button>
                </div>
                <div class="col-sm-12 forgpass"><a href="#">Forget Password?</a></div>
            </form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
<?php

include "function.php";
if(isset($_REQUEST['signin']))
{
	SignIn($_REQUEST);
}
?>