

<!DOCTYPE html>
<html>
<head>
	<title>show data</title>
	<script type="text/javascript" src="design/js/jquery.js"></script>
	<script type="text/javascript" src="design/js/popper.min.js"></script>
  	<script type="text/javascript" src="dezsign/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="design/css/bootstrap.min.css">
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

</head>
<body class="container-fluid p-0 m-0 bg-info ">
	<div class="container-fluid mt-2 p-2 text-center bg-light w-50 shadow-lg" style="border-radius: 5px">
		<span class="h5 text-dark">Student Data</span>
	</div>
	<div class="container-fluid p-0 mt-2 shadow-lg" style="width: 96%;margin-left: 2%;border-radius: 15px">
	<div class="container-fluid p-2 mt-4 bg-light shadow-lg" style="width: 100%; border-radius:5px">
		<button class="btn btn-dark"><a href="register.php" style="text-decoration: none;color: white">Register New</a></button>
		<button class="btn btn-danger"><a href="index.php" style="text-decoration: none;color: white">Logout</a></button>
	</div>
	<div>
		<input class="form-control bg-dark mt-2"  id="myInput" type="text" placeholder="Search...">
	</div>
		<table class="table table-striped bg-white p-0 m-0 " style="border-radius: 15px">
			<tbody id="myTable">
			<tr class=" bg-dark text-white">
				<th> Student_Name </th>
				<th> Email </th>
				<th> Phone </th>
				<th> Password </th>
				<th> Department </th>
				<th> Semester </th>
				<th> Language </th>
			</tr>

			<?php
			$conn= new Mysqli("localhost","root","","register");
			$result= $conn->query("select * from student");
			$num=mysqli_num_rows($result);
			for($i=1;$i<=$num;$i++)
			{
				$row=mysqli_fetch_array($result);
			?>
			<tr style="font-size: 12px">
				
				<th> <?php echo $row['student_name'] ?></th>
				<th> <?php echo $row['email'] ?></th>
				<th> <?php echo $row['phone'] ?></th>
				<th> <?php echo $row['password'] ?></th>
				<th> <?php echo $row['department'] ?></th>
				<th> <?php echo $row['semester'] ?></th>
				<th> <?php echo $row['languages'] ?></th>
			</tr>

			<?php 	
			}
			
			?>
			</tbody>
		</table>
	</div>

</body>
</html>