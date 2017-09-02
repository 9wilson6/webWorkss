
<?php 
require_once("dbconn.php");
// error_reporting(0);

$mypic = $_FILES['file']['name'];
$temp = $_FILES['file']['tmp_name'];
$type = $_FILES['file']['type'];

echo $type;

$name=$_POST['name'];
$email=$_POST['email'];
$password=hash('SHA256', $_POST['password']);
$adress=$_POST['adress'];
if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/", $email)) {
	die("Invalid email ");
	exit();
}

if ($name && $email && $password && $adress) {
	$sq="SELECT * FROM users where name='$name'";
	$query=mysqli_query($conn,$sq) or die(mysqli_error($conn));
	$count=mysqli_num_rows($query);
	if (!$count==0) {
		echo "userNam already taken";
		exit();
	}else{

		if (($type=="image/jpeg")|| ($type=="image/jpg")|| ($type=="image/bmp")|| ($type=="image/png")){
			move_uploaded_file($temp, "images/$mypic");
			echo " What a pretty thing!<p><img border='1' width='70' height='70' src='images/$mypic'> <p/>";
		
	$sql="INSERT into users(name, email,passwrd,adress)VALUES('$name','$email','$password','$adress')";
   $result=mysqli_query($conn,$sql)or die(mysqli_error($conn));

echo "success";
}else{ echo "bad file format not jpg,jpeg,bmp,png";};
}
   
}else{

	echo "All fileds must be field in";
}
mysqli_close($conn);

 ?>
 <center>

<a href="links.php">Home</a>

</center>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="configs/settings.css">
	<title></title>
</head>
<body>

</body>
</html>