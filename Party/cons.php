<?php 
$st=$_POST["state"];
include("config.php");
echo $st;
session_start();
	$database=new DatabaseManager();
$sql="SELECT * FROM `state` WHERE `st_name`='$st'";
   $tr=$database->safeRetrieve($sql,NULL);
for($i=0;$i<1;$i++){ 
	$st_id=$tr[$i]["st_id"];
	$_SESSION["st_name"]=$tr[$i]["st_name"];
}
$database=new DatabaseManager();
$sql="SELECT * FROM `const` WHERE `st_id`=$st_id";
echo $sql;
   $tr=$database->safeRetrieve($sql,NULL);
for($i=0;$i<=count($tr)-1;$i++){ 
	echo'
			<option>'.$tr[$i]["const_name"].'</option>
';
}

?>