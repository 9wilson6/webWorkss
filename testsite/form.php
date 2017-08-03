
<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="configs/settings.css">
	<title> details</title>
</head>
<body>
   <form method="POST" action="process.php">
    Name:<input type="text" name="name" minlength="4" maxlength="27"><br>
   	Email:<input type="text" name="email" minlength="4" maxlength="27"><br>
   	Password:<input type="password" name="password" minlength="4" maxlength="27"><br>
   	Adress:<input type="text" name="adress" minlength="4" maxlength="27"><br>
    <input type="submit" name="submit" value="submit">
    <input type="reset" name="reset" value="reset">
   </form>
</body>
</html>
<center>

	<?php include("links.php") ?>
</center>