<?php
include "dbconnection.php";
$sid=$_GET["uid"];
echo $sid;
mysqli_query($con,"DELETE FROM `student` WHERE id='$sid'");
header('location:view.php');
?>