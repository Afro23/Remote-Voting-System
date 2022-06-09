<?php
include("config.php");
session_start();
  if($_SESSION["log"]!=1){
    echo'<script>window.location="../Admin/adlog.php?sta=nolog"</script>';
  }
$database=new DatabaseManager();
$vid=$_GET["vid"];
$yt=$_SESSION["year"];
$tq="SELECT * FROM `vt_reg` WHERE `p_vid`='$vid'";
//echo $tq;
$tr=$database->safeRetrieve($tq,NULL);
for($i=0;$i<1;$i++){
  $v=$yt.'-V';
  if(age($tr[$i]["p_dob"])<18){
    echo '<script>window.location="usermatch.php?vo=Age";</script>';
  }else{
    //echo "<br>Your age is less than 18";
  }
  if($tr[$i]["vote"]==$v){
    //echo age($tr[$i]["p_dob"]);
    //echo "<br>".$v;
    echo '<script>window.location="usermatch.php?vo=Voted";</script>';
  }
}
function age($date){

    $dateOfBirth = $date;
$today = date("Y-m-d");
$diff = date_diff(date_create($dateOfBirth), date_create($today));
$ag=$diff->format('%y');
return $ag;
}
$tq="SELECT * FROM `vt_reg` WHERE `p_vid`='$vid'";
$tr=$database->safeRetrieve($tq,NULL);
for($i=0;$i<1;$i++){
  echo "<h3>".$tr[$i]["p_name"]."</h3>";
	echo "<h3>".$tr[$i]["p_con"]."</h3>";
  //echo "<h3>".$tr[$i]["p_age"]."</h3>";
  //echo "<h3>".age($tr[$i]["p_dob"])."</h3>";
  $p_con=$tr[$i]["p_con"];
	//echo $const;
	}
$er="SELECT * FROM `vote` WHERE `vt_const`='$p_con' AND `vt_year`=$yt";
$rt=$database->safeRetrieve($er,NULL);
for($i=0;$i<=count($rt)-1;$i++){
  $sql="SELECT * FROM `pt_reg` WHERE `pt_na`='".$rt[$i]["vt_pt"]."' AND `vt_year`=$yt";
  $tr=$database->safeRetrieve($sql,NULL);
  for($j=0;$j<1;$j++){
    echo "<div class='col-sm-3'><center>
    <a href='vtp.php?vid=$vid & pt=".$tr[$j]['pt_na']." & can=".$rt[$i]['vt_can']."'><img src='../reg/uploads/".$tr[$j]['pt_lo']."' height='100px' width='100px'><br>".$tr[$j]["pt_na"]."<br>".$tr[$j]["pt_ab"]."<br>".$rt[$i]["vt_can"]."</a></center></div>";
  }
	}
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../BootStrap/bootstrap.min.css">
  <script src="../BootStrap/jquery.min.js"></script>
  <script src="../BootStrap/bootstrap.min.js"></script>
	<style type="text/css">
    a{
      color:black;
      font-size:14px;
    }
    a:hover{
      color:white;
      text-decoration: none;
    }
		img{
			border-radius: 60%;
		}
    .col-sm-3:hover{
      color: white;
      background: gray;
    }
	</style>
	<title>Vote</title>
</head>
<body>

</body>
</html>
