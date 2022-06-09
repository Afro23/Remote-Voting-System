<?php
session_start();
include("config.php");
$yr=$_SESSION["year"];
$r=$_GET["r"];
$database=new DatabaseManager();
$up="UPDATE `cn_reg` SET `cn_tic`='Yes' WHERE `vt_year`=$yr AND ca_no=".$r."";
echo $up;
$rt=$database->fireSafeQuery($up,NULL);
echo $rt;
$database=new DatabaseManager();
  $sql="SELECT * FROM `cn_reg` WHERE `ca_no`=$r AND `vt_year`=$yr AND `cn_tic`='Yes'";
  echo $sql;
   $tr=$database->safeRetrieve($sql,NULL);
  for($i=0;$i<1;$i++){
$sq="INSERT INTO `vote`(`vt_can`, `vt_pt`, `vt_coun`, `vt_year`, `vt_const`) VALUES('".$tr[$i]["c_name"]."','".$tr[$i]["cn_par"]."',0,".$tr[$i]["vt_year"].",'".$tr[$i]["cn_const"]."')";
echo "<br>".$sq;
$tr=$database->fireSafeQuery($sql,NULL);
echo $tr;
}

if($tr=='Done'){
 header("Location:canval.php?ver=1");
}
?>
