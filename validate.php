<?php
session_start();

$connection=mysqli_connect('localhost','root',"",'project');
//$connection=mysqli_connect('localhost','root','write your password here')

mysqli_select_db($connection,'project');

$email=$_POST['emailid'];
$password=$_POST['password'];

$select="select * from loginregistration where emailid='$email' && password='$password'";
$result=mysqli_query($connection,$select);
$num=mysqli_num_rows($result);
if($num==1)
{
    header('location:index1.html');
}
else
{
   $message = "Invaild User Please Register";
	echo "<script type='text/javascript'>alert('$message');</script>";
	header('location:login.html');
}
?>