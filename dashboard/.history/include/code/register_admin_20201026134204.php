<?php include('../db_connection.php'); ?>
<?php
		$admin_name = $_POST['admin_name'];
		$admin_post = $_POST['admin_post'];
		$admin_email = $_POST['admin_email'];
		$admin_password = $_POST['admin_password'];

		$sql = "INSERT INTO admin(name,post,email,password) VALUES('$admin_name','$admin_post','$admin_email','$admin_password')";
        if(mysqli_query($conn,$sql))
          echo 1;
        else
          echo 0;

?>