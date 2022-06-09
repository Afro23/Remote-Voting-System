<?php
include("config.php");
$un=$_POST["ch_us"];
$ps=$_POST["p_fig"];
$pt=$_POST["pt"];
$database=new DatabaseManager();
    $sql="INSERT INTO `cheif`(`ch_us`,`ch_par`,`fig`) VALUES ('$un','$pt','$ps')";
    echo $sql;
    $tr=$database->fireSafeQuery($sql,NULL);
	echo"<br>Status:".$tr;
if($tr=="Done"){
header("Location:chlog.php?sta=1");
}
?>
