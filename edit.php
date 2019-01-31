<?php
include "dbconnection.php";
$did=$_GET["uid"];
if(isset($_POST["submit"]))  
{
$na=$_POST["txt1"];
$add=$_POST["txt2"];
$ph=$_POST["txt3"];
mysqli_query($con,"UPDATE `student` SET `name`='$na',`address`='$add',`phone`='$ph' WHERE id='$did'");  
header('location:view.php');      
}
$result=mysqli_query($con,"select * from student where id='$did'");
$row=mysqli_fetch_array($result);
?>
<html>
<head>
<body>
<form action="#" method="post">
<table>
<tr>
<td>name</td><td><input type=text name=txt1 value="<?php echo $row["name"]; ?> "></td>
</tr>
<tr>
<td>address</td><td><input type=text name=txt2 value="<?php echo $row["address"]; ?> "></td>
</tr>
<tr>
<td>phone</td><td><input type=text name=txt3 value="<?php echo $row["phone"]; ?> "></td>
</tr>
<tr>
<td><input type=submit name=submit value=ok></td>
</tr>
</table>
</form>
</body>
</head>
</html>