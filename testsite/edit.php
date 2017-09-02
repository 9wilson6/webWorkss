
<?php 
$id=$_REQUEST['id'];
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$passwrd=$_REQUEST['passwrd'];
$adress= $_REQUEST['adress'];
// echo $id."<br>";
// echo $name."<br>";
// echo $email."<br>";
// echo $passwrd."<br>";
// echo $adress."<br>";
 ?>
 </center>
</center>
<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" type="text/css" href="configs/edit.css">
<title>Update <?php echo $_REQUEST['name']; ?></title>
</head>
<body>
<form method="post" action="makeUdate.php">
<table border="0" width="30%">

	<tr ><td >Name:</td> </tr><tr><td width=10%> <input type="text" name="newname" value="<?php echo $name ?>"></td></tr>
    <tr ><td width=20%>Email:</td></tr><tr> <td><input type="text" name="newemail" value="<?php echo $email ?>"></td></tr>
    <tr ><td width=20%>Password:</td> </tr><tr><td><input type="password" name="newpasswrd" value="<?php echo $passwrd ?>"></td></tr>
    <tr ><td width=20%>Adress:</td> </tr><tr><td><input type="text" name="newadress" value="<?php echo $adress ?>"></td></tr>

</table>	

<input type="submit" name="submit" value=" submit">
<input type="reset" name="reset" value="reset">
<input type="hidden" name="id" value= "<?php echo $id; ?>">
</form>
print('<a href="links.php">Home</a>');

</body>
</html>