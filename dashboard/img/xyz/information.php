<!DOCTYPE html>
<html>
<head>
	<title>resume data</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="info.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body style="background-color: cyan;">

	<div class="container">
		<div class="row bg-dark">
			<div class="col-md-12 header">
				<h1 class="mt-4">
					Resume Generator
					
				</h1>
				<small style="font-size: 18px; color: snow; float: left;
				 	margin-left: 40%;">Generate your own resume !</small>

			</div>
			<div class="col-md-12 data">
			
						<form action="resumey.php" method="post">
					  
					  <div class="form-group mt-4">

					    <label for="exampleInputEmail1">Your Name</label>
					    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" placeholder="Enter your name">
					 
					  </div>
					  <div class="form-group">

					    <label for="exampleInputEmail1">Title</label>
					    <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter job title">
					 
					  </div>
					   <div class="form-group">

						    <label for="exampleFormControlTextarea1">Profile info</label>
						    <textarea name="profile" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
					   </div>
					  <div class="form-group contact">

					    <label for="exampleInputEmail1">Email address</label>
					    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
					  
					  </div>
					  <div class="form-group">

					    <label for="exampleInputPassword1">Mobile</label>
					    <input type="number" name="mobile" class="form-control" id="exampleInputPassword1" placeholder="mobile">
					  </div>
					  <div class="form-group">

					    <label for="exampleInputPassword1">Address</label>
					    <input type="text" name="address" class="form-control" id="exampleInputPassword1" placeholder="address">
					  </div>
					  	  <div class="form-group">

					    <label for="exampleInputPassword1">website</label>
					    <input type="text" name="website" class="form-control" id="exampleInputPassword1" placeholder="address">
					  </div>

					  <div class="form-group">

					    <label for="exampleInputPassword1">hobby</label>
					    <input type="text" name="hobby" class="form-control" id="exampleInputPassword1" placeholder="hobby">
					  </div>
					   <div class="form-group">

						    <label for="exampleFormControlTextarea1">Employment info</label>
						    <textarea class="form-control" id="exampleFormControlTextarea1" name="employ_detail" rows="3"></textarea>
					   </div>
					  <div class="form-group">

					    <label for="exampleInputPassword1">10th marks with school</label>
					    <input type="text" class="form-control" id="exampleInputPassword1" name="tenth" placeholder="10th marks">
					  </div>
					  <div class="form-group">

					    <label for="exampleInputPassword1">12th marks with college/school</label>
					    <input type="text" name="twlth"class="form-control" id="exampleInputPassword1" placeholder="12th marks">
					  </div>
					    <div class="form-group">

					    <label for="exampleInputPassword1">Under graducation</label>
					    <input type="text" name="ug" class="form-control" id="exampleInputPassword1" placeholder="under graducation">
					  </div>
					    <div class="form-group">

					    <label for="exampleInputPassword1">Post graducation</label>
					    <input type="text" name="pg" class="form-control" id="exampleInputPassword1" placeholder="post graducation">
					  </div>

					  <!-- skills -->

					  <div class="form-group">

					    <label for="exampleInputPassword1">skill1</label>
					    <input type="text" name="skill1" class="form-control" id="exampleInputPassword1" placeholder="Enter Skill">
					  </div>

					  <div class="form-group">

					    <label for="exampleInputPassword1">skill2</label>
					    <input type="text" name="skill2" class="form-control" id="exampleInputPassword1" placeholder="Enter Skill">
					  </div>

					  	  <div class="form-group">

					    <label for="exampleInputPassword1">skill3</label>
					    <input type="text" name="skill3" class="form-control" id="exampleInputPassword1" placeholder=" Enter Skill">
					  </div>

					  	  <div class="form-group">

					    <label for="exampleInputPassword1">skill4</label>
					    <input type="text" name="skill4" class="form-control" id="exampleInputPassword1" placeholder="Enter Skill ">
					  </div>

					  	  <div class="form-group">

					    <label for="exampleInputPassword1">skill5</label>
					    <input type="text" name="skill5" class="form-control" id="exampleInputPassword1" placeholder="Enter Skill ">
					  </div>

					  	  <div class="form-group">

					    <label for="exampleInputPassword1">skill6</label>
					    <input type="text" name="skill6" class="form-control" id="exampleInputPassword1" placeholder="Enter Skill ">
					  </div>

					  
					  <div class="form-check">

					  </div>
					  <button type="submit" class="btn btn-primary mb-2">Submit</button>
					</form>
			</div>
		</div>
	</div>


</body>
</html>
