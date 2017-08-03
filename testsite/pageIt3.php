<?php 

require("dbconn.php") ;

$per_page=5;

$sql="SELECT * from users";
$resut=mysqli_query($conn, $sql)or die(mysqli_error($conn));
$num=mysqli_num_rows($resut)or die(mysqli_error($conn));

$pages=ceil($num/$per_page);
if (isset($_GET['start'])) {
	$start=$_GET['start'];
	if ($_GET['start']<0 || $_GET['start']>$pages) {
		$start=0;
	}
}else{

	$start=0;
}
$begin=$start * $per_page;
$sql="SELECT * from users LIMIT $begin, $per_page";

$resut=mysqli_query($conn, $sql)or die(mysqli_error($conn));

while ($row=mysqli_fetch_array($resut)) {
	print($row['name'] ." ".$row['email']." ".$row['passwrd']." ".$row['adress']."<br> ");

}

if ($pages>1) {
	$k=0;
	for ($i=0; $i < $pages ; $i++) { 
		$k++;
		echo "<a href='?start=$i'>$k</a> &nbsp";
	}
}
mysqli_close($conn);
?>