
<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="configs/settings.css">
	<title> details</title>
</head>
<body>

<div class="cont">
<center><h1>welcome to the CRUD center</h1>
  <h2>Legister</h2></center>
   <form enctype="multipart/form-data" method="POST" action="process.php" >
    Name:<input type="text" name="name" minlength="4" maxlength="27"><br>
   	Email:<input type="text" name="email" minlength="4" maxlength="27"><br>
   	Password:<input type="password" name="password" minlength="4" maxlength="27"><br>
   	Adress:<input type="text" name="adress" minlength="4" maxlength="27"><br>
    <input type="hidden" name="MAX_FILE_SIZE" value="10000">

    <br>Choose your pucture:
  <input type="file" name="file" id="file" />

    <input type="submit" name="submit" value="submit">

    <input type="reset" name="reset" value="reset">
   </form>
   <center>

  <h2><a href="home.php">Or LogIn</a></h2>
</center>
</div>
</body>
</html>

