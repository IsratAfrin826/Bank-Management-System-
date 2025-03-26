<?php
    $connection=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($connection,"bankmanagementsystem");
    $query="update employee set name='$_POST[name]',email='$_POST[email]',mobile='$_POST[mobile]',address='$_POST[address]'";
    $query_run=mysqli_query($connection,$query);
?>
<script type="text/javascript">
    alert("Updated successfully....");
    window.location.href="employee_dashboard.php";
</script>