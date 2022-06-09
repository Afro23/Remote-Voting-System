<?php
session_start();
if($_SESSION["chlog"]!=1){
  echo '<script>window.location="chlog.php?sta=nolog"</script>';
}
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="../BootStrap/bootstrap.min.css">
  <script src="../BootStrap/jquery.min.js"></script>
  <script src="../BootStrap/bootstrap.min.js"></script>
  <style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}
a{
	text-decoration: none;
}
li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
	background:white;
	color:black;
  	text-decoration: none;
}
.un{
	position:absolute;
	top:1%;
	right:8%;
	font-size: 25px;
	color:white;
}
.lo{
	position:absolute;
	right:1%;
}
</style>
</head>
<body>

<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li class="lo"><a href="lout.php">LogOut</a></li>
  <li class="un"><b>Hello, <?php echo $_SESSION["chusername"]; ?></b></li>
</ul>
</body>
</html>
