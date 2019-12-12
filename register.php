<!DOCTYPE html>
<html>
<head>
	<title>registration form</title>
	<script type="text/javascript" src="design/js/jquery.js"></script>
	<script type="text/javascript" src="design/js/popper.min.js"></script>
  	<script type="text/javascript" src="design/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="design/css/bootstrap.min.css">
  	<script type="text/javascript" language="javascript">
  		$(document).ready(function() {
  			$("#reg").mouseenter(function(){
			var a = [];
            $.each($("input[name='language']:checked"), function(){
                a.push($(this).val());
            });
            var lang=a.join(", ");
            $("#lang").val(lang);
		});
	});
  	</script>
</head>
<body class="container-fluid bg-info p-0 m-0">
	<br>
	<div class="container-fluid m-auto p-2 text-center bg-light w-50 shadow-lg" style="border-radius: 10px">
		<span class="h5 text-dark">Student Registration</span>
	</div>
	<form action="registration.php"  method="post" class=" mt-2 bg-light p-4 shadow-lg" style="width: 70%;margin-left:15%; border-radius: 10px">
    <div class="container-fluid p-0 m-0 row">
    	<label class="col-sm-2 " style="font-weight: bolder;font-size: 18px">Name: </label>
     	<input type="text" name="name" id="name" class="form-control col-sm-10 " placeholder="Enter Student Name" required>
    </div>
    <br>
    <div class="container-fluid p-0 m-0 row">
    	<label class="col-sm-2" style="font-weight: bolder;font-size: 18px">Email: </label>
    	<input type="Email" name="email" id="email" class="form-control col-sm-10" placeholder="Enter email id" required>
    </div>
    <br>
    <div class="container-fluid p-0 m-0 row">
    	<label class="col-sm-2" style="font-weight: bolder;font-size: 18px">Mobile: </label>
    	<input type="phone" name="phone" id="phone" class="form-control col-sm-10" placeholder="Enter mobile number" required minlength="10" maxlength="10">
    </div>
    <br>
    <div class="container-fluid p-0 m-0 row">
    	<label class="col-sm-2" style="font-weight: bolder;font-size: 18px">Password: </label>
    <input type="Password" name="pass" id="pass" class="form-control col-sm-10" placeholder="Enter Password" required minlength="8" maxlength="14">
    </div>
    <br>
    <div class="container-fluid p-0 m-0 row">    	
  		<label class="col-sm-2 " style="font-weight: bolder;font-size: 18px">Department: </label>  
  		<div class="radio-inline col-sm-10">		
		CSE&nbsp;<input type="radio"  style="margin-right: 3%" name="dept"  value="Computer Science & Engineering" required>
		ME&nbsp;<input type="radio" style="margin-right: 3%" name="dept" value="Mechanical Engineering" required>
		EE&nbsp;<input type="radio" style="margin-right: 3%" name="dept" value="Electrical Engineering" required>
		EC&nbsp;<input type="radio" style="margin-right: 3%" name="dept" value="Electronics & Communication Engineering" required>
		CE&nbsp;<input type="radio" style="margin-right: 3%" name="dept" value="Civil Engineering" required>
		</div>
	</div>
		<br>

	<div class="container-fluid p-0 m-0 row">
			<label class="col-sm-2" style="font-weight: bolder;font-size: 18px">Semester: </label>
	        <select name="sem" class="form-control col-sm-10" required>
	        <option value="" selected disabled>Select Semester</option>
	  		<option value="I Sem">I Sem</option>
	  		<option value="II Sem">II Sem</option>
	  		<option value="III Sem">III Sem</option>
	  		<option value="IV Sem">IV Sem</option>
	  		<option value="V Sem">V Sem</option>
	  		<option value="VI Sem">VI Sem</option>
	  		<option value="VII Sem">VII Sem</option>
	  		<option value="VIII Sem">VIII Sem</option>
		</select>
	</div>
		<br>
		<div class="checkbox container-fluid p-0 m-0 ">
			<label class="col-sm-2" style="font-weight: bolder;font-size: 18px">Language: </label>
			C&nbsp;<input style="margin-right: 3%" type="checkbox" name="language" value="C">
			C++&nbsp;<input style="margin-right: 3%" type="checkbox" name="language" value="C++">
			PYTHON&nbsp;<input style="margin-right: 3%" type="checkbox" name="language" value="Python">
			JAVA&nbsp;<input style="margin-right: 3%" type="checkbox" name="language" value="Java">
			SQL&nbsp;<input style="margin-right: 3%" type="checkbox" name="language" value="Sql">
			PHP&nbsp;<input style="margin-right: 3%" type="checkbox" name="language" value="Php">
			<input type="text" id="lang" name="lang" hidden>
		</div>
		<hr>
		<div class="center">
		<input type="submit" class="btn btn-success " name="reg" value="Register" id="reg">
		<input type="reset" class="btn btn-danger" name="reset" value="&nbsp;reset&nbsp;">
		<button class="btn btn-danger"><a href="index.php" style="text-decoration: none;color: white">Cancel</a></button>
		</div>

	</form>
</body>
</html>