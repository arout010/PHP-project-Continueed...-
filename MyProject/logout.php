<?php
	session_start();
	if(!($_SESSION['id']))
		header('location:http://localhost/Myproject/loginastransporter.html');
	$id = $_SESSION['id'];
	echo $id;
	$con=mysqli_connect('localhost','root','');
	mysqli_select_db($con,'Myproject');
	$q="delete from addstatus where id = '$id'";
	$res=mysqli_query($con,$q);
		header('location:http://localhost/Myproject/loginastransporter.html');
		session_destroy();
?>
