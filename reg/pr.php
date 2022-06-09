<?php
include("config.php");
session_start();
$p_ab=$_POST["pr_ab"];
$p_na=$_POST["pr_na"];
$p_ch=$_POST["pr_cf"];
$target_dir="uploads/";
	$filname=$_FILES["pr_ig"]["name"];
    $moved=move_uploaded_file($_FILES["pr_ig"]["tmp_name"], $target_dir . $_FILES["pr_ig"]["name"]);
			$yt=$_SESSION["year"];
    	$database=new DatabaseManager();
    	$query="INSERT INTO `pt_reg`(`vt_year`, `pt_ab`, `pt_na`, `pt_ch`, `pt_lo`) VALUES($yt,'$p_ab','$p_na','$p_ch','$filname') ";
    	$status=$database->fireSafeQuery($query,NULL);
$sql="SELECT * FROM `pt_reg`";
$tr=$database->safeRetrieve($sql,NULL);
$tot=count($tr);
for($i=0;$i<$tot;$i++){
    echo"<img src='Uploads/".$tr[$i]['pt_lo']."' height='500px' width='500px'>";
}
header("Location:parreg.php");
        ?>
