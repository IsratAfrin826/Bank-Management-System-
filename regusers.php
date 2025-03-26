<?php
     require('functions.php');
     session_start();
     $connection=mysqli_connect("localhost","root","");
     $db=mysqli_select_db($connection,"bankmanagementsystem");
     $name="";
     $email="";
     $mobile="";
     $address=""; 
     $password="";

     $query ="select * from employee";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Employee Dashboard</title>
	 <title>Profile Dropdown</title>
	 <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
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
           <font style="color:white"><span><strong>Welcome:<?php echo $_SESSION['name'];?></strong></span></font><br><br>
           <font style="color:white"><span><strong>Email:<?php echo $_SESSION['email'];?></strong></span></font>
	       <ul class="nav navbar-nav navbar-right">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    My Profile
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="view_profile.php">View Profile</a>
                    <a class="dropdown-item" href="edit_profile.php">Edit Profile</a>
                    <a class="dropdown-item" href="change_password.php">Change Password</a>
                </div>
            </li>
            <li class="nav-item"><a class="nav-link" href="../logout.php">Logout</a></li>
        </ul>
 </nav><br>
 <nav class="navbar navbar-expand-1g navbar-light" style="background-color:#e3f2fd">
 	<div class="container-fluid">
 		<ul class="nav navbar-nav navbar-center">
 			<li class="nav-item">
 				<a href="admin_dashboard.php" class="nav-link">Dashboard</a>
 			</li>
 			<li class="nav-item dropdowm">
 				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   Employee
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" >Add New Employee</a>
                    <a class="dropdown-item" >Manage Employee</a>
                    
                </div>
            </li>
 		</ul>
 	</div>
 </nav>
 <span><marquee>This is Bank Management System. Bank opens at 10:00 AM and close at 5:00 PM </marquee></span><br><br>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<form>
				<table class="table-bordered" width="900px" style="text-align:center">
					<tr>
						<th>Name:</th>
						<th>Email:</th>
						<th>Mobile:</th>
						<th>Address:</th>

					</tr>
					<?php
					 $query_run=mysqli_query($connection,$query);
                     while($row = mysqli_fetch_assoc($query_run)){
                        $name=$row['name'];
                        $email=$row['email'];
                        $mobile=$row['mobile'];
                        $address=$row['address'];
                        ?>
                        <tr>
                        	<td><?php echo $name;?></td>
                        	<td><?php echo $email;?></td>
                        	<td><?php echo $mobile;?></td>
                        	<td><?php echo $address;?></td>
                        </tr>
                        <?php
                    }
					?>
					
				</table>
		    </form>
		</div>
		<div class="col-md-2"></div>
</body>
</html>