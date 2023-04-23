<?php

	function Signup($a=array())
	{
		include "db_con.php";
		
		$fn=$a['fullname'];
		$fn=ucfirst(strtolower($fn));
		$email=$a['email'];
		$pwd=$a['password'];
		$cno=$a['contactnumber'];
			
		$fullname=mysqli_real_escape_string($con,$fn);
		$email=mysqli_real_escape_string($con,$email);
		$password=mysqli_real_escape_string($con,$pwd);
		$contactnumber=mysqli_real_escape_string($con,$cno);
	
		$query1="select * from usersignup WHERE email='$email' OR contactnumber='$contactnumber'";
		$result=mysqli_query($con,$query1);
		$data=mysqli_fetch_array($result);
		
		 if ($data>0)
		{
			echo "<script language=\"javascript\">alert(\"User Already Exists\");</script>";
		}
		else
		{
		 
			$query2="insert into usersignup(fullname,email,password,contactnumber) values ('$fullname','$email','$password','$contactnumber')";
		
			if (mysqli_query($con,$query2))
			{
				echo "New record added successfully";
				$sql = "CREATE TABLE property_$fullname (
id INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
propertyhead VARCHAR(20) NOT NULL,
propertyabout VARCHAR(50) NOT NULL,
propertypic1 VARCHAR(50) NOT NULL,
propertypic2 VARCHAR(50) NOT NULL,
propertypic3 VARCHAR(50) NOT NULL,
propertypic4 VARCHAR(50) NOT NULL
)";

if (mysqli_query($con, $sql)) {
    echo "Table MyGuests created successfully";
}
			}
			else
			{
				echo "Error";
			}
		}
		mysqli_close($con);
	}

?>
	
<?php
	function SignIn($a=array())
	{
		include "db_con.php";
			$email=$a['email'];
			$pwd=$a['password'];
			
			$email=mysqli_real_escape_string($con,$email);
			$password=mysqli_real_escape_string($con,$pwd);
		
		$cek = "SELECT * FROM usersignup WHERE email = '$email' AND password = '$password'";	
		$result = mysqli_query($con, $cek) or die(mysqli_error());
		$tuple = mysqli_fetch_array($result);
		
		IF($tuple > 0)
			{
				session_start();
					$_SESSION['id'] = $tuple['0'];
					$_SESSION['email'] = $tuple['2'];
					$_SESSION['fullname'] = $tuple['1'];
					$_SESSION['contactnumber'] = $tuple['4'];
					$_SESSION['gender'] = $tuple['5'];
					$_SESSION['occupation'] = $tuple['7'];
					$_SESSION['education'] = $tuple['6'];
					$_SESSION['institute'] = $tuple['8'];
					$_SESSION['organization'] = $tuple['9'];
					$_SESSION['yourself'] = $tuple['10'];
					
		echo "<script language=\"javascript\">alert(\"welcome \");document.location.href='aavaslogin.php';</script>";
	}
	else
		{
			echo "<script language=\"javascript\">alert(\"Invalid username or password\");document.location.href='index.php';</script>";
		}
		mysqli_close($con);
}
?>

<?php

function UpdateValues($a=array())
	{
include"db_con.php";
	
	$contactnumber=$a['contactnumber'];
	$gender=$a['gender'];
	$education=$a['education'];
	$occupation=$a['occupation'];
	$institute =$a['institute'];
	$institute=ucfirst(strtolower($institute));
	$organization=$a['organization'];
	$organization=ucfirst(strtolower($organization));
	$yourself=$a['yourself'];
	$yourself=ucfirst(strtolower($yourself));
	
	$contactnumber=mysqli_real_escape_string($con,$contactnumber);
	$gender=mysqli_real_escape_string($con,$gender);
	$education=mysqli_real_escape_string($con,$education);
	$occupation=mysqli_real_escape_string($con,$occupation);
	$institute==mysqli_real_escape_string($con,$institute);
	$organization=mysqli_real_escape_string($con,$organization);
	$yourself=mysqli_real_escape_string($con,$yourself);
	
	$q = "UPDATE usersignup SET contactnumber='$contactnumber', gender='$gender', education='$education', occupation='$occupation', institute='$institute', organization='$organization', yourself='$yourself' WHERE id=".$_SESSION['id'];
	$query = mysqli_query($con,$q);
		if($query)
			{
				echo "<script language=\"javascript\">alert(\"Updated \");document.location.href='dashboard.php';</script>";
				
			}
		else
			{
				
				echo "<script language=\"javascript\">alert(\"Not Updated\");</script>";
				
			}
    mysqli_close($con);
}
?>

<?php 
function change()
{
    include "db_con.php";
    if(isset($_POST['change_pwd']))
    {
	$old_password=$_POST['old_password'];
	$new_password=$_POST['new_password'];
	$con_password=$_POST['con_password'];
	$chg_pwd=mysqli_query($con,"SELECT password FROM usersignup WHERE id=".$_SESSION['id']);
	$chg_pwd1=mysqli_fetch_array($chg_pwd);
	$data_pwd=$chg_pwd1['password'];
		if($data_pwd==$old_password)
			{
				if($new_password==$con_password)
					{
						$update_pwd=mysqli_query($con,"update usersignup set password='$new_password' where id=".$_SESSION['id']);
						echo "<script language=\"javascript\">alert(\"Your Password is updated, Kindly Sign-In again. \");document.location.href='index.php';</script>";
						session_destroy();
					}
				else
					{
						echo "<script language=\"javascript\">alert(\"Your new and Retype Password is not match !!! . Try again \");document.location.href='changepassword.php';</script>";
					}
			}
		else
			{
				echo "<script language=\"javascript\">alert(\"Your old password is wrong !!!, Check your old password and try again. \");document.location.href='changepassword.php';</script>";
			}
	}
}
?>

<?php
function image()
{
if(isset($_POST["submit"]))
{
	if (!empty($_FILES["uploadImage"]["name"]))
	{
		include 'db_con.php';

		$ImageSavefolder = "uploads/";	

		move_uploaded_file($_FILES["uploadImage"]["tmp_name"] , "$ImageSavefolder".$_FILES["uploadImage"]["name"]);

		mysqli_query($con,"UPDATE usersignup SET profilepic = '".$_FILES['uploadImage']['name']."' where id=".$_SESSION['id']);

		if($con)
		{ 
		header("location:editprofile.php");
			echo '<p align="center"> Image name successfully saved into MySQL db.</p>'; 
		}	
		else 
		{
			echo '<p align="center"> Sorry, Please try again.</p>';
		}
	}
	else 
	{
		echo '<p align="center"> Select file to upload </p>';
	}
}

}
?>

<?php
function propertyimage()
{	  
if (isset($_POST['propsubmit']))
{  

if (!empty($_FILES["propertyImage1"]["name"]) && !empty($_FILES["propertyImage2"]["name"]) && !empty($_FILES["propertyImage3"]["name"]) && !empty($_FILES["propertyImage4"]["name"]))
 {
	include 'db_con.php';
	$ImageSavefolder = "propimguploads/";
	move_uploaded_file($_FILES["propertyImage1"]["tmp_name"] , "$ImageSavefolder".$_FILES["propertyImage1"]["name"]);
   
    move_uploaded_file($_FILES["propertyImage2"]["tmp_name"] , "$ImageSavefolder".$_FILES["propertyImage2"]["name"]);
    
    move_uploaded_file($_FILES["propertyImage3"]["tmp_name"] , "$ImageSavefolder".$_FILES["propertyImage3"]["name"]);
   
    move_uploaded_file($_FILES["propertyImage4"]["tmp_name"] , "$ImageSavefolder".$_FILES["propertyImage4"]["name"]);
  

	$propertytitle = $_POST['propertytitle'];
	$propertycity = $_POST['propertycity'];
	$contact = $_POST['contact'];
    $bhk= $_POST['bhk'];
	$propertyinformation = $_POST['propertyinformation'];
 
 $sql="insert into property(propertytitle, propertycity, contact, bhk, propertyinformation, propertypic1, propertypic2, propertypic3, propertypic4)"
           . " values('$propertytitle','$propertycity','$contact', '$bhk', '$propertyinformation', '".$_FILES['propertyImage1']['name']."', '".$_FILES['propertyImage2']['name']."', '".$_FILES['propertyImage3']['name']."', '".$_FILES['propertyImage4']['name']."')";

	if(!mysqli_query($con, $sql))
	{
		die("error".mysqli_error($con));
	}
	//echo "<br>One record has been Added";
}

}
}
?>

