

<?php 
include("dbconn.php");



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


echo "<table width=50% border=1px  cellspacing=0px  cellpadding=0px align=center>";
echo "<tr>
<td align=center>Name<td/>

<td align=center width=30%> Email<td/>

<td align=center>Password<td/>
<td align=center>Adress<td/>
<td align=center>Update<td/>
<tr/>";
$rs=mysqli_query($conn,$sql);
while ($row = mysqli_fetch_array($rs)) {

	$name=$row['name'];
	$email=$row['email'];
	$passwrd=$row["passwrd"];
	$id=$row['Id'];
	$adress=$row['adress'];

	echo"
	<tr>
     <td align=center> $name  <td/>
     <td align=center> $email <td/>
     <td align=center> $passwrd<td/>
     <td align=center>$adress<td/>
      <td align=center><a href=\"edit.php?id=$id&name=$name&passwrd=$passwrd&email=$email&adress=$adress\">edit</a> 
     <tr/>
	";
}



echo "<table/>";

$prev=$start- 1;
$next=$start + 1;
echo "<center>";
if(!($start<=1)) {
	echo "<a href='update.php?start=$prev'> prev</a>&nbsp";
}
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
	echo "<a href='update.php?start=$next '>next </a>";
}
echo "<center/>";
 ?>
 <!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="configs/settings.css">
<style type="text/css">
table a{
	text-decoration: none;
	color: red;
	font-style: bold;
	font-size: 27px;
}
</style>
	<title></title>
</head>
<body>
<?php include("links.php") ?>
</body>
</html>