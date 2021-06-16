<?php
session_start();
$email=$_POST['email'];
$password=$_POST['password'];
$con=mysqli_connect("localhost","root");
if($con)
	echo "Connection done";
else
	echo "failed";
mysqli_select_db($con,'akshat');
$q="select * from signup where email='$email' && password='$password'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1)
{
	$_SESSION['email']=$email;
	header('location:http://localhost/login_success.php');
}
else
	header('location:http://localhost/ashdu.html');
?>