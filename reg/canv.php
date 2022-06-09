
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="../BootStrap/jquery.min.js"></script>
  <script src="../BootStrap/popper.min.js"></script>
  <script src="../BootStrap/bootstrap.min.js"></script>
	<title>Candidate Verification</title>
	<style type="text/css">
	input{
		border:0px;
		width:250px;
	}
	#img{
		height:200px;
	}
	</style>
</head>
<body>
	<form action="canver.php" method="POST">
<?php
include("../menu.php");
//session_start();
include("config.php");
$yr=$_SESSION["year"];
$sql="SELECT * FROM `cn_reg` WHERE `cn_ver`='' AND `vt_year`=$yr";
$database=new DatabaseManager();
$tr=$database->safeRetrieve($sql,NULL);
echo "<div class='container-fluid'><div class='row'>";
$_SESSION["arr"]=array("n"=>"Afro","s"=>"Maharastra","p"=>"BJP");
for($i=0;$i<=count($tr)-1;$i++){
	echo '<div class="col-sm-3"><div class="card" style="width:290px;margin:20px;"><img id="img" class="card-img-top" src=profile/'.$tr[$i]["c_pr"].'>';
	echo '<div class="card-body"><div class="card-title">Name:<b><span name="nam" id="nam">'.$tr[$i]["c_name"].'</b></span></div>';
	echo '<div class="card-text" >State:<b><span name="s" id="s">'.$tr[$i]["cn_state"].'</b></span></div>';
	echo '<div class="card-text" >Constituencies:</b><span name="c" id="c"><b>'.$tr[$i]["cn_const"].'</b></span></div>';
	echo '<div class="card-text" >Party:</b><span name="p" id="p"><b>'.$tr[$i]["cn_par"].'</b></span></div>';
	echo '<div class="card-text" ><span name="r" id="r" style="display:none;">'.$tr[$i]["ca_no"].'</b></span></div>';
	echo'<a class="btn btn-info" href=canver.php?r='.$tr[$i]["ca_no"].'>Verify</a>';
	echo'</div></div></div>';
}
echo "</div></div>";
?>
</form>

</body>
</html>