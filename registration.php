<?php
session_start();
//header('location:login.html');
$connection=mysqli_connect('localhost','root',"",'project');
//$connection=mysqli_connect('localhost','root','write your password here')

mysqli_select_db($connection,'project');

$name=$_POST['user'];
$email=$_POST['emailid'];
$password=$_POST['password'];

$select="select * from loginregistration where emailid='$email'";
$result=mysqli_query($connection,$select);
$num=mysqli_num_rows($result);
if($num==1)
{
    echo" user already exists";
}
else
{
    $reg="insert into loginregistration(user,emailid,password)VALUES('$name','$email','$password')";
	if ($connection->query($reg) ===true)
	{
		header("location:index1.html");
	}
	else
	{
		echo "ERROR: could not able to execute $sql.".$link->error;
	}
}
$connection->close();
?>