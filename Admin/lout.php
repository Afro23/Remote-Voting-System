<?php
session_start();
session_destroy();
session_unset();
$_SESSION["log"]=0;
echo'<script>   window.location="../Admin/adlog.php?sta=logout"; </script>';
?>