<?php
$sta=$_GET["sta"];
if($sta=="fail"){
	echo'<div class="alert alert-danger"><strong>Warning!</strong> Login failed Please Check and Enter Valid Username and scan finger Properly</div>';
}
if($sta==1){
	echo'<div class="alert alert-danger"><strong>Warning!</strong> User Created Please Login Here</div>';
	}
if($sta=="logout"){
	echo'<div class="alert alert-danger"><strong>Warning!</strong> Loged Out Sucessfully</div>';
}
if($sta=="nolog"){
	echo'<div class="alert alert-danger">
  <strong>Warning!</strong> Access Denied. Please Login First</div>';
}
include("fig.php");
include("config.php");
$database=new DatabaseManager();
    $sql="SELECT * FROM `state` ORDER BY `state`.`st_name` ASC";
    $tr=$database->safeRetrieve($sql,NULL);

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="../BootStrap/bootstrap.min.css">
  <script src="../BootStrap/jquery.min.js"></script>
  <script src="../BootStrap/bootstrap.min.js"></script>
	<title>Admin login</title>
	 <script type="text/javascript">
 function load()
 {
      $.ajax({
      type:"POST",
      url: "cons.php",
      data: { state: $("#st").val()}
      }).done(function(msg){
       $("#ri").html(msg);
      });
 }

 </script>
	<style>
		.log{
			border:1px solid black;
			height:70%;
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
			font-size: 24px;
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
<body><center><form method="POST" action="log.php" autocomplete="off">
	<img id="FPImage1" alt="."align="right" style="position: absolute;right:8%;border-radius: 50%;">
	<div class="log">
		<div class="hd"><b>Admin Login</b></div>
	<table>
		<tr>
			<td><br><b>Username:</b></td>
			<td><br><input type="text" name="ad_us" id="ad_us" placeholder="Enter Username" class="form-control" required></td>
		</tr>
		<tr>
			<td><br><b>Scan your Finger:</b></td>
			<td><br><input type="button" name="ad_fig" id="ad_fig" class="btn btn-success" value="Scan" onclick="captureFP()" required></td>
		</tr>
		<tr>
			<td><br><b>Select State:</b></td>
			<td><br><select class="form-control" name="st" id="st" onchange="load()" required>
				<option>Select one</option><?php
				for($i=0;$i<=count($tr)-1;$i++){
				echo'<option>'.$tr[$i]["st_name"].'</option>';
			}
				?>
			</select></td>
		</tr>
		<tr><td><br><b>Select Constituencies:</b></td>
			<td><br><select class="form-control" id="ri" name="ri" required>
				<option>Select one</option>
				</select></td></tr>
		<tr>
			<td><br><b>Voting Year:</b></td>
			<td><br>
				<select id="yr" name="yr" class="form-control">
					<option>Select one</option>
					<option>2014</option>
					<option>2019</option>
					<option>2023</option>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan="2"><br><center><input type="submit" name="sub" id="sub" class="btn btn-success"></center></td>
		</tr>
	</table>
	<div id="result" style="display:none;">
                        </div>
</div></form></center>


</body>
</html>
