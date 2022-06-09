<?php
		session_start();
include("fmatch.php");
include("config.php");
$un=$_POST["ad_us"];
$ps=$_POST["p_fig"];
//echo $ps;
$database=new DatabaseManager();
    $sql="SELECT * FROM `admin` WHERE `usn`='$un'";
    $tr=$database->safeRetrieve($sql,NULL);
for($i=0;$i<=count($tr)-1;$i++){
		$_SESSION["state"]=$_POST["st"];
		$_SESSION["const"]=$_POST["ri"];
		$_SESSION["username"]=$un;
		$_SESSION["auth"]=$tr[$i]["auth"];
    $_SESSION["year"]=$_POST["yr"];
		$_SESSION["log"]=1;
		if($_SESSION["auth"]=="BO"){
			echo '';
		}
		//echo "<br>".$_SESSION["state"]."<br>".$_SESSION["const"]."<br>".$_SESSION["username"]."<br>".$_SESSION["year"];
		echo '<script type="text/javascript">matchScore("'.$tr[$i]["auth"].'", "'.$ps.'", "'.$tr[$i]["fig"].'", succMatch, failureFunc);</script>';
		//header("Location:../reg/main.php");
		//$_SESSION["log"]=0;
		//header("Location:adlog.php?sta=fail");
	}
?>
