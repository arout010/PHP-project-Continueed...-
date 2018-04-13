<?php 
	session_start();
		if(!isset($_SESSION['id']))
			header('location:http://localhost/Myproject/loginastransporter.html');
?>
<html>
	<head>
	</head>
	<link rel="stylesheet" type ="text/css" href="homecss.css"/>
	<body>
	<div class = "cointener">
		<div class = "header">
			<div class = "logo"><img src = "AKLogo.png" class ="aklogo"/></div>
			<div class = "menubar">
				<ul>
					<div class="menu1"><li><a href ="AddStaus.php" >Add Satus</a></li></div>
					<div class="menu1"><li><a href ="UpdateStatus.php" >Update Satus</a></li></div>
					<div class="menu1"><li><a href ="Help.php" >Help</a></li></div>
					<div class="menu1"><li><a href ="About.php" >About us</a></li></div>
					<div class="menu1"><li><a href ="logout.php" >Logout</a></li></div>
				</ul>
			</div>
		</div>
		
		<div class = "leftside">
		<?php
			$id = $_SESSION['id'];
			$con=mysqli_connect('localhost','root');
			mysqli_select_db($con,'Myproject');
			$q="select * from TransportRegistration where id='$id'";
			$result=mysqli_query($con,$q);
			$num=mysqli_num_rows($result);
			if($num==1)
			{
				$n=mysqli_num_rows($result);
				$f = @mysqli_fetch_object($result);
				$name = $f->fname ." ". $f->lname;
				$email = $f->email;
				$mobno = $f->mob;
				$dl=$f->dl_no;
				$vehicletype =$f->vehicle_type;
				$vehicleno =$f->vehicle_no;
			}
		?>
		<h2>Personal Info</h2></br>
		<p>Name:<?php echo $name;?></p>
		<p>Email:<?php echo $email;?></p>
		<p>Mob No:<?php echo $mobno;?></p>
		<p>DL No:<?php echo $dl;?></p>
		<p>Vehicle Type:<?php echo $vehicletype;?></p>
		<p>Vehicle NO:<?php echo $vehicleno;?></p>
		</div>
		<div class = "rightside">
		<section class="section">
				<p> About us</p>
		</section>
		
		</div>
	</div>
	
	</body>
</html>