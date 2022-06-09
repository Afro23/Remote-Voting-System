<?php
session_start();
include("config.php");
include("fmatch.php");
$database=new DatabaseManager();
    $sql="SELECT * FROM `vt_reg`";
    $tr=$database->safeRetrieve($sql,NULL);
    //echo "Template_1:".$_GET["template_1"]."<br>";
    //echo'<script text="text/javascript">var template_1='; echo json_encode($_GET["template_1"]);
    $co=0;
    echo count($tr);
    for($i=0;$i<=count($tr)-1;$i++){
        $_SESSION["vt_name"]=$tr[$i]["p_name"];
         //echo "Template_2=".$tr[$i]["p_fig"];
        //echo json_encode($tr[$i]["p_fig"]);
       echo '<script type="text/javascript">matchScore("'.$_GET["template_1"].'", "'.$tr[$i]["p_fig"].'", succMatch, failureFunc, "'.$tr[$i]["p_vid"].'");</script>';
       echo $co;
       $co++;
    	//echo '<script type="text/javascript"> mat('.$_GET["template_1"].', '.$tr[$i]["p_fig"].');</script>';
    }
    if($co==(count($tr))){
        echo'<script>window.location="usermatch.php";</script>';
    }
?>
