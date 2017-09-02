
<!DOCTYPE html>
<html>
<head>
	<title>Update <?php echo $_REQUEST['newname']; ?></title>
</head>
<body>

</body>
</html>
<?php 

require_once("dbconn.php");
$name=$_POST['newname'];
$email=$_POST['newemail'];
$password=$_POST['newpasswrd'];
$adress=$_POST['newadress'];
$id=$_REQUEST['id'];

$sql="UPDATE users set name='$name', passwrd='$password', email='$email' ,adress='$adress' where Id='$id'";

$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));

echo "success";
mysqli_close($conn);
print('<a href="links.php">Home</a>');

 ?>
