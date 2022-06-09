<?php
	include("../menu.php");
	include("config.php");
	$n_yr=$_POST["y_r"];
	$n_da=$_POST["da1"];
	$n_co=$_POST["cn"];
  $database=new DatabaseManager();
    $query="INSERT INTO `news`(`vt_year`, `date`, `content`) VALUES ($n_yr, '$n_da', '$n_co')";
    echo $query;
    $status=$database->fireSafeQuery($query,NULL);
		echo"<br>Status:".$status;
	?>
	 <a href="Party/chlog.php">CLick Here For Party Cheif Login</a><br>
  <a href="Admin/adlog.php">CLick Here For ECO(Election Commission Officier) Login</a><br>
  <a href="Admin/adlog.php">CLick Here For Booth Officier Login</a>