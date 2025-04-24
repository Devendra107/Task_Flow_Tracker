<?php 

$conn= new mysqli('localhost','root','','tms_db')or die("Could not connect to mysql".mysqli_error($con));

$_SESSION['system']['name'] = "Task Flow Tracker";
