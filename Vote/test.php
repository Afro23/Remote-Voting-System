<?php
include("config.php");
session_start();
$database=new DatabaseManager();
$yt=$_SESSION["year"];
$sql="SELECT * FROM `pt_reg` WHERE `vt_year`=$yt";
$tr=$database->safeRetrieve($sql,NULL);
for($j=0;$j<=count($tr)-1;$j++){
  echo "<div class='col-sm-3'><center><img src='../reg/uploads/".$tr[$j]['pt_lo']."' height='100px' width='100px'><br>".$tr[$j]["pt_na"]."<br>".$tr[$j]["pt_ab"]."<br>"."</center></div>";
}
?>
