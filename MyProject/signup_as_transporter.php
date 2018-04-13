
<?php
	$submit=$_POST['submit'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email=$_POST['email'];
	$mob=$_POST['mob'];
	$gender = $_POST['gender'];
	$dl=$_POST['dl']; 
	$vehicleno=$_POST['vehicleno']; 
	$vehicletype=$_POST['vehicletype']; 
	$username=$_POST['username'];
	$password=$_POST['password'];
		$con=mysqli_connect('localhost','root',"");
		mysqli_select_db($con,"Myproject");
		$query="INSERT INTO  `Myproject`.`TransportRegistration` (
				`id` ,
				`fname` ,
				`lname` ,
				`email` ,
				 mob ,
				`gender` ,
				`dl_no` ,
				`vehicle_no` ,
				`vehicle_type` ,
				`username` ,
				`password`
				)
				VALUES (
				NULL ,   '$fname',  '$lname',  '$email',  $mob,  '$gender',  '$dl',  '$vehicleno',  '$vehicletype',  '$username',  '$password'
				)
				";
				$result=mysqli_query($con,$query);
				if($result==1)
				{
					?><script>alert('Successflly inserted..');</script><?php
					//header('location:http://localhost/Myproject/index-3.html');
				}
				else
				{
					?><script>alert('try with another password..');</script><?php
					//header('location:http://localhost/Myproject/index-3.html');
				}
?>