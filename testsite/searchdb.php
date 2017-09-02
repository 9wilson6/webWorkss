<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="configs/cronfim.css">
	<title>Search User</title>
</head>
<body>
<center>

	<form method="POST" action="searchdb.php">
	
	<input type="text" name="search"><br><br>
	<input type="submit" name="submit" value="search-Database">

</form>

</center>
<a href="links.php">Home</a>
<hr>
<U>Results: </U>&nbsp
</body>
</html>
<?php 
error_reporting(0);
require("dbconn.php");
if (isset($_POST['submit'])) {
$search=$_POST['search'];
if ($search=="") {
	print("nothing to search");
	exit();
}
$terms=explode(" ", $search);

$sql="SELECT * from users WHERE ";
	$i=0;
foreach ($terms as $ii ) {
$i++;
if ($i==1) {
		$sql .=" name LIKE '%$ii%' ";
	}else{

		$sql .=" OR name LIKE '%$ii%' ";
	}	
}
}else{

	print("<h3>"."<center>"."please type anyword and hit search button......."."<center/>"."<h3/>");
}
$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
$num=mysqli_num_rows($result);
echo "$num result(s) found for $search";
if ($num>0 ) {
	
	 while ($row=mysqli_fetch_array($result)) {

	$name=$row['name'];
	$email=$row['email'];
	$password=$row['passwrd'];
	$adress=$row['adress'];

	 echo "<h3> $name <h3/>";
	 echo "<h5> Email: $email <br> Password: $password<br> Adress:$adress<h5/> <br>";
}
}else{
	//echo " sorry nothing matched you request";
}

mysqli_close($conn);


 ?>