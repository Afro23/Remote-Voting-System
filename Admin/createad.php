<?php
include("../menu.php");
include("fig.php");
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../BootStrap/bootstrap.min.css">
  <script src="../BootStrap/jquery.min.js"></script>
  <script src="../BootStrap/bootstrap.min.js"></script>
	<title>Admin login</title>
	<style>
		.log{
			border:1px solid black;
			height:55%;
			width:50%;
			position: absolute;
			top:20%;
			left:20%;
		}
		.hd{
			background:black;
			width:100%;
			height:15%;
			color:white;
			font-size: 28px;
		}
		a{
			text-decoration: none;
			font-size: 20px;
		}
		table{
			width:60%;
		}
	</style>
</head>
<body><center><form method="POST" action="crad.php" autocomplete="off">
	<img id="FPImage1" alt="." height=300 width=210 align="right">
	<div class="log">
		<div class="hd"><b> Create Admin</b></div>
	<table>
		<tr>
			<td><br><b>Username:</b></td>
			<td><br><input type="text" name="ad_us" id="ad_us" placeholder="Enter Username" class="form-control" required></td>
		</tr>
		<tr>
			<td>
				<br><b>Select Authority:</b>
			</td>
			<td>
				<br><select name="au" id="au" class="form-control">
					<option>Select</option>
					<option value="ECO">ECO(Election Comission Officier)</option>
					<option value="BO">Booth Officier</option>
				</select>
			</td>
		</tr>
		<tr>
			<td><br><b>Scan your Finger Print:</b></td>
			<td><br><center><input type="Button" name="ad_fig" id="ad_fig" value="Scan" class="btn btn-success" onclick="captureFP()" required></center></td>
		</tr>
		<!--<tr>
			<td><br><b>Select Constituencies:</b></td>
			<td><br><select class="form-control" required>
				<option>Select one</option><?php
				for($i=0;$i<=count($tr)-1;$i++){ 
				echo'<option value="$_SESSION["con"]">'.$tr[$i]["p_name"].'</option>';
			}
				?>
			</select></td>
		</tr>-->
		<tr>
			<td colspan="2"><br><center><input type="submit" name="su" id="su" value="Create"class="btn btn-success"></center></td>
		</tr>
	</table>
	<!--<a href="createad.php"><br>Create New Admin</a>-->
	<div id="result" style="display:none;">
                        </div>
</div></form></center>
</body>
</html>