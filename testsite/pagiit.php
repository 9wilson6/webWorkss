<?php 

require("dbconn.php");

#declear the num of reasults to display per page
$per_page=5;

	#======================the set get the end variable
	#first query the datatbase for available mumber of rocords
	$sql="SELECT * from users";
	$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
    $numOfRecs=mysqli_num_rows($result);

#==============get the number of pages
$pages=ceil($numOfRecs/$per_page);
	#first set up the start valiable if not set

if (isset($_GET['start'])) {
	$start=$_GET['start'];

	if ($_GET['start']<0 || $_GET['start']>$pages) {
		$start=0;
	}
}else{

		$start=0;
	}

$begin=$start * $per_page;

#query the database for records to disply setting the limits to start and num per page
$sql="SELECT * from users  LIMIT  $begin, $per_page";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
while ($row=mysqli_fetch_array($result)) {
	print($row['name'] ." ".$row['email']." ".$row['passwrd']." ".$row['adress']."<br> ");

}
if ($pages>1) {
	$k=0;
	for ($i=0; $i <$pages; $i++) { 
  $k++;
		echo "<a href='?start=$i'>$k</a>&nbsp";
	}
}
mysqli_close($conn);

 ?>


