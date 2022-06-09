<?php
include("config.php");
$database=new DatabaseManager();
$sql="SELECT * FROM `pt_reg`";
$tr=$database->safeRetrieve($sql,NULL);
$tot=count($tr);
for($i=0;$i<$tot;$i++){
    echo"<img src='../reg/uploads/".$tr[$i]['pt_lo']."' height='500px' width='500px'>";
}
?>