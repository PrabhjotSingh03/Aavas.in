<?php
// session code starts here.
session_start();
IF(isset($_SESSION['email'])){
// session code ends here.	
?>
<?php
include "function.php";
			change();
?>	
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aavas Change Password</title>
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
            <div class="col-sm-3 edit">
                <h3><i class="glyphicon glyphicon-edit"></i> <a class="edit">Change Password</a></h3>
			</div>
			<div class="col-sm-1"></div>
		</div>
    </div>
	
<hr class="rowdivider1">
	<div class="col-md-12">
			<div class="col-md-4"></div>
			<div class="col-sm-4 myprofile">
                <div class="row username">
                    <div class="col-md-12">
                        <div class="col-sm-2"><img src="<?php
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
?>" class="img-circle user"></div>
                        <div class="col-sm-10">
                            <h3 class="username1"><?php echo $_SESSION['fullname'];?></h3>
						</div>
                    </div>
                </div>
			<div class="row chpass">
                     <form class="bootstrap-form-with-validation" method="POST">
                            
                                <div class="form-group edit">
                                    <label class="control-label email" for="old_password">Old Password</label>
                                    <input class="form-control" type="password" name="old_password" id="old_password" required >
                                </div>
								
								 <div class="form-group edit">
                                    <label class="control-label email" for="new_password">New Password</label>
                                    <input class="form-control" type="password" name="new_password" id="old_password" required >
                                </div>
								
								 <div class="form-group edit">
                                    <label class="control-label email" for="Con_password">Retype New Password</label>
                                    <input class="form-control" type="password" name="con_password" id="old_password" required >
                                </div>
								<button type="submit" name="change_pwd" class="changepassbutton">Change Password</button>
					</form>
				
               </div> 
				
            </div>
            
			<div class="col-sm-4">
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
<?php 
}
else{
	echo "<script language=\"javascript\">document.location.href='index.php';</script>";	
}
?>