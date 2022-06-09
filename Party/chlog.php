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
	<link rel="stylesheet" href="../BootStrap/bootstrap.min.css">
  <script src="../BootStrap/jquery.min.js"></script>
  <script src="../BootStrap/bootstrap.min.js"></script>
	<title>Cheif login</title>
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
<body><center><form method="POST" action="log.php" autocomplete="off">
		<img id="FPImage1" alt="" height=300 width=210 align="right" style="position: absolute; right:15%;border-radius: 50%;">
	<div class="log">
		<div class="hd"><b>Party Cheif Login</b></div>
	<table>
		<tr>
			<td><br><b>Username:</b></td>
			<td><br><input type="text" name="ch_us" id="ch_us" placeholder="Enter Username" class="form-control" required></td>
		</tr>
		<tr>
			<td><br><b>Scan Finger:</b></td>
			<td><br><input type="Button" name="ch" id="ch_ps" onclick="captureFP()" value="Scan" class="btn btn-success" required></td>
		</tr>
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
