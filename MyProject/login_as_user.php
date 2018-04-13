<?php
	session_start();
	$username=$_POST['username'];
	$password=$_POST['password'];
	$con=mysqli_connect('localhost','root','');
	mysqli_select_db($con,'Myproject');
	$q="select * from UserRegistration where username='$username' && password='$password'";
	$result=mysqli_query($con,$q);
	$num=mysqli_num_rows($result);
	if($num==1)
	{
		$q="select * from UserRegistration where username='$username' && password='$password'";
		$result=mysqli_query($con,$q);
		$n=mysqli_num_rows($result);
		$f = @mysqli_fetch_object($result);
		$_SESSION['id']=$f->id;
		header('location:http://localhost/Myproject/user_Home.php');
		?><script>alert('welcome...');</script><?php
	}
	else
	{
		header('location:http://localhost/Myproject/loginasuser.html');
		?><script>alert('sorry...');</script><?php
		
	}
?>