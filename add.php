<?php
include "dbconnection.php";
?>
<html>
<head>
<body>
<form action="#" method="post">
<table>
<tr>
<td>name</td><td><input type=text name=txt1></td>
</tr>
<tr>
<td>address</td><td><input type=text name=txt2></td>
</tr>
<tr>
<td>phone</td><td><input type=text name=txt3></td>
</tr>
<tr>
<td><input type=submit name=save value =add></td>
</tr>
</table>
</form>
</body>
</head>
</html>
<?php
if(isset($_POST["save"]))
{
$na=$_POST["txt1"];
//echo $na;
echo "<br>";
$add=$_POST["txt2"];
//echo $add;
echo "<br>";
$ph=$_POST["txt3"];
//echo $ph;
echo "<br>";
mysqli_query($con,"INSERT INTO `student`(`name`, `address`, `phone`) VALUES ('$na','$add','$ph')");
header("location:view.php");
}
?>