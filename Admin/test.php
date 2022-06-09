<?php 
session_start();

include("config.php");
$database="project";
$_SESSION["st_name"]=$_POST["state"];
echo "HEllo".$_SESSION["st_name"];
$sql="SELECT * From state WHERE st_name='Maharashtra'";
echo $sql;
//$sql="SELECT * FROM `state` WHERE `st_name`= ".$_SESSION["st_name"]."";
$tr=$database->safeRetrieve($sql,'NULL');
for($i=0;$i<=count($tr)-1;$i++){ 
$_SESSION["st_id"]=$tr[$i]["st_id"];
			}
$qur="SELECT * FROM `const` WHERE `st_id`=".$_SESSION["st_id"]."";
$rt= $database->safeRetrieve($qur,'NULL');
			for($i=0;$i<=count($rt)-1;$i++){ 
				echo'<option>'.$rt[$i]["const_name"].'</option>';
			} 
echo '</select>';
?>