<?php
include "dbconnection.php";
?>
<html>
<head>
<body>
<form action="action.php" method="post">
<table>
<tr>
<td>name</td><td><input type=text name=txt1 value="<?php echo $row ['name']; ?> "></td>
</tr>
<tr>
<td>address</td><td><input type=text name=txt2 value="<?php echo $row ['address']; ?> "></td>
</tr>
<tr>
<td>phone</td><td><input type=text name=txt3 value="<?php echo $row ['phone']; ?> "></td>
</tr>
<tr>
<td><input type=submit name=save></td>
</tr>
</table>
</form>
</body>
</head>
</html>
  