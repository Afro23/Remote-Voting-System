<?php
session_start();
include("config.php");
include("fmatch.php");
$un=$_POST["ch_us"];
$ps=$_POST["p_fig"];
echo $ps;
$yr=$_POST["yr"];
$database=new DatabaseManager();
    $sql="SELECT * FROM `cheif` WHERE `ch_us`='$un'";
    $tr=$database->safeRetrieve($sql,NULL);
for($i=0;$i<=count($tr)-1;$i++){
  $_SESSION["party"]=$tr[$i]["ch_par"];
		$_SESSION["chusername"]=$_POST["ch_us"];
    $_SESSION["year"]=$_POST["yr"];
		$_SESSION["chlog"]=1;
		echo $tr[$i]["fig"];	
		echo '<script type="text/javascript">matchScore("'.$ps.'", "'.$tr[$i]["fig"].'", succMatch, failureFunc);</script>';
	//	header("Location:chmain.php");
	//}else{
		//header("Location:adlog.php?sta=fail");
	//}
}
?>
