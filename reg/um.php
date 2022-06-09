<?php 
session_start();
include("config.php");
include("fmatch.php");
$database=new DatabaseManager();
    $sql="SELECT * FROM `vt_reg`";
    $tr=$database->safeRetrieve($sql,NULL);
    //echo $_GET["template_1"]."<br>";
    //echo'<script text="text/javascript">var template_1='; echo json_encode($_GET["template_1"]); 
    for($i=0;$i<=count($tr)-1;$i++){
        $_SESSION["vt_name"]=$tr[$i]["p_name"];
         //echo '<script>var template_2=</script>';
        //echo json_encode($tr[$i]["p_fig"]);
       echo '<script type="text/javascript">matchScore("'.$_GET["template_1"].'", "'.$tr[$i]["p_fig"].'", succMatch, failureFunc);</script>';
    	//echo '<script type="text/javascript"> mat('.$_GET["template_1"].', '.$tr[$i]["p_fig"].');</script>';
    }
?>  