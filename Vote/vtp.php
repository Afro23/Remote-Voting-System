<?php
session_start();
include("config.php");
$database=new DatabaseManager();
$vid=$_GET["vid"];
$pt=$_GET["pt"];
$cn=$_GET["can"];
$yt=$_SESSION["year"];
$tq="SELECT * FROM `vt_reg` WHERE `p_vid`='$vid'";
//echo $tq;
$tr=$database->safeRetrieve($tq,NULL);
for($i=0;$i<1;$i++){
  $v=$yt.'-V';
    if($tr[$i]["vote"]==$v){
      echo '<script>window.location="usermatch.php?vo=Voted";</script>';
    }
  $vo="UPDATE `vt_reg` SET `vote`='$yt-V' WHERE `p_vid`='$vid'";
  //echo "<br>".$vo;
  $stat=$database->fireSafeQuery($vo,NULL);
  echo"<br>Status:".$stat;}
//echo "<center>Party:".$pt."<br>Candidate:".$cn."<br></center>";
$ql="SELECT * FROM `vote` WHERE `vt_pt`='$pt' AND `vt_year`=$yt AND `vt_can`='$cn'";
//echo $ql;
$ro=$database->safeRetrieve($ql,NULL);
for($i=0;$i<1;$i++){
  echo $ro[$i]["vt_coun"];
  $con=$ro[$i]["vt_coun"];
}
$con+=1;
$up="UPDATE `vote` SET `vt_coun`=$con WHERE `vt_pt`='$pt' AND `vt_can`='$cn' AND `vt_year`=$yt";
//echo "<br>".$up;
$stat=$database->fireSafeQuery($up,NULL);
echo"<br>Status:".$stat;
if($stat=='Done'){
  echo'<script>alert("You have Successfully Voted To '.$pt.'")</script>';
}
echo '<script>window.location="usermatch.php?vo=Done"</script>';
?>
<html>
<head>
<title>Vote</title>
<style>
  img{
    border-radius: 50%;
  }
</style>
</head>
</html>
