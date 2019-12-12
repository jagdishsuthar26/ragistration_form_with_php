<!DOCTYPE html>
<html>
<head>
	<title>ragistration</title>
	<script type="text/javascript" src="design/js/jquery.js"></script>
	<script type="text/javascript" src="design/js/popper.min.js"></script>
  	<script type="text/javascript" src="design/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="design/css/bootstrap.min.css">
</head>
<body class="container-fluid p-0 m-0">
	<div class="container-fluid shadow-lg bg-white pt-3 w-50" style="border-radius: 20px;margin-top:15% ">
	<?php

	 
	
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$upass=$_POST['pass'];
		$dep=$_POST['dept'];
		$sem=$_POST['sem'];
		$lang=$_POST['language'];
		
		$pass=md5($upass);
	$conn= new Mysqli("localhost","root","","register");
		if($conn)
		{

		$conn->query("insert into student(student_name,email,phone,password,department,semester,languages) values('$name','$email','$phone','$pass','$dep','$sem','$lang')");
			
			echo "Student is successfully registered in database...";
		}
		else
		{
			echo "Database Connection Error !!!";
		}
	
	?>
	
		<hr>
		<button class="btn btn-block btn-success"><a href="register.php ?>" style="text-decoration: none;color: blue">Back To Registration</a></button>
		<span>&nbsp;</span>
	</div>
</body>
</html>



