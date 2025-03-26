<?php
   function get_employee_count(){
   	$connection=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($connection,"bankmanagementsystem");
    $employee_count="";
    $query ="select count(*) as employee_count from employee";
    $query_run=mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_run)){
    	$employee_count=$row['employee_count'];
   }
   return($employee_count);
  }
?>