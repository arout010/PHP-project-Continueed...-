<?php 
	session_start();
		if(!isset($_SESSION['id']))
			header('location:http://localhost/Myproject/loginastransporter.html');
?>
<html>
	<head>
	</head>
	<link rel="stylesheet" type ="text/css" href="homecss.css"/>
	<!--<link rel="stylesheet" type ="text/css" href="homecss_table.css"/>-->
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
		<div class="table-users">
		<center><h2>Transporters</h2></center>
			<section class="section">
				<?php
						$state= $_SESSION['state'];
						$dist= $_SESSION['dist'];
						$city= $_SESSION['city'];
						$source= $_SESSION['source'];
						$dest= $_POST['dest'];
						$con=mysqli_connect('localhost','root');
						mysqli_select_db($con,'Myproject');
						$q="select * from addstatus where state='$state' && dist='$dist' && city='$city' && source='$source'&& destination='$dest'";
						$result=mysqli_query($con,$q);
						$nm=mysqli_num_rows($result);
						$i=$nm;
						if($nm)
						{
							while(@$nm--)
							{
								
								?> 
								<table  class="table" border="3">
									<tr><center></p>record number:<?php echo $nm-$i;?></p></center>
								<?php
							$f=@mysqli_fetch_object($result);
							$Tid=$f->id;
							$dist=$f->distance;
							$time=$f->Ttime;
							$q="select * from TransportRegistration where id='$Tid'";
							$res=mysqli_query($con,$q);
							if(mysqli_num_rows($res))
							{
								
								$f=@mysqli_fetch_object($res);
								/*echo $f->fname." ".$f->lname."</br>";
								echo $f->email."</br>";
								echo $f->mob."</br>";
								echo $f->dl_no."</br>";
								echo $f->vehicle_no."</br>";
								echo $f->vehicle_type."</br>";
								echo $source."</br>";
								echo $dest."</br>";
								echo $dist."</br>";
								echo $time."</br>";*/
								?>
								  <tr>
								  <tr><th>Name</th><td><?php echo $f->fname." ".$f->lname;?></td></tr>
								  <tr><th>Email</th><td><?php echo $f->email;?></td></tr>
								  <tr><th>Mob No</th><td><?php echo $f->mob;?></td></tr>
								  <tr><th>Dl No</th><td><?php echo $f->dl_no;?></td></tr>
								  <tr><th>Vehicle NO</th><td><?php echo $f->vehicle_no;?></td></tr>
								  <tr><th>Vehicle Type</th><td><?php echo $f->vehicle_type;?></td></tr>
								  <tr><th>Source Stop</th><td><?php echo $source;?></td></tr>
								  <tr><th>Destination Stop</th><td><?php echo $dest;?></td></tr>
								  <tr><th>distance</th><td><?php echo $dist." K.m";?></td></tr>
								  <tr><th>Time taken</th><td><?php echo $time." Min";?></td></tr>
								  
							   </table><?php
							}
							else
							{
								echo "1 Sql Error.....Record doesnot exist";
							}
							}
						}
						
						else
						{
							echo "2 Sql Error.....";
						}
				?>
				
			</section>
			</div>
		
		</div>
	</div>
	
	</body>
</html>