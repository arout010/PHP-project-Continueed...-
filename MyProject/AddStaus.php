<?php 
	session_start();
		if(!isset($_SESSION['id']))
			header('location:http://localhost/Myproject/loginastransporter.html');
?>
<html>
	<head>
	</head>
	<link rel="stylesheet" type ="text/css" href="homecss.css"/>
	<!--<link rel="stylesheet" type ="text/css" href="css1.css"/>
	<link rel="stylesheet" type ="text/css" href="css.css"/>-->
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
			<div class="img">
				<!--<a href="logout.php"><img src = "logout.png" class ="logout"/></a>-->
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
		</div>
		<div class = "rightside">
		<section class="section">
				<center><h2>Add Satus</h2></br></center>
				<form name="form" method="post" action="stats.php" >
				<label><b>State</b></label>
				<input type="text" name ="State" placeholder="Enter your state" required />
				<label><b>District</b></label>
				<input type="text" name ="District" placeholder="Enter your District" required />
				<label><b>City</b></label>
				<input type="text" name ="City" placeholder="Enter your City" required />
				<label><b>Source location</b></label>
				<input type="text" name ="Source_location" placeholder="Enter your Source_location" required />
				<label><b>Destination location</b></label>
				<input type="text" name ="Destination_location" placeholder="Enter your Destination_location" required />
				<label><b>Total K.M</b></label>
				<input type="text" name ="Distance" placeholder="Enter Total Distance(in k.m.)" required />
				<label><b>Total Time Taken</b></label>
				<input type="text" name ="Time" placeholder="Enter Total Time taken(in Hr.)" required />	
				<div class="clearfix">
				  <button type="reset" class="cancelbtn" name = "Cancel">Cancel</button>
				  <button type="submit" class="signupbtn" name="Submit">Enter</button>
				</div>
				</form>				
		</section>
		
		</div>
	</div>
	
	</body>
</html>
