<?php
$con=mysqli_connect('localhost','root','12345','akshat') or die("unable to connect");
$username=$_post["username"];
$password=$_post["password"];

$query="insert into 'login'('username','password') values ('$username','$password')";
$query_run=mysqli_query($con,$query);

?>