<?php 
session_start();
IF(ISSET($_SESSION['fullname'])){
?>
<?php include "db_con.php"?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aavas.com</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/material-icons.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header"><a href="aavaslogin.php" class="navbar-brand navbar-link">Aavas.com</a>
            <button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        </div>
        <div class="collapse navbar-collapse" id="navcol-1">
            
            <ul class="nav navbar-nav navbar-right">
                <li role="presentation"><a href="dashboard.php"><?php echo $_SESSION['fullname'];?></a></li>
                <li role="presentation"> <a href="view_records.php" name="dashboard" id="dashboard">Dashboard</a></li>
                
               
			<li role="presentation"><a href="logout.php?destroy">Logout</a>
			
            </li>
            </ul>
        </div>
    </div>
</nav>
<div class="row dash">
        <div class="col-md-12 dash">
            <div class="col-sm-2"></div>
            <div class="col-sm-4 dashboard"><span class="dashboard">Dashboard | </span><span class="username"><?php echo $_SESSION['fullname'];?> </span></div>
            <div class="col-sm-1"></div>
            <div class="col-sm-3 edit">
                <h3> <a class="edit">Upload Property</a></h3></div>
		</div>
</div>
	<hr class="rowdivider1">
<div class="col-md-12">
<div class="col-md-4">			
<form action="" method="post" enctype="multipart/form-data">
	<div class="form-group edit">
		<label class="control-label email" for="change profile image">Upload Property Image 1</label>
		<input type="file" name="uploadImage" id="uploadImage" class="uploadImage">
	</div>

</div>
<div class="col-md-4">			

	<div class="form-group edit">
		<label class="control-label email" for="change profile image">Upload Property Image 2</label>
		<input type="file" name="uploadImage2" id="uploadImage" class="uploadImage">
	</div>

</div>
<div class="col-md-4">			

	<div class="form-group edit">
		<label class="control-label email" for="change profile image">Upload Property Image 3</label>
		<input type="file" name="uploadImage3" id="uploadImage" class="uploadImage">
	</div>
</form>
</div>
</div>

<div class="col-sm-12">
<div class="col-sm-3"></div>
<div class="col-sm-6">
                     <form class="bootstrap-form-with-validation" method="POST">
								<div class="form-group edit">
                                    <label class="control-label email" for="contact">Heading</label>
                                    <input class="form-control" type="text" name="heading" id="fullname" placeholder="Write Property Heading ....">
                                </div>
								<div class="form-group edit">
                                    <label class="control-label email" for="contact">City</label>
                                    <input class="form-control" type="text" name="city"  id="email" placeholder="Write city in which the Property is...">
                                </div>
                                
                                <div class="form-group">
                                    <label class="control-label" for="yourself">About Property</label>
                                    <textarea class="form-control" name="about"  id="yourself" type="text" placeholder="Write information of the property.."></textarea>
                                </div>
								<button type="submit" name="update" class="updatebutton" >Update</button>
                       
                        
                       
							</form>
                
			</div>
<div class="col-sm-3"></div>			
            </div>
            



    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/validation.js"></script>
</body>
</html>
<?php 
}
else{
	echo "<script language=\"javascript\">document.location.href='index.php';</script>";	
}
?>