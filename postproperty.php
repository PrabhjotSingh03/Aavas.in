<?php 
session_start();
IF(ISSET($_SESSION['email'])){
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
            <ul class="nav navbar-nav">
                
                
				</li>
                <li role="presentation"><a href="#">PROPERTIES</a></li>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li role="presentation"><a href="dashboard.php"><?php echo $_SESSION['fullname'];?></a></li>
                <li role="presentation"> <a href="dashboard.php" name="dashboard" id="dashboard">Dashboard</a></li>
                
             <li role="presentation"><a href="postproperty.php">Post Property</a>  
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
                <h3><i class="glyphicon glyphicon-edit"></i> <a class="edit">Upload Property</a></h3>
			</div>
		</div>
</div>
<hr class="rowdivider1">
<div class="col-md-12">
	<div class="col-sm-6">
		<div class="col-sm-12">
			<div class="col-sm-3"></div>
				<div class="col-sm-6">
					<label class="control-label addimage" for="change profile image">Enter Property Details</label>
				</div>
			<div class="col-sm-3"></div>
		</div>
		<div class="row profile">
            <form class="bootstrap-form-with-validation" method="POST" enctype="multipart/form-data">
				<div class="form-group edit">
                    <label class="control-label email" for="propertytitle">Property Title</label>
                        <input class="form-control" type="text" name="propertytitle" placeholder="Property Title" id="contactnumber" required>
                </div>
				
				<div class="form-group edit">
                    <label class="control-label email" for="propertycity">Property City</label>
                        <select class="form-control gender" name="propertycity" id="propertycity" required>
                            <option value="-" >Select City</option>
                                <option value="Chandigarh" id="chandigarh" name="chandigarh" type="text" >Chandigarh</option>
                                <option value="Mohali" id="mohali" name="mohali" type="text">Mohali</option>
                        </select>
                </div>
				
				<div class="form-group edit">
                    <label class="control-label email" for="contact">Contact No.</label>
                        <input class="form-control" type="text" name="contact" placeholder="Contact number" id="contactnumber" required>
                </div>
				
				<div class="form-group edit">
                    <label class="control-label email" for="bhk">BHK</label>
                        <select class="form-control gender" name="bhk" id="bhk" required>
                            <option value="-" >Select BHK </option>
                                <option value="1" id="1" name="1" type="text" >1</option>
                                <option value="2" id="2" name="2" type="text">2</option>
								<option value="3" id="3" name="3" type="text" >3</option>
								<option value="4" id="4" name="4" type="text" >4</option>
								<option value="4+" id="4+" name="4+" type="text" >4+</option>
                        </select>
                </div>
				
				<div class="form-group edit">
                    <label class="control-label email" for="propertyinformation">Property Information :-</label>
                        <textarea class="form-control" type="text" name="propertyinformation" placeholder="Property Information" id="propertyinformation" required></textarea>
                </div>
				
				<div class="col-sm-12">
					<div class="col-sm-10">
						<button type="propsubmit" name="propsubmit" class="propertybutton" value="submit">Submit</button>
					</div>
				</div>
		</div>
	</div>
	
	
	<div class="col-md-6">
		<div class="col-sm-12">
			<div class="col-sm-4"></div>
				<div class="col-sm-4">
					<label class="control-label addimage" for="change profile image">Add Image</label>
				</div>
			<div class="col-sm-4"></div>
		</div>
		
		<div class="col-md-12">
			<div class="col-sm-6">
				<div class="row">
					<img id="propertyImage1" class="img-thumbnail propertyImage"/>
				</div>
				
				<div class="row">
					<div class="form-group propertyImage">
						<input type="file" name="propertyImage1" id="propertyImage" class="propertyImage" accept="image/*" onchange="preview_image1(event)" required>
					</div>
				</div>
			</div>
			
			<div class="col-sm-6">
				<div class="row">
					<img id="propertyImage2" class="img-thumbnail propertyImage"/>
				</div>
				
				<div class="row">
					<div class="form-group propertyImage">
						<input type="file" name="propertyImage2" id="propertyImage" class="propertyImage" accept="image/*" onchange="preview_image2(event)" required>
					</div>
				</div>
			</div>
		</div>
		
		<div class="col-md-12">
			<div class="col-sm-6">
				<div class="row">
					<img id="propertyImage3" class="img-thumbnail propertyImage"/>
				</div>
				
				<div class="row">
					<div class="form-group propertyImage">
						<input type="file" name="propertyImage3" id="propertyImage" class="propertyImage" accept="image/*" onchange="preview_image3(event)">
					</div>
				</div>
			</div>
			
			<div class="col-sm-6">
				<div class="row">
					<img id="propertyImage4" class="img-thumbnail propertyImage"/>
				</div>
				
				<div class="row">
					<div class="form-group propertyImage">
						<input type="file" name="propertyImage4" id="propertyImage" class="propertyImage" accept="image/*" onchange="preview_image4(event)"s>
					</div>
				</div>
					</form>
			</div>
		</div>

	</div>

			
</div>



<div class="row footer">
        <div class="col-sm-12 footer">
            <div class="col-sm-12 footer1">
                <div class="row footercontent">
                    <div class="col-md-12 footercontent">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-1 about">
                            <div class="row about">
                                <div class="col-md-12">
                                    <div class="col-sm-12 about"><a href="#" class="about">About Us</a></div>
                                    <div class="col-sm-12 about"><a href="#" class="about"> Contact Us</a></div>
                                    <div class="col-sm-12 about"><a href="#" class="about"> Privacy Policy</a></div>
                                    <div class="col-sm-12 about"><a href="#" class="about"> Cancellation Policy</a></div>
                                    <div class="col-sm-12 about"><a href="#" class="about"> Terms and Conditiolns</a></div>
                                    <div class="col-sm-12 about"><a href="#" class="about"> Blogs</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-1"></div>
                        <div class="col-sm-2 address">
                            <div class="row address">
                                <div class="col-md-12">
                                    <div class="col-sm-12 address">
                                        <p class="about">Address </p>
                                    </div>
                                    <div class="col-sm-12 addres">
                                        <p class="about">146/147, Centrum Plaza,&nbsp; </p>
                                    </div>
                                    <div class="col-sm-12 addres">
                                        <p class="about"> Golf Course Road,</p>
                                    </div>
                                    <div class="col-sm-12 addres">
                                        <p class="about"> Sector 53, Gurgaon - 122002</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-1"></div>
                        <div class="col-sm-2 reach">
                            <div class="row reach">
                                <div class="col-md-12">
                                    <div class="col-sm-12 address">
                                        <p class="about">Reach Us</p>
                                    </div>
                                    <div class="col-sm-12 addres">
                                        <p class="about"> +91 9816919394</p>
                                    </div>
                                    <div class="col-sm-12 addres">
                                        <p class="about">support@aavas.in</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-1"></div>
                        <div class="col-sm-2 fb">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-sm-4 face">
                                        <a href="#" class="face"> <i class="fa fa-facebook face"></i></a>
                                    </div>
                                    <div class="col-sm-4 face">
                                        <a href="#" class="face"> <i class="fa fa-twitter twit"></i></a>
                                    </div>
                                    <div class="col-sm-4 face">
                                        <a href="#" class="face"> <i class="fa fa-instagram inst"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/validation.js"></script>
	
	<script type='text/javascript'>
function preview_image1(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('propertyImage1');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
</script>

<script type='text/javascript'>
function preview_image2(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('propertyImage2');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
</script>

<script type='text/javascript'>
function preview_image3(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('propertyImage3');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
</script>

<script type='text/javascript'>
function preview_image4(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('propertyImage4');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
</script>
</body>
</html>
<?php
								include_once "function.php";
                                propertyimage();
							?>	

<?php 
}
else{
	echo "<script language=\"javascript\">document.location.href='index.php';</script>";	
}
?>