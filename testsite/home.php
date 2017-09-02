
<?php 
require("dbconn.php");
$x="";
if (isset($_POST['submit'])) {
	$password=hash("SHA256", $_POST['password']);
$email=preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/", $_POST['email'])? $_POST['email']:"";
if ($email=="") {
	echo "Invalid email";
	exit();
}

$sql="SELECT * FROM users where email='$email' and passwrd='$password'";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
$count=mysqli_num_rows($result);
if ($count==0) {
	echo "Wrong credentials!!!!";
exit();
}else{

	header("location:links.php");
}
}
 ?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="configs/homeSettings.css">
	<title>Crud center</title>
</head>

	

<body>
<div class="cont">
<div class="vis">
<center>
	<h1>welcome to the CRUD center</h1>
	<h2>LogIn</h2>
	 <form method="POST" action="home.php">
    
   	Email:<input type="text" name="email" ><br>
   	Password:<input type="password" name="password" ><br>
   
    <input type="submit" name="submit" value="LogIn">
    <input type="reset" name="reset" value="reset">
   </form>
   <h2><a href="form.php">Or Register</a></h2>
</center>
</div>
</div>
</body>
</html>