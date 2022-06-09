<?php
include("../menu.php");
include("fig.php");
include("config.php");
$database=new DatabaseManager();
$sql="SELECT * FROM `pt_reg` ORDER BY `pt_reg`.`pt_na` ASC";
$tr=$database->safeRetrieve($sql,NULL);

?>
<html>
<head>
  <title>Chief Registration</title><style>
		.log{
			border:1px solid black;
			height:60%;
			width:50%;
			position: absolute;
			top:20%;
			left:20%;
		}
		.hd{
			background:black;
			width:100%;
			height:10%;
			color:white;
			font-size: 28px;
		}
		a{
			text-decoration: none;
			font-size: 20px;
		}
		table{
			width:70%;
		}
	</style>
</head>
<body>
  <center><form method="POST" action="chad.php" autocomplete="off">
    <img id="FPImage1" alt="." height=300 width=210 align="right">
  	<div class="log">
  		<div class="hd"><b> Register Party Cheif</b></div>
  	<table>
  		<tr>
  			<td><br><b>Username:</b></td>
  			<td><br><input type="text" name="ch_us" id="ch_us" placeholder="Enter Username" class="form-control" required></td>
  		</tr>
  		<tr>
  			<td><br><b>Password:</b></td>
  			<td><br><input type="Button" name="ch_ps" id="ch_ps" onclick="captureFP()" value="Scan" class="btn btn-success" required></td>
  		</tr>
      <tr>
  			<td><br><b>Select Party:</b></td>
  			<td><br><select class="form-control" name="pt" id="pt" onchange="load()" required>
  				<option>Select one</option><?php
  				for($i=0;$i<=count($tr)-1;$i++){
  				echo'<option>'.$tr[$i]["pt_na"].'</option>';
  			}
  				?>
  			</select></td>
  		</tr>
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
