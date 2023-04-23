</html>
<?php 
session_start();
IF(ISSET($_SESSION['fullname'])){
?>
<?php
	include "function.php";
	if(isset($_REQUEST['update']))
	{
			UpdateValues($_REQUEST);
	}
		$r=getData();
		foreach($r as $tuple){
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aavas Edit Profile</title>
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
            <div class="navbar-header"><a class="navbar-brand navbar-link">Aavas.com </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li role="presentation"><a href="view.php">View Records</a></li>
                    <li role="presentation"><a href="addproperties.php">Add Properties</a></li>
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

<div class="row dash">
        <div class="col-md-12 dash">
            <div class="col-sm-2"></div>
            <div class="col-sm-4 dashboard"><span class="dashboard">Dashboard | </span><span class="username"><?php echo $tuple[1];?> </span></div>
            <div class="col-sm-2"></div>
            <div class="col-sm-2 edit">
                <h3> <a class="edit">Editing Details</a></h3></div>
				
				
			
        </div>
    </div>
	<hr class="rowdivider1">
	
	<div class="col-md-12">
			<div class="col-sm-4"></div>
		<div class="col-sm-4 myprofile">
                
	
				
                <div class="row profile">
                     <form class="bootstrap-form-with-validation" method="POST">
								<div class="form-group edit">
                                    <label class="control-label email" for="contact">Fullname</label>
                                    <input class="form-control" type="text" name="fullname" id="fullname" value="<?php echo $tuple[1];?>">
                                </div>
								<div class="form-group edit">
                                    <label class="control-label email" for="contact">Email</label>
                                    <input class="form-control" type="text" name="email" value="<?php echo $tuple[2];?>" id="email">
                                </div>
                                <div class="form-group edit">
                                    <label class="control-label email" for="contact">Contact No.</label>
                                    <input class="form-control" type="text" name="contactnumber" value="<?php echo $tuple[4];?>" id="contactnumber">
                                </div>
                                <div class="form-group edit">
                                    <label class="control-label email" for="gender" id="gender">Gender </label>
                                    <select class="form-control gender" name="gender" id="gender" value="<?php echo $tuple[5];?>">
                                        <option value="-" >Select</option>
                                        <option value="Male" id="male" name="male" type="text" >Male</option>
                                        <option value="Female" id="female" name="female" type="text">Female</option>
                                    </select>
                                </div>
                                
                                <div class="form-group edit">
                                    <label class="control-label email" for="education">Education </label>
                                    <select class="form-control education" name="education" id="education" value="<?php echo $tuple[6];?>">
                                        <option value="-">Select</option>
                                        <option value="Under Graduate" id="ug" name="ug" type="text">Under Graduate</option>
                                        <option value="Post Graduate" id="pg" name="pg" type="text">Post Graduate</option>
                                        <option value="Btech/BE" id="btech" name="btech" type="text">Btech/BE</option>
                                        <option value="MBA" id="mba" name="mba" type="text">MBA</option>
                                        <option value="MBBS" id="mbbs" name="mbbs" type="text">MBBS</option>
                                        <option value="CA" id="ca" name="ca" type="text">CA</option>
                                        <option value="BCA" id="bca" name="bca" type="text">BCA</option>
                                        <option value="MCA" id="mca" name="mca" type="text">MCA</option>
                                        <option value="Others" id="others" name="others" type="others">Others</option>
                                    </select>
                                </div>
                                <div class="form-group edit">
                                    <label class="control-label email" for="occupation">Occupation </label>
                                    <select class="form-control occupation" name="occupation" id="occupation" value="<?php echo $tuple[7];?>">
                                        <option value="-">Select</option>
                                        <option value="Student" id="stu" name="stu" type="text">Student</option>
                                        <option value="BPO" id="bpo" name="bpo" type="text">BPO</option>
                                        <option value="IT/ITeS" id="it" name="it" type="text">IT/ITeS</option>
                                        <option value="Finance" id="finance" name="finance" type="text">Finance</option>
                                        <option value="Marketing" id="marketing" name="marketing" type="text">Marketing</option>
                                        <option value="HR" id="hr" name="hr" type="text">HR</option>
                                        <option value="Enginnering" id="engine" name="engine" type="text">Enginnering</option>
                                        <option value="Professional Services" id="ps" name="ps" type="text">Professional Services</option>
                                        <option value="Others" id="others" name="others" type="others">Others</option>
                                    </select>
                                </div>
                                <div class="form-group edit">
                                    <label class="control-label" for="institute">Institute </label>
                                    <input class="form-control" type="text" name="institute"  id="institute" value="<?php echo $tuple[8];?>">
                                </div>
                                <div class="form-group edit">
                                    <label class="control-label" for="organization">Organization</label>
                                    <input class="form-control" type="text" name="organization"  id="organization" value="<?php echo $tuple[9];?>">
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="yourself">About Yourself</label>
                                    <textarea class="form-control" name="yourself"  id="yourself" type="text" value="<?php echo $tuple[10];?>"></textarea>
                                </div>
								<button type="submit" name="update" class="updatebutton" >Update</button>
                       
                        
                       
							</form>
                
				
            </div>
            <div class="col-sm-4"></div>
			</div>

		<?php } ?>
</body>
</html>
<?php 
}
else{
	echo "<script language=\"javascript\">document.location.href='index.php';</script>";	
}
?>