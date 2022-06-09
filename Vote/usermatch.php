	<?php
	session_start();
	if($_SESSION["log"]!=1){
		echo'<script>window.location="../Admin/adlog.php?sta=nolog"</script>';
	}
	$vo=$_GET["vo"];
    include("fmatch.php");
		if($vo=="Voted"){
			echo '<div class="alert alert-danger">
	    <strong>Warning!</strong> You have already Voted You cannot Vote Twice</div>';
		}
		if($vo=="Age"){
			echo '<div class="alert alert-danger">
	    <strong>Warning!</strong> You are not Eligible for Voting</div>';
		}
		if($vo=="Done"){
			echo '<div class="alert alert-success">
	    <strong>Success!</strong> Voted Successfully</div>';
		}
    ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../BootStrap/bootstrap.min.css">
	<script src="../BootStrap/jquery.min.js"></script>
	<script src="../BootStrap/bootstrap.min.js"></script>
	<title>Voting</title>

</head>
<body onload="CallSGIFPGetData(SuccessFunc1, ErrorFunc)">
	<input type="button" value="Click to Scan" onclick="CallSGIFPGetData(SuccessFunc1, ErrorFunc)">
	<input type="button" value="Click to Match" onclick="met()"> <br>
    <p id="result1"> </p>
</body>
</html>
