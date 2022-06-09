<?php 
session_start();
if($_SESSION["log"]!=1){
  echo '<script>window.location="Admin/adlog.php?sta=nolog"</script>';
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../BootStrap/bootstrap.min.css">
  <script src="../BootStrap/jquery.min.js"></script>
  <script src="../BootStrap/bootstrap.min.js"></script>
  <style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #002159;
  box-shadow: 1px 2px 8px #0564ff;
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
  padding: 8px 16px;
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
#h{
  height: 40px;
}
#er{
  box-shadow: 1px 2px 5px black;
}
</style>
</head>
<body>

<ul id="h">
  <li><a class="active" href="reg/main.php">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li class="lo"><a href="../Admin/lout.php">LogOut</a></li>
  <li class="un"><b>Hello, <?php echo $_SESSION["username"]; ?></b></li>
</ul>
<div id="er"><img src="../BootStrap/logo.png" height=70></div>
</body>
</html>