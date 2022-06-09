<?php
session_destroy();
session_unset();
$_SESSION["log"]=0;
header("logad.php?sta=logout");
?>