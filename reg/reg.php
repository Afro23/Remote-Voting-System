	<?php 
		include("test.php");
	?>
<!DOCTYPE html>
<html>
<head>
	<style>
		table{
			position:absolute;
			top:15%;
		}
		td{

			width: 50%;
		}
		th{
			background:black;
			color: white;
		}
		.download_href{
			position:absolute;
			top:30%;
			right:15%;
		}
	</style>
	<title>Person Registration</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<form method="post" action="regis.php" autocomplete="off">
	<table class="table table-bordered" style="left:10%;width:50%;">
		<tr><th colspan="2"><center><b>Enter your Details:</b></center></th></tr>
		<tr>
			<td><b>Name</b></td>
			<td><input type="text" name="p_n" id="p_n" placeholder="Enter your Name"></td>
		</tr>
		<tr>
			<td><b>Adhaar No.</b></td>
			<td><input type="text" name="p_ar" id="p_ar" placeholder="Enter your Adhaar Number"></td>
		</tr>
		<tr>
			<td><b>Date of Birth</b></td>
			<td><input type="Date" name="p_a" id="p_a" placeholder="Enter your Age"></td>
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
			<td><input type="number" name="p_m" id="p_m" placeholder="Enter your Mobile Number"></td><br>
		</tr>
		<tr><td><b>Scan your Finger</b></td>
			<td>
				<input type="button" value="Click to Scan" onclick="captureFP()">
			</td>
		</tr>
		<tr>
			<td colspan="2"><center><input type="submit" name="sub" id="sub"></center></td>
		</tr>
	</table>
	<div class="download_href"> 
                    <img id="FPImage1" alt="" height=300 width=210 align="right" src=".\Images\PlaceFinger.bmp"> <br>
                            <div id="result" style="display:none;"/>.
                        </div></form>
</body>
</html>