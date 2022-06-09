<?php
include("config.php");
$database=new DatabaseManager();
$sql="SELECT * FROM `pt_reg`";
$tr=$database->safeRetrieve($sql,NULL);
for($j=0;$j<count($tr);$j++){
	echo $tr[$j]["pt_na"]."<br>";
  echo "<tr><td><b>Party's Logo:</b></td><td><img src='../reg/uploads/".$tr[$j]["pt_lo"]."' height='250' width='250'></td></tr>";
}
?>