<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form enctype="multipart/form-data" method="post" action="testForm.php">
	
<input type="file" name="file">
<input type="submit" name="submit" value="submit">
</form>
</body>
</html>
<?php 
$image=$_FILES['file']['name'];
$tempname=$_FILES['file']['tmp_name'];
$type=$_FILES['file']['type'];
echo $type;
if (($type=="image/jpeg")|| ($type=="image/jpg")|| ($type=="image/bmp")|| ($type=="image/png")) {
move_uploaded_file($tempname, "images/$image");


echo "<img src='images/$image' width='70' height='70'>";
}
 ?>
