<?php
include("config.php");
$un=$_POST["ad_us"];
$ps=$_POST["p_fig"];
$au=$_POST["au"];
$database=new DatabaseManager();
    $sql="INSERT INTO `admin`(`vt_year`, `usn`, `fig`, `auth`) VALUES ('".$_SESSION["year"]."','$un','$ps','$au')";
    echo $sql;
    $tr=$database->fireSafeQuery($sql,NULL);
	echo"<br>Status:".$tr;
if($tr=="Done"){
header("Location:adlog.php?sta=1");
}
?>
