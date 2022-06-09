
<script type="text/javascript">
 function load()
 {

      $.ajax({
      type:"POST",
      url: "v.php",
      data: {}
      }).done(function(msg){
       $("#ri").html(msg);
      });
      }
function refreshData()
{
    x = 1;  // 5 Seconds

    // Do your thing here
setTimeout(refreshData, x*1000);

}
 </script>
<?php
/*include("../menu.php");
include("config.php");
if($_SESSION["auth"]=="BO"){
	header("Location:bomain.php");
}
$database=new DatabaseManager();
$que="SELECT * FROM `date` WHERE `vt_year`=0";
echo $que;
$tr=$database->safeRetrieve($que,NULL);
for($i=0;$i<1;$i++){
	echo '<script> fot("'.$tr[$i]["st_date"].'","'.$tr[$i]["ed_date"].'","'.$tr[$i]["st_time"].'","'.$tr[$i]["ed_time"].'"); </script>';
		}
//$_SESSION["log"]=1;
if($_SESSION["log"]!=1){
	echo'<script>   window.location="../Admin/adlog.php?sta=nolog"; </script>';
}else{
	echo'<br><div class="alert alert-success" id="al">
  <strong>Success!</strong> Logged In Successfully.
</div>';
}*/
?>??
<!DOCTYPE html>
<html>
<head>
	<style>
	a{
		text-decoration: none;

	}
	img{
		border-radius: 200px;
	}
</style>
	<title>Main Menu</title>
</head>
<body onload="load()">
	<div id="ri"></div>
	<h3>State:  <b><?php echo $_SESSION["state"]; ?></b></h3>
	<h3>Constituencies:  <b><?php echo $_SESSION["const"]; ?></b></h3>
	<ul class="can">
	<li><a href="votreg.php"><img src="Icons/Vreg.png" height="150" width="150" hspace="70px"><br><b>Click to register a Voter</b></a></li>
	<li><a href="canreg.php"><img src="Icons/can.png" height="150" width="150" hspace="70px"><br><b>Click to register a Candidate</b></a></li>
	<li><a href="../Admin/createad.php"><img src="Icons/admin.png" height="150" width="150" hspace="70px"><br><b>Click to Create New Admin</b></a></li>
	<li><a href="../Vote/usermatch.php"><img src="Icons/Vote.png" height="150" width="150" hspace="70px"><br><b>Click For Voting</b></a></li>
	<li><a href="../reg/parreg.php"><img src="Icons/download (2).png" height="150" width="150" hspace="70px"><br><b>Clickto Regiter a Party</b></a></li>
	<li><a href="../Party/chreg.php"><img src="Icons/images (1).png" height="150" width="150" hspace="70px"><br><b>Click to Register a Party Cheif</b></a></li>
	<li><a href="../Admin/news.php"><img src="Icons/images1.jpg" height="150" width="150" hspace="70px"><br><b>Click to Broadcast News</b></a></li>
	<li><a href="canv.php"><img src="Icons/canv.png" height="150" width="150" hspace="70px"><br><b>Click to Verify Candidate</b></a></li>
	<li><a href="vdate.php"><img src="Icons/date2.jpg" height="150" width="150" hspace="70px"><br><b>Click to set voting Date and Time</b></a></li>
</ul>
</body>
</html>
