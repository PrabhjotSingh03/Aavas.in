<?php
	function SignIn($a=array())
	{
		include "db_con.php";
			$email=$a['email'];
			$pass=$a['password'];
			
			$email=mysqli_real_escape_string($con,$email);
			$password=mysqli_real_escape_string($con,$pass);
		
		$cek = "SELECT * FROM adminlogin WHERE email = '$email' AND password = '$password'";	
		$result = mysqli_query($con, $cek) or die(mysqli_error());
		$tuple = mysqli_fetch_array($result);
		
		IF($tuple > 0)
			{
				session_start();

					$_SESSION['email'] = $tuple['2'];
					$_SESSION['fullname'] = $tuple['1'];
				
					
		echo "<script language=\"javascript\">alert(\"welcome \");document.location.href='view_records.php';</script>";
	}
	else
		{
			echo "<script language=\"javascript\">alert(\"Invalid username or password\");document.location.href='index.php';</script>";
		}
		mysqli_close($con);
}
?>

     

<?php
function Select($a=array())
	{
		include "db_con.php";
		
		$query="select * FROM usersignup";
		$result=(mysqli_query($con,$query));
		
		if($result)
		{
			?>
			
			<table align='center' border='5' width='1900' style='margin-top:80px' >
			<tr>
     <th align="center" bgcolor="#99CCFF" colspan="15"><h1 align="center">Viewing all the records</h1></th>
     </tr>
			<tr >
				<th><h4 align="center">Id</th>
				<th><h4 align="center">Fullname</th>
				<th><h4 align="center">Email</th>
				<th><h4 align="center">Password</th>
				<th><h4 align="center">Contact</th>
				<th><h4 align="center">Gender</th>
				<th><h4 align="center">Education</th>
				<th><h4 align="center">Occupation</th>
				<th><h4 align="center">Institute</th>
				<th><h4 align="center">Organization</th>
				<th><h4 align="center">Yourself</th>
				<th><h4 align="center">Profile Image</th>
				<th><h4 align="center">Update</th>
				<th><h4 align="center">Delete</th>
				<th><h4 align="center">Status</th>
			</tr>
		<?php
				$i=1;
				while($tuple=mysqli_fetch_array($result))
				{
					?>
					
					<tr>
						<td><h4 align="center"><?php echo $i; ?></td>
						<td><h5 align="center"><?php echo $tuple[1];?></td>
						<td><h5 align="center"><?php echo $tuple[2];?></td>
						<td><h5 align="center"><?php echo $tuple[3];?></td>
						<td><h5 align="center"><?php echo $tuple[4];?></td>
						<td><h5 align="center"><?php echo $tuple[5];?></td>
						<td><h5 align="center"><?php echo $tuple[6];?></td>
						<td><h5 align="center"><?php echo $tuple[7];?></td>
						<td><h5 align="center"><?php echo $tuple[8];?></td>
						<td><h5 align="center"><?php echo $tuple[9];?></td>
						<td><h5 align="center"><?php echo $tuple[10];?></td>
						<td><h5 align="center"><?php echo $tuple[11];?></td>
					
						<td><h5 align="center"><a href="update_records.php?id=<?php echo $tuple[0]; ?>">Update</a></td>
						<td><h5 align="center"><a href="delete_record.php?id=<?php echo $tuple[0]; ?>">Delete</a></td>
						<?php
						if($tuple[12]==0)
						{
						?>
						<td><h5 align="center"><a href="status.php?id=<?php echo $tuple[0];?>&status=<?php echo $tuple[12];?>">Activate Account</a></td>
						<?php }
							else {
						?>
						<td><h5 align="center"><a href="status.php?id=<?php echo $tuple[0];?>&status=<?php echo $tuple[12];?>">De-Activate Account</a></td>
						<?php
							}
						?>
					</tr>
					<?php
					$i++;
				}
					?>
			</table>
					<?php
						mysqli_close($con);
		}	
				
	}
?>
<?php
function DeleteRow()
{
include "db_con.php";
	
	$q="DELETE from usersignup where id=".$_REQUEST['id'];
	$r=mysqli_query($con,$q);
	if($r)
			{
				echo "<script language=\"javascript\">alert(\"Data Deleted successfully!!! \");document.location.href='view_records.php';</script>";
			}
		else
			{
				echo "<script language=\"javascript\">alert(\"Data Not Deleted, Try Again!!!! \");document.location.href='view_records.php';</script>";
			}
    mysqli_close($con);
}
?>

<?php
function getData()
{
	include "db_con.php";
	$a=array();
	$q="select * from usersignup where id=".$_REQUEST['id'];
	$r=mysqli_query($con,$q);
	$row=mysqli_fetch_array($r);
	  {
		  array_push($a,$row);
	  }
	  return $a;
	  mysqli_close($con);
}
?>

<?php
function UpdateValues($a=array())
	{
include"db_con.php";
	
	$fullname=$a['fullname'];
	$email=$a['email'];
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
	
	$fullname=mysqli_real_escape_string($con,$fullname);
	$email=mysqli_real_escape_string($con,$email);
	$contactnumber=mysqli_real_escape_string($con,$contactnumber);
	$gender=mysqli_real_escape_string($con,$gender);
	$education=mysqli_real_escape_string($con,$education);
	$occupation=mysqli_real_escape_string($con,$occupation);
	$institute==mysqli_real_escape_string($con,$institute);
	$organization=mysqli_real_escape_string($con,$organization);
	$yourself=mysqli_real_escape_string($con,$yourself);
	
	$q = "UPDATE usersignup SET fullname='$fullname',email='$email',contactnumber='$contactnumber',gender='$gender',education='$education',occupation='$occupation',institute='$institute',organization='$organization',yourself='$yourself' WHERE id=".$_REQUEST['id'];
	$query = mysqli_query($con,$q);
		if($query)
			{
				echo "<script language=\"javascript\">alert(\"Data Updated successfully!!! \");document.location.href='view_records.php';</script>";
			}
		else
			{
				echo "<script language=\"javascript\">alert(\"Data not Updated!!! \");document.location.href='view_records.php';</script>";
			}
    mysqli_close($con);
}
?>
<?php
function Status()
{
	include "db_con.php";
	$a="update usersignup SET status=0 WHERE id=".$_REQUEST['id'];
	$b="update usersignup SET status=1 WHERE id=".$_REQUEST['id'];
	if($_REQUEST['status']==0)
		{
			mysqli_query($con,$b);
			echo "<script language=\"javascript\">alert(\"Status Changed!!! \");document.location.href='view_records.php';</script>";
		}
	else
		{
			mysqli_query($con,$a);
			echo "<script language=\"javascript\">alert(\"Status Changed!!! \");document.location.href='view_records.php';</script>";
		}
mysqli_close($con);	
}
?>  


