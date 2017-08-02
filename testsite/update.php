

<?php 
include("dbconn.php");

$sql="SELECT * FROM users";

echo "<table width=50% border=1px  cellspacing=0px  cellpadding=0px align=center>";
echo "<tr>
<td align=center>Name<td/>

<td align=center width=40%> Email<td/>

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
      <td align=center><a href=\"edit.php?id=$id&name=$name&passwrd=$passwrd&email=$email&adress=$adress\">edit</a> <td/>
     <tr/>
	";
}

echo "<table/>";
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