<?php
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,"bankmanagementsystem");
$query ="insert into employee values('$_POST[id]','$_POST[name]','$_POST[email]','$_POST[password]','$_POST[mobile]','$_POST[address]')";
$query_run=mysqli_query($connection,$query);
?>
<script type ="text/javascript">
	alert("Registration successfully.....you may login now.")
	window.location.href ="index.php";
</script>