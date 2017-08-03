<?php 
$id=$_REQUEST['id'];


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Delete <?php echo $_REQUEST['name']; ?></title>
 </head>
 <body>
 <center><h1 bgcolor='red'>Are you sure you want to delete the record??</h1></center>
 <form method="POST" action="delete.php">
 	<center>
 		
 		<table border="1px"> <tr bgcolor="red">
 	<td>Name</td>
 	<td>Email</td>
 	<td>Password</td>
 	<td>Adress</td>
 	</tr>
      <tr>
 	<td><?php echo $_REQUEST['name']; ?></td>
 	<td><?php echo $_REQUEST['email']; ?></td>
 	<td><?php echo $_REQUEST['passwrd']; ?></td>
 	<td><?php echo $_REQUEST['adress']; ?></td>
 	</tr>
 	</table>
 	</center>
   <input type="submit" name="submit" value="OK!">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
 </form>
 </body>
 </html>
 <center>

	<?php include("links.php") ?>
</center>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="configs/cronfim.css">
	<title></title>
</head>
<body>

</body>
</html>