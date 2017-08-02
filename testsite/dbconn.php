<?php 
// error_reporting(0);
define("host", "localhost");
define("user", "root");
define("password", "");
define("databse","testsite");


	$conn = mysqli_connect(host,user,password,databse);
	if (!$conn) {
	print("not connected");	
	 }
	 //else{

	// 	print("connected");
	// }

// if ($conn) {
// 	print("connected");
// }else if(mysql_error()){

// 	print(mysql_errno());
// }
 ?>
