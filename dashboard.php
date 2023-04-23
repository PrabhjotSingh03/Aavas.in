
<?php
// session code starts here.
session_start();
if(isset($_SESSION['email']))
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
    <title>Aavas Dashboard</title>
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
                <li class="dropdown"><a data-toggle="dropdown" aria-expanded="false" href="#" class="dropdown-toggle">CHANDIGARH <span class="caret"></span></a>
                    <ul role="menu" class="dropdown-menu">
                        <li role="presentation"><a href="#">PANCHKULA </a></li>
                        <li role="presentation"><a href="#">MOHALI </a></li>
                    </ul>
                </li>
                
            </ul>
            <ul class="nav navbar-nav navbar-right">
                
                <li role="presentation"><a href="dashboard.php">Dashboard</a>
                    
                </li>
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
            <div class="col-sm-4 edit">
                <h3><i class="glyphicon glyphicon-edit"></i> <a href="editprofile.php" class="edit"  data-target="#editprofile">Edit Profile | </a><a href="changepassword.php" class="edit"  data-target="#changepassword">Change Password</a></h3></div>
            <div class="col-sm-1"></div>
        </div>
    </div>
    <div class="row myprofile">
        <div class="col-md-12">
            <div class="col-sm-1"></div>
            <div class="col-sm-7 notidash">
                <ul class="nav nav-pills">
                    <li class="active">
                        <a href="#noti" class="noti" data-toggle="pill"> <i class="fa fa-bell bell" aria-hidden="true"></i>Notifications</a>
                    </li>
                    <li>
                        <a href="#postings" class="noti" data-toggle="pill"> <i class="fa fa-home home" aria-hidden="true"></i>Postings</a>
                    </li>
                    <li>
                        <a href="#favourite" class="noti" data-toggle="pill"> <i class="fa fa-star star" aria-hidden="true"></i>Favourties</a>
                    </li>
                    <li>
                        <a href="#recent" class="noti" data-toggle="pill"> <i class="fa fa-eye eye" aria-hidden="true"></i>Recent Views</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-2 myprofile"><i class="fa fa-user-secret user"></i>
                <h4 class="myprofile">My Profile</h4></div>
            <div class="col-sm-2">
		
			</div>
            <div></div>
        </div>
    </div>
    <hr class="rowdivider1">
    <div class="row">
        <div class="col-md-12">
            <div class="col-sm-1"></div>
            <div class="col-sm-6 tabcontent">
                <div class="tab-content">
                    <div id="noti" class="tab-pane fade in active">
                        <h1>Notifications </h1></div>
                    <div id="postings" class="tab-pane fade">
                        <h1>Postings </h1></div>
                    <div id="favourite" class="tab-pane fade">
                        <h1>Favourites </h1></div>
                    <div id="recent" class="tab-pane fade">
                        <h1>Recent </h1></div>
                </div>
            </div>
            <div class="col-sm-4 myprofile">
                <div class="row username">
                    <div class="col-md-12">
                        <div class="col-sm-2"><img src="
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
?>" class="img-circle user"></div>
                        <div class="col-sm-10">
                            <h3 class="username1"><?php echo $_SESSION['fullname'];?></h3></div>
                    </div>
                </div>
                <div class="row profile">
                    <div class="col-md-12">
                        <div class="col-sm-4">
                            <p class="user">Gender </p>
                        </div>
                        <div class="col-sm-2">
                            <p class="user">: </p>
                        </div>
                        <div class="col-sm-6">
<?php
include "db_con.php";

$cek = "SELECT gender FROM usersignup WHERE id=".$_SESSION['id'];
$result = mysqli_query($con,$cek);
$row = mysqli_num_rows($result);
	
		
		 if ($row>0)
		 {
			 $row1=mysqli_fetch_assoc($result);
		 
		{
			echo $row1["gender"];
			
		}
}
 else 	
{
    echo "0 results";
}

mysqli_close($con);
?>


						</div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-sm-4">
                            <p class="user">Institute </p>
                        </div>
                        <div class="col-sm-2">
                            <p class="user">: </p>
                        </div>
                        <div class="col-sm-6">
<?php
include "db_con.php";

$cek = "SELECT institute FROM usersignup WHERE id=".$_SESSION['id'];
$result = mysqli_query($con,$cek);
$row = mysqli_num_rows($result);
	
		
		 if ($row>0)
		 {
			 $row1=mysqli_fetch_assoc($result);
		 
		{
			echo $row1["institute"];
			
		}
}
 else 	
{
    echo "0 results";
}

mysqli_close($con);
?>
</div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-sm-4">
                            <p class="user">Education </p>
                        </div>
                        <div class="col-sm-2">
                            <p class="user">: </p>
                        </div>
                        <div class="col-sm-6">
<?php
include "db_con.php";

$cek = "SELECT education FROM usersignup WHERE id=".$_SESSION['id'];
$result = mysqli_query($con,$cek);
$row = mysqli_num_rows($result);
	
		
		 if ($row>0)
		 {
			 $row1=mysqli_fetch_assoc($result);
		 
		{
			echo $row1["education"];
			
		}
}
 else 	
{
    echo "0 results";
}

mysqli_close($con);
?>
</div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-sm-4">
                            <p class="user">Organization </p>
                        </div>
                        <div class="col-sm-2">
                            <p class="user">: </p>
                        </div>
                        <div class="col-sm-6">
<?php
include "db_con.php";

$cek = "SELECT organization FROM usersignup WHERE id=".$_SESSION['id'];
$result = mysqli_query($con,$cek);
$row = mysqli_num_rows($result);
	
		
		 if ($row>0)
		 {
			 $row1=mysqli_fetch_assoc($result);
		 
		{
			echo $row1["organization"];
			
		}
}
 else 	
{
    echo "0 results";
}

mysqli_close($con);
?>
						</div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-sm-4">
                            <p class="user">Occupation</p>
                        </div>
                        <div class="col-sm-2">
                            <p class="user">: </p>
                        </div>
                        <div class="col-sm-6">
<?php
include "db_con.php";

$cek = "SELECT occupation FROM usersignup WHERE id=".$_SESSION['id'];
$result = mysqli_query($con,$cek);
$row = mysqli_num_rows($result);
	
		
		 if ($row>0)
		 {
			 $row1=mysqli_fetch_assoc($result);
		 
		{
			echo $row1["occupation"];
			
		}
}
 else 	
{
    echo "0 results";
}

mysqli_close($con);
?>						
						</div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="col-sm-4">
                            <p class="user">Email </p>
                        </div>
                        <div class="col-sm-2">
                            <p class="user">: </p>
                        </div>
                        <div class="col-sm-6"><?php echo $_SESSION['email'];?></div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-sm-4">
                            <p class="user">Mobile </p>
                        </div>
                        <div class="col-sm-2">
                            <p class="user">: </p>
                        </div>
                        <div class="col-sm-6">
						<?php
include "db_con.php";

$cek = "SELECT contactnumber FROM usersignup WHERE id=".$_SESSION['id'];
$result = mysqli_query($con,$cek);
$row = mysqli_num_rows($result);
	
		
		 if ($row>0)
		 {
			 $row1=mysqli_fetch_assoc($result);
		 
		{
			echo $row1["contactnumber"];
			
		}
}
 else 	
{
    echo "0 results";
}

mysqli_close($con);
?>
						</div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-sm-4">
                            <p class="user">About Yourself</p>
                        </div>
                        <div class="col-sm-2">
                            <p class="user">: </p>
                        </div>
                        <div class="col-sm-6">
<?php
include "db_con.php";

$cek = "SELECT yourself FROM usersignup WHERE id=".$_SESSION['id'];
$result = mysqli_query($con,$cek);
$row = mysqli_num_rows($result);
	
		
		 if ($row>0)
		 {
			 $row1=mysqli_fetch_assoc($result);
		 
		{
			echo $row1["yourself"];
			
		}
}
 else 	
{
    echo "0 results";
}

mysqli_close($con);
?>						
						</div>
                    </div>
                </div>
				
            </div>
		
            <div class="col-sm-1"></div>
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


