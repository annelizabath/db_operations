<?php
include "dbconnection.php";
?>
<html>
<head>
<body>
<form action="#" method="post">
<a href="add.php">add user</a> <br><br>
<table border=1>
<tr>
<td>id</td>
<td>name</td>
<td>address</td>
<td>phone</td>
<td>edit</td>
<td>delete</td>
</tr>
</form>
</body>
</head>
</html>
  
<?php
$sql="select * from student";
$result=mysqli_query($con,$sql);
// print_r($result);
 while($row=mysqli_fetch_array($result))
 {
	 ?>
	 <tr>
	 <td><?php echo $row["id"];?></td>
	 <td><?php echo $row["name"];?></td>
	 <td><?php echo $row["address"];?></td>
	 <td><?php echo $row["phone"];?></td>
	 <td><a href="edit.php?uid=<?php echo $row["id"];?>">edit</a></td>
	 <td><a href="delete.php?uid=<?php echo $row["id"];?>">delete</a></td>
	 </tr>
 <?php }
?>
</table>
</form>
</body>
</head>
</html>