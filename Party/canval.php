<html>
<head>
<title>Candidate Validation</title>
<style type="text/css">
</style>
</head>
<body>
  <div id="ta"></div>
  <?php
  include("config.php");
  include("menu.php");
  //echo $_SESSION["party"];
  $pt=$_SESSION["party"];
  $yr=$_SESSION["year"];
  if($_GET["ver"]==1){
  echo '<div class="alert alert-Success">
  <strong>Success!</strong> Candidate Verified Successfully</div>';
}
  echo "<center><div style='color:red;font-size:24px;border-bottom:1px solid black;'>Not Verified</div></center>";
  $database=new DatabaseManager();
  $sql="SELECT * FROM `cn_reg` WHERE `cn_par`='$pt' AND `vt_year`='$yr' AND cn_ver='Verified' AND cn_tic=''";
  //echo $sql;
   $tr=$database->safeRetrieve($sql,NULL);
   //echo $tr;
  for($i=0;$i<count($tr);$i++){
    $cn=$tr[$i]["c_name"];
    $con=$tr[$i]["cn_const"];
    //echo "<tr><td><b>Candidate's Name: </b></td><td>".$tr[$i]["c_name"]."</td></tr>";
    //echo "<tr><td><b>Candidate's Constituencie: </b></td><td>".$tr[$i]["cn_const"]."</td></tr>";
    //echo "hello";
    //echo "<tr  style='border-bottom:2px solid black;'><td colspan='2'><center><a href='cn_ver.php?party=$pt&can=$cn&const=$con'>Verify</a></center></td></tr>";

    echo '<div class="card" style="width:300px;margin:20px;"><img class="card-img-top" src=../reg/profile/'.$tr[$i]["c_pr"].'>';
  echo '<div class="card-body"><p class="card-title">Name:<b>'.$tr[$i]["c_name"].'</b></p>';
  echo '<p class="card-text">State:<b>'.$tr[$i]["cn_state"].'</b></p>';
  echo '<p class="card-text">Constituencies:<b>'.$tr[$i]["cn_const"].'</b></p>';
  echo 'Party:<p class="card-text"><b>'.$tr[$i]["cn_par"].'</b></p>';
 // echo'<a class="btn btn-primary" href="cn_ver.php?n='.$tr[$i]["c_name"].'&s='.$tr[$i]["cn_state"].'&p='.$tr[$i]["cn_par"].'&r='.$tr[$i]["ca_no"].'&c='.$tr[$i]["cn_const"].'">Verify</a>';
  echo'<a  class="btn btn-primary" href="cn_ver.php?r='.$tr[$i]["ca_no"].'">Verify</a>';
  echo'</div></div>';
  }

  echo "<center><div style='border-bottom:1px solid black;color:green;font-size:24px;'>Verified</div></center>";
  $database=new DatabaseManager();
  $sql="SELECT * FROM `cn_reg` WHERE `cn_par`='$pt' AND `vt_year`='$yr' AND `cn_tic`='Yes'";
  //echo $sql;
   $tr=$database->safeRetrieve($sql,NULL);
  for($i=0;$i<=count($tr)-1;$i++){
    $cn=$tr[$i]["c_name"];
    $con=$tr[$i]["cn_const"];
    echo '<div class="card" style="width:300px;margin:20px;"><img class="card-img-top" src=../reg/profile/'.$tr[$i]["c_pr"].'>';
  echo '<div class="card-body"><p class="card-title">Name:<b>'.$tr[$i]["c_name"].'</b></p>';
  echo '<p class="card-text">State:<b>'.$tr[$i]["cn_state"].'</b></p>';
  echo '<p class="card-text">Constituencies:<b>'.$tr[$i]["cn_const"].'</b></p>';
  echo 'Party:<p class="card-text"><b>'.$tr[$i]["cn_par"].'</b></p>';
  echo'</div></div>';
  }
  
 ?>
</body>
</html>
