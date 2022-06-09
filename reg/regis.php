<?php
session_start();
function age($date){

    $dateOfBirth = $date;
$today = date("Y-m-d");
$diff = date_diff(date_create($dateOfBirth), date_create($today));
$ag=$diff->format('%y');
return $ag;
}

include("config.php");
if(isset($_POST["sub"])){
$p_fig=$_POST["p_fig"];
$p_n=$_POST["p_n"];
$p_ar=$_POST["p_ar"];
$p_a=$_POST["p_a"];
/*$p_ad=$_POST["p_ad"];
$p_s=$_POST["p_s"];
$p_c=$_POST["p_c"];*/
$p_m=$_POST["p_m"];
//$p_z=$_POST["p_z"];
/*echo"<br>Adhaar Card Number:".$p_ar;
echo "<br>Name".$p_n;
echo "<br>Date of Birth:".$p_a;
echo "<br>Age:".age($p_a);
echo "<br>Address:".$p_ad;
echo "<br>State:".$p_s;
echo "<br>City:".$p_c;
echo "<br>Mobile:".$p_m;
echo "<br>Voter ID:".$p_vid;
echo "<br>Zipcode:".$p_z;*/
$p_vid="VID".$p_ar;
$const=$_SESSION["const"];
$sat=$_SESSION["state"];

$database=new DatabaseManager();
$ins="INSERT INTO `vt_reg` (`p_ar`, `p_name`, `p_dob`, `p_age`, `p_con`, `p_s`, `p_m`, `p_vid`, `p_fig`) VALUES ('$p_ar', '$p_n', '$p_a', ".age($p_a).", '$const', '$sat', '$p_m', '$p_vid', '$p_fig')";
echo "<br>".$ins;
$status=$database->fireSafeQuery($ins,NULL);
echo"<br>Status:".$status;
if($status=="Done"){
//header("Location:regview.php?done=1");
}

}
?>