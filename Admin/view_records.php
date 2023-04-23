<?php 
session_start();
IF(ISSET($_SESSION['fullname'])){
?>
<?php include "db_con.php"; ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
    <link rel="stylesheet" href="assets/css/Pretty-Header.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand navbar-link">Aavas.com </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li role="presentation"><a href="view_records.php">View Records</a></li>
                    <li role="presentation"><a href="addproperty.php">Add Properties</a></li>
                    <li role="presentation"><a href="usercontactform.php">Contact Form</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="active" role="presentation"><a href="#"><?=$_SESSION['fullname'];?> </a></li>
                    <li role="presentation"><a>Dashboard </a></li>
                    <li role="presentation"><a href="logout.php?destroy">Logout </a></li>
                </ul>
            </div>
        </div>
    </nav>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

 <?php
include_once "function.php";
	Select();
?> 



<?php 
}
else{
	echo "<script language=\"javascript\">document.location.href='index.php';</script>";	
}
?>
</html>

