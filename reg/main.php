<?php
include("../menu.php");
$_SESSION["log"]=1;
if($_SESSION["log"]!=1){
	echo'<script>   window.location="../Admin/adlog.php?sta=nolog"; </script>';
}else{
	echo'<br><div class="alert alert-success" id="al">
  <strong>Success!</strong> Logged In Successfully.
</div>';
}
?>
<!DOCTYPE html>
<html>
<head>

	<title>Main Menu</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	a{
		text-decoration: none;

	}
</style>
</head>
<body>
	<h3>State:  <b><?php echo $_SESSION["state"]; ?></b></h3>
	<h3>Constituencies:  <b><?php echo $_SESSION["const"]; ?></b></h3>

<div class="container" style="width: 100%"> 
  <div id="myCarousel" class="carousel slide" data-ride="carousel" >
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="img1.PNG" alt="Los Angeles">
      </div>

      <div class="item">
        <img src="img2.PNG" alt="Chicago" >
      </div>
    
      <div class="item">
        <img src="img3.PNG" alt="New york" >
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>		

	<!--<hr>
	<ul class="can">
	<li><a href="votreg.php"><img src="../Icons/Vreg.png" height="150" width="150" hspace="70px"><br><b>Click to register a Voter</b></a></li>
	<li><a href="canreg.php"><img src="../Icons/can.png" height="150" width="150" hspace="70px"><br><b>Click to register a Candidate</b></a></li>
	<li><a href="../Admin/createad.php"><img src="../Icons/admin.png" height="150" width="150" hspace="70px"><br><b>Click to Create New Admin</b></a></li>
	<li><a href="../Vote/usermatch.php"><img src="../Icons/Vote.png" height="150" width="150" hspace="70px"><br><b>Click For Voting</b></a></li>
	<li><a href="../reg/parreg.php"><img src="" height="150" width="150" hspace="70px"><br><b>Clickto Regiter a Party</b></a></li>
	<li><a href="../Party/chreg.php"><img src="" height="150" width="150" hspace="70px"><br><b>Click to Register a Party Cheif</b></a></li>
	<li><a href="canv.php"><img src="" height="150" width="150" hspace="70px"><br><b>Click to Verify Candidate</b></a></li>
</ul>-->
</body>
</html>
