<?php 
require_once("dbconn.php");

$sql="SELECT * from users";
$result=mysqli_query($conn,$sql);
 $count=mysqli_num_rows($result);
 ?>
 <center><u><?php echo "there are ".$count." records available"; ?></u></center>
 <br>
<?php  
 while($row=mysqli_fetch_array($result)){
 	?>
 	<center>
 	<?php 
print($row['name']." ".$row['email']." ".$row['passwrd']." ".$row['adress']);
print("<br/>");
?>
</center>
<?php
 }
 mysqli_close($conn);
 ?>
 <center>

	<?php include("links.php") ?>
</center>
</center>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="configs/settings.css">
	<title></title>
</head>
<body>
print('<a href="links.php">Home</a>');

</body>
</html>