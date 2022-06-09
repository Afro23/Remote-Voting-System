<?php
session_start();
$pt=$_POST["party"];
include("config.php");
//echo $pt;
$yr=$_SESSION["year"];
echo "<table class='table'>";
$database=new DatabaseManager();
$sql="SELECT * FROM `pt_reg` WHERE `pt_na`='$pt' AND `vt_year`='$yr'";
$tr=$database->safeRetrieve($sql,NULL);
for($j=0;$j<1;$j++){
  echo "<tr><td><b>Party's Logo:</b></td><td><img src='../reg/uploads/".$tr[$j]["pt_lo"]."' height='250' width='250'></td></tr>";
}

$sql="SELECT * FROM `vote` WHERE `vt_pt`='$pt' AND `vt_year`='$yr'";
//echo $sql;
 $tr=$database->safeRetrieve($sql,NULL);
for($i=0;$i<=count($tr)-1;$i++){
  echo "<tr><td><b>Party's Name:</b></td><td>".$tr[$i]["vt_pt"]."</td></tr>";
  echo "<tr><td><b>Candidate's Name: </b></td><td>".$tr[$i]["vt_can"]."</td></tr>";
  echo "<tr><td><b>No. of Vote:</b></td><td style='font-size:28px;color:green;'><b>".$tr[$i]["vt_coun"]."</b></td></tr>";
  //echo "hello";
}
echo "</table>";
 ?>
