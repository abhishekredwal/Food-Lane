<?php
$con=mysqli_connect("localhost","root","","akshat");

$user1=$_POST['user1'];
$user=$_POST['user'];
$pass=$_POST['pass'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$query="INSERT INTO signup VALUES ('$user1','$user','$pass','$email','$phone')";
if(mysqli_query($con,$query))
	header('location://localhost/login1.html');

mysqli_close($con);
?>
