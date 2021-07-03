<!--  	<?php

	$name= $_POST['name'];
	$title=$_POST['title'];
	$profile=$_POST['profile'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$address=$_POST["address"];
	$hobby=$_POST['hobby'];
	$employ_detail=$_POST['employ_detail'];

	$tenth=$_POST['tenth'];
	$twlth=$_POST["twlth"];
	$ug=$_POST['ug'];
	$pg=$_POST['pg'];

	$skill1=$_POST['skill1'];
	$skill2=$_POST['skill2'];
	$skill3=$_POST['skill3'];
	$skill4=$_POST['skill4'];
	$skill5=$_POST['skill5'];
	$skill6=$_POST['skill6'];
	?>  -->
	





<!DOCTYPE html>
<html>
<head>
	<title> Resume Generator</title>
	<link rel="stylesheet" type="text/css" href="resumey.css" >
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>



<body style="background-color: gray;">
		<a class="btn2" href="information.php">Back</a>
		<button class="btn"	onclick="f();">
			print
		</button>

		<div class="container mb-4 pb-4">
			<div class="row">
				<div class="col-md-4 left">
					<div class="text-center left1">
					  <img src="img/profile.jpg" class="img-rounded p" alt="...">
					</div>
					<div class="col-md-12 left2 ">
						<h1 class="h1"><?php 
									$name= $_POST['name'];
						echo $name;  ?></h1>
						<hr size="100">
						<h1>	<?php $title=$_POST['title'];

						echo $title; ?>	</h1>
					</div>
					<div class="col-md-12 left3 mt-4 pt-4">
						<i class="fas fa-user "></i>
						<h4 >Profile</h4>
						<br>
						<p class=" left3_p pt-4"> 

								<?php $profile=$_POST['profile'];

						echo $profile; ?>
					
						</p>
					</div>
					<div class="col-md-12 left4">
						<i class="far fa-address-card  pt-4"></i>
						<h4 class="pt-4">Contact</h4>
						<br>
						<br>
						<div class="col-md-12 pt-4 mt-4 add1">
							<i class="fas fa-envelope-square"></i>
							<p>
								<?php $email=$_POST['email'];

						echo $email; ?>
							</p>
						</div>
						<div class="col-md-12 pt-4 add1">
							<i class="fas fa-phone"></i>
							<p>
								<?php $mobile=$_POST['mobile'];

						echo $mobile; ?>
							</p>
						</div>
						<div class="col-md-12 pt-4 add1">
							<i class="fas fa-home"></i>
							<p>
								<?php $address=$_POST['address'];

						echo $address; ?>
							</p>
						</div>
						<div class="col-md-12 pt-4 add1">
							<i class="fab fa-internet-explorer"></i>
							<p>
							<?php $website=$_POST['website'];

						echo $website; ?>
							</p>
						</div>
					</div>
						<div class="col-md-12 left3 mt-4 pt-4">
						<i class="fas fa-user "></i>
						<h4 >Hobby</h4>
						<br>
						<p class=" left3_p pt-4"> 
							<ul>
								<li><?php $address=$_POST['hobby'];

						echo $hobby; ?></li>
							</ul>
					
						</p>
					</div>
				</div>
				<div class="col-md-8 head2">
					<div class="row ">
					<div class="col-md-12  mt-4 right1 " id="right1">
						<i class="far fa-building mt-0"></i>
						<h1 class="mt-4 ml-4">Employment</h1>
						<hr style="margin-top: -7.5%;">

							
							<ul>
								<li>
									

								<?php $employ_detail=$_POST['employ_detail'];

						echo $employ_detail; ?>
								</li>
							</ul>
					

						

					</div>
					<div class="col-md-12 fill">
						
					</div>
					<div class="col-md-12  right2 mt-4" id="right2">
						<i class="fas fa-graduation-cap "></i>
						<h1 class="mt-4 ml-4">Education</h1>
						<hr style="margin-top: -6.4%;">

							<div class="col-md-12 ed1 mt-4" >
							<ul>
								<li>
									

								<?php $tenth=$_POST['tenth'];

						echo $tenth; ?>

								</li>
							</ul>
					
							</div>
							<div class="col-md-12 ed2 mt-4">
							<ul>
								<li>
									

								<?php $twlth=$_POST['twlth'];

						echo $twlth; ?>

								</li>
							</ul>			
							</div>
							<div class="col-md-12 ed3">
							<ul>
								<li>
									
								<?php $ug=$_POST['ug'];

						echo $ug; ?>


								</li>
							</ul>
							</div>
							<div class="col-md-12 ed4">
							<ul>
								<li>
									

								<?php $pg=$_POST['pg'];

						echo $pg; ?>

								</li>
							</ul>
							</div>
						

					</div>
					<div class="col-md-12 fill">
						
					</div>
					<div class="col-md-12  mt-4  right1 " id="right1">
						<i class="fal fa-certificate"></i>
						<h1 class="mt-4 ml-4">Skill</h1>
						<hr style="margin-top: -7.5%;">

						
						<div class="col-md-6 s1 ">
							<div class="row">
								<div class="col-md-6 x1">
								
								<h5>	<?php $skill1=$_POST['skill1'];
										echo $skill1;	?></h5>
								
								
							</div>
							<div class="col-md-6 x2">
								<img src="img/skill.png" class="rounded q">
							</div>
							</div>
							
						</div>
						<div class="col-md-6 s2 ">
							<div class="row">
								<div class="col-md-6 x1">
								
									<h5>	<?php $skill2=$_POST['skill2'];
										echo $skill2;	?></h5>
								
								
							</div>
							<div class="col-md-6 x2">
								<img src="img/skill.png" class="rounded q">
							</div>
							</div>
							
						</div>
						<div class="col-md-6 s3 ">
						<div class="row">
								<div class="col-md-6 x1">
								
									<h5>	<?php $skill3=$_POST['skill3'];
										echo $skill3;	?></h5>
								
								
							</div>
							<div class="col-md-6 x2">
								<img src="img/skill.png" class="rounded q">
							</div>
							</div>
						</div>
						<div class="col-md-6 s4 ">
						<div class="row">
								<div class="col-md-6  x1">
								
									<h5>	<?php $skill4=$_POST['skill4'];
										echo $skill4;	?></h5>
								
								
							</div>
							<div class="col-md-6 x2">
								<img src="img/skill.png" class="rounded q">
							</div>
							</div>
						</div>
						<div class="col-md-6 s5 ">
							<div class="row">
								<div class="col-md-6 ">
								
									<h5>	<?php $skill5=$_POST['skill5'];
										echo $skill5;	?></h5>
								
								
							</div>
							<div class="col-md-6 x2">
								<img src="img/skill.png" class="rounded q">
							</div>
							</div>
						</div>
						<div class="col-md-6 s6 ">
							<div class="row">
								<div class="col-md-6 x1">
								
									
									<h5>	<?php $skill6=$_POST['skill6'];
										echo $skill6;	?></h5>
								
								
							</div>
							<div class="col-md-6 x2">
								<img src="img/skill.png" class="rounded q">
							</div>
							</div>
						</div>
						

						

					</div>

				</div>
				</div>
				
				


			</div>
		</div>


</body>
</html>
<script>
	
	function f() {
		document.querySelector(".btn").style.display="none";
		document.querySelector(".btn2").style.display="none";
		window.print();
	}

</script>

<!-- 	echo "<h1> $name </h1> <br>";
	echo "<h1> $title </h1> <br>";
	echo "<h1> $profile </h1> <br>";
	echo "<h1> $email </h1> <br>";
	echo "<h1> $mobile </h1> <br>";
	echo "<h1> $address </h1> <br>";
	echo "<h1> $hobby </h1> <br>";
	echo "<h1> $employ_detail </h1> <br>";
	echo "<h1> $tenth </h1> <br>";
	echo "<h1> $twlth </h1> <br>";
	echo "<h1> $skill1 </h1> <br>";
	echo "<h1> $skill2 </h1> <br>";
	echo "<h1> $skill3 </h1> <br>";
	echo "<h1> $skill4 </h1> <br>";
	echo "<h1> $skill5 </h1> <br>";
	echo "<h1> $skill6 </h1> <br>"; -->
