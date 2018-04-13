
<?php
	//$submit=$_POST['submit'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email=$_POST['email'];
	$mob=$_POST['mob'];
	$gender = $_POST['gender'];
	$username=$_POST['username'];
	$password=$_POST['password'];
		$con=mysqli_connect('localhost','root',"");
		mysqli_select_db($con,"Myproject");
		$query="INSERT INTO  `Myproject`.`UserRegistration` (
				`id` ,
				`fname` ,
				`lname` ,
				`email` ,
				 mob ,
				`gender` ,
				`username` ,
				`password`
				)
				VALUES (
				NULL ,   '$fname',  '$lname',  '$email',  $mob,  '$gender','$username','$password'
				)
				";
				$result=mysqli_query($con,$query);
				if($result==1)
				{
					?><script>alert('Successflly inserted..');</script><?php
					//header('location:http://localhost/Myproject/index2.html');
				}
				else
				{
					?><script>alert('Try with another Username..');</script><?php
					//header('location:http://localhost/Myproject/index2.html');
				}
				
				//header('location:http://localhost/Myproject/index2.html')
?>