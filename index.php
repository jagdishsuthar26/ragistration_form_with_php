<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<script type="text/javascript" src="design/js/jquery.js"></script>
	<script type="text/javascript" src="design/js/popper.min.js"></script>
  	<script type="text/javascript" src="design/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="design/css/bootstrap.min.css">
  	<script type="text/javascript">
  		$(document).ready(function() {
			$("#sub").focusin(function() {
				var user=$("#uname").val();
				var pass=$("#upass").val();
				if(!(user=="jks" && pass=="jks@123"))
				{
					$("#err").text("Please Enter Valid User Name and Password !!!");
				}
				else
				{
				//console.profile("if");
				$("#err").text("");
				$("#sub").attr('type','submit');
				}
			});
			$("#sub").mouseenter(function() {
				var user=$("#uname").val();
				var pass=$("#upass").val();
				if(!(user=="jks" && pass=="jks@123"))
				{
					$("#err").text("Please Enter Valid User Name and Password !!!");
				}
				else
				{
				//console.profile("if");
				$("#err").text("");
				$("#sub").attr('type','submit');
				}
			});
		});
  	</script>

</head>
<body class="container-fluid bg-info p-0 m-0">
	<div class="container-fluid  p-0 text-center bg-light mt-4 w-25 shadow-lg" style="border-radius: 15px">
		<h3 class=" text-dark p-2 m-0"">Admin login page</h3>
	</div>
	<form action="home.php" method="post" class=" mt-5 bg-light p-4 shadow-lg " style="width: 50% ;margin-left:25%; margin-right:25% ;border-radius:10px">
		<div class="container-fluid pb-4 m-2 mb-2 text-center">
		<img src="logo.png" class="img shadow-lg" style="border-radius:12px;height: 20%;width: 20%">
	</div>
		<div class="container-fluid p-0 m-0 row">
		<label class="font-weight-bolder col-sm-3">User Name:</label>
		<input class="form-control col-sm-9" type="text" name="uname" id="uname" placeholder="Enter User-Name" required>
		</div>
		<br>
		<div class="container-fluid p-0 m-0 row">
		<label class="font-weight-bolder col-sm-3">Password:</label>
		<input class="form-control col-sm-9" type="Password" name="upass" id="upass" placeholder="Enter Password" required>
		</div>
		<div class="container-fluid text-center mb-2">
      			<span id="err" class="text-danger" style="font-family: italic; font-size: 15px">
      			</span>
      		</div>
		<hr>
		<div class="text-center">
		<input type="button" class="btn btn-success " name="login" value="login" id="sub">
		<input type="reset" class="btn btn-danger" name="reset" value="Clear">
		</div>
	</form>
</body>
</html>