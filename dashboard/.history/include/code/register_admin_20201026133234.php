<?php include('../db_connection.php'); ?>
<?php
		$name = $_POST['name'];
		$post = $_POST['post'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		$sql = "INSERT INTO admin(name,post,email,password) VALUES('$name','$post','$email','$password')";
        if(mysqli_query($conn,$sql))
          echo 1;
        else
          echo 0;

?>