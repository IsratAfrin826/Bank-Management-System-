<?php
    session_start();
    $connection=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($connection,"bankmanagementsystem");
    $password ="";
    $query="select * from employee where email='$_SESSION[email]'";
    $query_run=mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_run)){
        $password = $row['password'];
    }
    if($password==$_POST['old_password']){
        $query = "upadate employee set password='$_POST[new_password]' where email='$_SESSION[email]'";
    }
    ?>
    <script type="text/javascript">
        alert("Updated successfully...");
        window.location.href="employee_dashboard.php"; 
    </script>
