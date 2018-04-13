<?php
session_start();
		if(!isset($_SESSION['id']))
			header('location:http://localhost/Myproject/loginastransporter.html');
//if(@$_POST['submit'])
//{
	$state = $_POST['State'];
	$dist= $_POST['District'];
	$city= $_POST['City'];
	$source= $_POST['Source_location'];
	$destination = $_POST['Destination_location'];
	$distance = $_POST['Distance'];
	$time = $_POST['Time'];
	if(!$state)
	{
		$state=$_SESSION['state'];
	}
	if(!$dist)
		$dist=$_SESSION['dist'];
	if(!$city)
		$city=$_SESSION['city'];
	if(!$source)
		$source=$_SESSION['source'];
	if(!$destination)
		$destination=$_SESSION['destination_location'];
	if(!$distance);
		$distance=$_SESSION['distance'];
	if(!$time)
		$time=$_SESSION['time'];
	$id = $_SESSION['id'];
	
	/*echo $_SESSION['state'];
	echo $_SESSION['dist'];
	echo $_SESSION['city'];
	echo $_SESSION['distance'];*/
	
	
	
	
	
	$con=mysqli_connect('localhost','root','');
	mysqli_select_db($con,'Myproject');
	$query="
			UPDATE  `myproject`.`addstatus` SET  `state` =  '$state',
			`dist` =  '$dist',
			`city` =  '$city',
			`source` =  '$source',
			`destination` =  '$destination',
			`distance` =  '$distance',
			`Ttime` =  '$time' WHERE  `addstatus`.`id` ='$id' LIMIT 1 
		";
	$result=mysqli_query($con,$query);
					if($result==1)
					{
						$_SESSION['state']=$state;
						$_SESSION['dist']=$dist;
						$_SESSION['city']=$city;
						$_SESSION['source']=$source;
						$_SESSION['destination_location']=$destination;
						$_SESSION['distance']=$distance;
						$_SESSION['time']=$time;
						?><script>alert('Successflly inserted..');</script><?php
						header('location:http://localhost/Myproject/Transporter_Home.php');
						
					}
					else
					{
						?><script>alert('Illigal Entry / you can add your Status only once for each login');</script><?php
						header('location:http://localhost/Myproject/Transporter_Home.php');
					}
//}
?>