<!DOCTYPE html>
<html>
<head>
	
	<title>Bank Management System</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta charset="utf-8"name="viewport"content="width=device-width,intial-scale=1.0">
	<link rel="stylesheet"type="text/css"href="bootstrap-4.4.1/css/bootstrap.min.css">
	<script type="text/javascript"src="bootstrap-4.4.1/js/juquery_latest.js"></script>
	<script type="text/javascript"src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
	<style type="text/css">
		#side_bar{
			background-color: whitesmoke;
			padding: 50px;
			width: 300px;
			height: 450px;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar- expand-1g navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
               <a class="navbar-brand" href="index.php">Bank Management System(BMS)</a><br><br>
           </div>
			<ul class ="navbar-nav navbar-right">
				<li class="nav-item">
					<a class="nav-link"href="index.php">Admin Login</a>
				</li><br>
				<li class="nav-item">
					<a class="nav-link"href="index.php">Employee Login</a>
				</li><br>
				<li class="nav-item">
					<a class="nav-link"href="signup.php">Registration</a>
				</li>
			</ul>
		</div>
	</nav><br>
	<span><marquee>This is Bank Management System. Bank opens at 10:00 AM and close at 5:00 PM </marquee></span><br><br>
	<div class="row">
		<div class="col-md-4" id="side_bar">
			<h5>Bank Timing</h5>
			<ul>
				<li>Opening Timing:10:00 AM</li>
				<li>Closing Timing:5:00  PM</li>
				<li>(Friday Off)</li>
				<li>(Saturday Off)</li>
			</ul>
			<h5>What we Provide</h5>
			<ul>
				<li>Full Furniture</li>
				<li>Free Wi-fi</li>
				<li>News Papers</li>
				<li>Dicussion Room</li>
				<li>Pure Water</li> 
				<li>Peacefull Environment</li>
			</ul>
		</div>
	    <div class ="col-md-8" id="main_content">
	    	<center><h3>Employee Registration Form</h3></center>
	    	<form action="register.php" method="post">
	    		<div class="form-group">
	    			<level for="name">Full Name:</level>
	    			<input type="text"name="name"class="form-control"required>
	    		</div>
	    		<div class="form-group">
	    			<level for="name">Email ID:</level>
	    			<input type="text"name="email"class="form-control"required>
	    		</div>
	    		<div class="form-group">
	    			<level for="name">Password:</level>
	    			<input type="Password"name="Password"class="form-control"required>
	    		</div>
	    		<div class="form-group">
	    		    <level for="name">Mobile Number:</level>
	    			<input type="text"name="mobile"class="form-control"required>
	    		</div>
	    		<div class="form-group">
	    		<level for="name">Address:</level>
	    		<textarea rows="3" cols="40" class="form-control" name="address"></textarea>
	    		</div>
	    		<button type="submit"class=" btn btn-primary">Register</button>
	    	</form>
        </div>
	</div>
</body>
</html>

