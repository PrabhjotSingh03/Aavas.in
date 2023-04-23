<?php
// session code starts here.
session_start();

IF(isset($_SESSION['email']))
{	
}
else{
	echo "<script language=\"javascript\">document.location.href='index.php';</script>";	
}
// session code ends here.	
?>

<!DOCTYPE html>
<html>

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
        <div class="navbar-header"><a href="aavaslogin.php" class="navbar-brand navbar-link">Aavas.com</a>
            <button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        </div>
        <div class="collapse navbar-collapse" id="navcol-1">
            
            <ul class="nav navbar-nav navbar-right">
                
                <li role="presentation"><a href="dashboard.php">Dashboard</a>
                    
                </li>
              
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
            <div class="col-sm-2"></div>
            <div class="col-sm-2 edit">
                <h3><i class="glyphicon glyphicon-edit"></i> <a class="edit">Editing Profile</a></h3></div>
				
				
			
        </div>
    </div>
	<hr class="rowdivider1">
	<div class="col-md-12">
		<div class="col-md-7">
			<div class="row">
				<div class="col-md-12">
					<div class="col-sm-3"></div>
						<div class="col-sm-5">
							<img src="
								<?php
									include "db_con.php";

									$cek = "SELECT profilepic FROM usersignup WHERE id=".$_SESSION['id'];
	
									$result = mysqli_query($con,$cek);
									$row = mysqli_num_rows($result);
									$file_path = 'uploads/';
		
										if ($row>0)
											{
												$row1=mysqli_fetch_assoc($result);
												$img_src = $file_path.$row1['profilepic'];
												{
			
												echo $img_src;
			
												}
											}
										else 	
											{
												echo "0 results";
											}

									mysqli_close($con);
								?>" class="img-thumbnail profile">
						</div>
						<div class="col-sm-4"></div>

						<div class="row">
							<div class="col-sm-12">
							
								<form action="" method="post" enctype="multipart/form-data">
									<div class="form-group edit">
										<label class="control-label profile" for="change profile image">Change Profile Image</label>
										<input type="file" name="uploadImage" id="uploadImage" class="uploadImage" accept="image/*">
									</div>
									<div class="form-group edit">
										<input type="submit" value="Click Here To Upload" name="submit" id="uploadimg" class="uploadimg">
									</div>
								</form>
							</div>
						</div>	

							<?php
								include_once "function.php";
									image();
							?>	


				</div>
			</div>
		</div>
				<div class="col-sm-5 myprofile">
					<div class="row username">
						<div class="col-md-12">
							<div class="col-sm-2"></div>
							<div class="col-sm-10">
								<h3 class="username1"></h3></div>
					</div>
				</div>
	
				
                <div class="row profile">
                     <form class="bootstrap-form-with-validation" method="POST">
                            
                                <div class="form-group edit">
                                    <label class="control-label email" for="contact">Contact No.</label>
                                    <input class="form-control" type="text" name="contactnumber" value="<?php echo $_SESSION['contactnumber'];?>" id="contactnumber">
                                </div>
                                <div class="form-group edit">
                                    <label class="control-label email" for="gender" id="gender">Gender </label>
                                    <select class="form-control gender" name="gender" id="gender" value="<?php echo $_SESSION['gender'];?>">
                                        <option value="-" >Select</option>
                                        <option value="Male" id="male" name="male" type="text" >Male</option>
                                        <option value="Female" id="female" name="female" type="text">Female</option>
                                    </select>
                                </div>
                                
                                <div class="form-group edit">
                                    <label class="control-label email" for="education">Education </label>
                                    <select class="form-control education" name="education" id="education" value="<?php echo $_SESSION['education'];?>">
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
                                    <select class="form-control occupation" name="occupation" id="occupation" value="<?php echo $_SESSION['occupation'];?>">
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
                                    <input class="form-control" type="text" name="institute"  id="institute" value="<?php echo $_SESSION['institute'];?>">
                                </div>
                                <div class="form-group edit">
                                    <label class="control-label" for="organization">Organization</label>
                                    <input class="form-control" type="text" name="organization"  id="organization" value="<?php echo $_SESSION['organization'];?>">
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="yourself">About Yourself</label>
                                    <textarea class="form-control" name="yourself"  id="yourself" type="text" value="<?php echo $_SESSION['yourself'];?>"></textarea>
                                </div>
								<button type="submit" name="update" class="updatebutton" value="change">Update</button>
                       
                        
                       
							</form>
                </div>
				
            </div>
          
		</div>			
				
<?php
include_once "function.php";

if(isset($_REQUEST['update']))
	{
			UpdateValues($_REQUEST);
	}
	

?>				
				
	
 <div class="row footer">
        <div class="col-sm-12 footeredit">
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
                                    <div class="col-sm-4 twit">
                                        <a href="#" class="face"> <i class="fa fa-twitter twit"></i></a>
                                    </div>
                                    <div class="col-sm-4 insta">
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
</body>

</html>
