	<?php 
		include("../menu.php");
		include("test.php");
		if($_SESSION["log"]!=1){
			echo'<script>   window.location="../Admin/adlog.php?sta=nolog"; </script>';
		}else{
			echo'<script>alert("Logged In Successfully");</script>';
		}
	?>
<!DOCTYPE html>
<html>
<head>
	<style>
		table{
			position:absolute;
			top:25%;
			right:25%;
			border-collapse: collapse;
		}
		td{

			width: 50%;
		}
		th{
			background:black;
			color: white;
			font-size: 20px;
		}
		.download_href{
			position:absolute;
			top:30%;
			right:15%;
		}
	</style>
	<title>Voter Registration</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" href="../BootStrap/bootstrap.min.css">
  <script src="../BootStrap/jquery.min.js"></script>
  <script src="../BootStrap/bootstrap.min.js"></script>
</head>
<body>
	<form method="post" action="regis.php" autocomplete="off"><center>
	<table class="table" style="width:50%;">
		<tr><th colspan="2"><center><b>Enter your Details:</b></center></th></tr>
		<tr>
			<td><b>Name</b></td>
			<td><input type="text" name="p_n" id="p_n" placeholder="Enter your Name" class="form-control"></td>
		</tr>
		<tr>
			<td><b>Adhaar No.</b></td>
			<td><input type="text" name="p_ar" id="p_ar" placeholder="Enter your Adhaar Number" class="form-control" maxlength="12"></td>
		</tr>
		<tr>
			<td><b>Date of Birth</b></td>
			<td><input type="Date" name="p_a" id="p_a" placeholder="Enter your Age" class="form-control"></td>
		</tr>
		<!--<tr>
			<td><b>Address</b></td>
			<td><input type="text" name="p_ad" id="p_ad" placeholder="Enter your Address"></td>
		</tr>
		<tr>
			<td><b>State</b></td>
			<td><input type="text" name="p_s" id="p_s" placeholder="Enter your State"></td>
		</tr>
		<tr>
			<td><b>City</b></td>
			<td><input type="text" name="p_c" id="p_c" placeholder="Enter your City"></td><br>
		</tr>
		<tr>
			<td><b>Zipcode:</b></td>
			<td><input type="number" name="p_z" id="p_z" placeholder="Enter your Zipcode"></td><br>
		</tr>-->

		<tr>
			<td><b>Mobile no.</b></td>
			<td><input type="number" name="p_m" id="p_m" placeholder="Enter your Mobile Number" class="form-control"></td><br>
		</tr>
		<tr><td><b>Scan your Finger</b></td>
			<td>
				<input type="button" value="Click to Scan" onclick="captureFP()" class="btn btn-success">
			</td>
		</tr>
		<tr>
			<td colspan="2"><center><input type="submit" name="sub" id="sub" class="btn btn-success"></center></td>
		</tr>
	</table></center>
	<div> 
                    <img id="FPImage1" alt="." height=300 width=210 align="right"> <br>
                            <div id="result" style="display:none;">
                        </div></form>
</body>
</html>