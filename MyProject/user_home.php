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
		<center><h1>USER HOME</h1></center>
		<div class = "header">
			<div class = "logo"><img src = "AKLogo.png" class ="aklogo"/></div>
			<div class = "menubar">
				<ul>
					<div class="menu1"><li><a href ="user_search.php" >Search</a></li></div>
					<div class="menu1"><li><a href ="#" >Help</a></li></div>
					<div class="menu1"><li><a href ="#" >About us</a></li></div>
					<div class="menu1"><li><a href ="logoutuser.php" >Logout</a></li></div>
				</ul>
			</div>
		</div>
		
		<div class = "leftside">
		<?php
			$id = $_SESSION['id'];
			$con=mysqli_connect('localhost','root');
			mysqli_select_db($con,'Myproject');
			$q="select * from UserRegistration where id='$id'";
			$result=mysqli_query($con,$q);
			$num=mysqli_num_rows($result);
			if($num==1)
			{
				$n=mysqli_num_rows($result);
				$f = @mysqli_fetch_object($result);
				$name = $f->fname ." ". $f->lname;
				$email = $f->email;
				$mobno = $f->mob;	
				$_SESSION['name']=$name;
				$_SESSION['email']=$email;
				$_SESSION['mobno']=$mobno;
			}
		?>
		<h2>Personal Info</h2></br>
		<p>Name:<?php echo $_SESSION['name'];?></p>
		<p>Email:<?php echo $_SESSION['email'];?></p>
		<p>Mob No:<?php echo $_SESSION['mobno'];?></p>
		</div>
		<div class = "rightside">
			<section class="section">
					
			</section>
		
		</div>
	</div>
	
	</body>
</html>