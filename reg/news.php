<?php
	include("../menu.php");
	include("test.php");
	include("config.php");
?>
<!DOCTYPE html>
<html>
<head>
	
	<style>
		table{
			position:absolute;
			top:20%;
			width:78%;
			font-size: 18px;
		}
		td{

			width: 60%;
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
		#blah{
			position: absolute;
			top:30%;
			right:10%;
		}
	</style>
</head>
	<title>NEWS</title>
	<body>
		<form method="POST" action="new.php" enctype="multipart/form-data" autocomplete="off">
<table class="table" style="width:75%;">
		<tr><th colspan="2"><center><b>NEWS</b></center></th></tr>
		<tr>
			<td><b>SELECT VOTING YEAR</b></td>
			<td><select  name="y_r" id="y_r" class="form-control"  style="width: 60%;"  required>
  				<option>SELECT</option>
  				<option>2011</option>
  				<option>2015</option>
  				<option>2019</option>
  				</select>
  			</td>
		</tr>
		<tr>
			<td><b>Select today's date</b></td>
			<td><input type="date" name="da1" id="da1" placeholder="Select today's date" class="form-control"></td>
		</tr>
		<tr>
			<td><b>Enter the News content:</b></td>
			<td><input type="text" name="cn" id="cn" placeholder="Enter the News content" class="form-control" maxlength="12"></td>
		</tr>
			<td colspan="2"><center><input type="submit" name="sub" id="sub" class="btn btn-success"></center></td>
		</tr>
		</table>
	</form>
	</body>
	</html>