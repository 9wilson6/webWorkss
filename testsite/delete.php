<!DOCTYPE html>
<html>
<head>
	<title>delet <?php echo $_REQUEST['name'] ?></title>
</head>
<body>

</body>
</html>

<?php $id=$_REQUEST['id'];
require_once("dbconn.php");
$sql="DELETE FROM users where Id='$id'";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
echo "record succcessfully deleted";  
mysqli_close($conn);
include("links.php");
 ?>