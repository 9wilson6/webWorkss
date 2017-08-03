<?php 
require("dbconn.php");
#=========================================================================set up starting point
if (isset($_GET['start'])) {
	$start=$_GET['start'];
	if ($start<0) {
		$start=1;
	}
}else{

	$start=0;
}
#=========================================================================set up number of results per page
$per_page=6;
#define a begi variabl
$begin=($start * ($per_page));

#=========================================================================run a query to establish how many results are in the databaase
#+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++to help know the maximum number of pages

$sql="SELECT * from users";
$rows =mysqli_query($conn,$sql)or die(mysqli_error($conn));
$row=mysqli_num_rows($rows);
#=========================================================================get total number of pages

$pages=ceil($row/$per_page);
if ($start>$pages) {
		$start=0;
	}
#=========================================================================run a query to retrieve your data but set the limits to page numbe
$sql="SELECT * FROM users LIMIT $begin, $per_page";
#=========================================================================run the query
$results=mysqli_query($conn, $sql)or die(mysqli_error($conn));
while ($rs=mysqli_fetch_array($results)) {
	print($rs['name']."<br>");

}
$prev=$start- 1;
$next=$start + 1;

if(!($start<=1)) {
	echo "<a href='pagination.php?start=$prev'> prev</a>&nbsp";
}
#=========================================================================lets do the pagination
if ($pages>1) {
for ($i=1; $i < $pages; $i++) { 
	 // '  : 
	if ($i==$start) {
			echo '<b><a href="?start='.$i.'">'.$i.'<a/><b/> &nbsp';
		}	else{

echo '<a href="?start='.$i.'">'.$i.'<a/>  &nbsp';

		}
	}
}
if (!($start >= $pages-1)) {
	echo "<a href='pagination.php?start=$next '>next </a>";
}
mysqli_close($conn);

 ?>