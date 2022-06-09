<?php
	include("../menu.php");
	include("config.php");
	function age($date){

    $dateOfBirth = $date;
$today = date("Y-m-d");
$diff = date_diff(date_create($dateOfBirth), date_create($today));
$ag=$diff->format('%y');
return $ag;
}
	$c_car=$_POST["cn_p"];
	$c_sal=$_POST["sal"];
	$c_cri=$_POST["c_c"];
	if($c_cri=="Yes"){
		$c_cri=$_POST["cri"];
	}
	$c_ma=$_POST["m_a"];
	$c_nma=$_POST["n_m_a"];
	$c_la=$_POST["l_a"];
	$c_qa=$_POST["qa"];
	$c_mt=$_POST["mt"];
	$c_gv=$_POST["gv"];
	$c_p8=$_POST["p8"];
	$c_dis=$_POST["gv_c"];
	$c_10a=$_POST["p10a"];
	$c_mn=$_POST["gv_mn"];
	$cn_n=$_POST["cn_na"];
	$cn_ind=$_POST["cn_ind"];
	$cn_par=$_POST["cn_par"];
	if($cn_par==''){
		$cn_par="Individual";
	}
	$cn_d=$_POST["cn_d"];
	//$cn_in=$_POST["cn_in"];
	$c_ar=$_POST["cn_ar"];
	$cn_fig=$_POST["p_fig"];
	/*echo $cn_fig;
	echo $cn_n;
	echo $cn_ind;
	echo $cn_par;
	echo $cn_d;
	echo age($cn_d);
	echo $cn_in;*/
	$const=$_SESSION["const"];
	$sat=$_SESSION["state"];
	$cn_mob=$_POST["mob"];
	$yt=$_SESSION["year"];
	$target_dir="profile/";
	$filname=$_FILES["c_pr"]["name"];
    $moved=move_uploaded_file($_FILES["c_pr"]["tmp_name"], $target_dir . $_FILES["c_pr"]["name"]);
	//echo $c_ar;
	$cn_vid= "VID".$c_ar;
    $database=new DatabaseManager();
    $query="INSERT INTO `cn_reg`(`vt_year`, `c_pr`, `c_name`, `ca_no`, `cm_no`, `ind_c`, `c_dob`, `c_car`, `c_sal`, `c_crime`, `m_a`, `n_m_a`, `l_a_p`, `c_qua`, `c_mt`, `c_gov`, `c_8A`, `c_dis`, `c_10A`, `c_m_g`, `cn_state`, `cn_const`, `cn_par`, `cn_vid`, `cn_fig`, `cn_ver`, `cn_tic`) VALUES ($yt, '$filname', '$cn_n' , $c_ar, $cn_mob, '$cn_ind', '$cn_d', '$c_car', '$c_sal', '$c_cri', '$c_ma', '$c_nma', '$c_la', '$c_qa', '$c_mt', '$c_gv', '$c_p8', '$c_dis', '$c_10a', '$c_mn', '$sat', '$const', '$cn_par', '$cn_vid', '$cn_fig','','')";
    //echo $query;
    $status=$database->fireSafeQuery($query,NULL);
		echo"<br>Status:".$status;
    $ins="INSERT INTO `vt_reg` (`p_ar`, `p_name`, `p_dob`, `p_age`, `p_con`, `p_s`, `p_m`, `p_vid`, `p_fig`) VALUES ('$c_ar', '$cn_n', '$cn_d', ".age($cn_d).", '$const', '$sat', '$cn_mob', '$cn_vid', '$cn_fig')";
//	echo "<br>".$ins;
$stat=$database->fireSafeQuery($ins,NULL);
echo"<br>Status:".$stat;

    echo $status;
    if($status=="Done" && $stat=="Done"){
    	echo'<div class="alert alert-success" id="al">
  <strong>Success!</strong> Candidate Registered Successfully.
</div>';
	header("Location:canreg.php");
    }

?>
<!DOCTYPE html>
<html>
<head>
	<style>
		a{
			text-decoration: none;
		}
		.mr{
			font-size: 20px;
			position: absolute;
			top:50%;
			right:40%;
		}
		#al{
			position: absolute;
			top:30%;
			right:40%;
		}
	</style>
	<title></title>
</head>
<body>
<div class="mr"><a href="canreg.php"><b>Click to register more Candidates</b></a></div>
</body>
</html>
