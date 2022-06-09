<?php
include("../menu.php");
$r=$_GET["r"];
/*if(isset($_POST["sub"])){
echo $name=$_POST["nam"];
$state=$_POST["s"];
$party=$_POST["p"];
$ar=$_POST["r"];}*/
$yr=$_SESSION["year"];
include("config.php");
$sql="SELECT * FROM `cn_reg` WHERE `ca_no`=$r AND `vt_year`=$yr";
//echo "<br>".$sql;
$database=new DatabaseManager();
$tr=$database->safeRetrieve($sql,NULL);
echo'<br><table class="table"> ';
for($i=0;$i<1;$i++){
echo '<th colspan="2"><center><b>Candidate Verification</b></center></th>';
	echo '<tr><td><b>Passport Size photo:</b></td><td><img class="card-img-top" src=../reg/profile/'.$tr[$i]["c_pr"].' 	height=250 width=200></td></tr>';
	echo '<tr><td><b>Name:</b></td><td>'.$tr[$i]["c_name"].'</td></tr>';
	echo '<tr><td><b>Candidate Adhaar No:</b></td><td>'.$tr[$i]["ca_no"].'</td></tr>';
	echo '<tr><td><b>Candidate Mobile No:</b></td><td>'.$tr[$i]["cm_no"].'</td></tr>';
	echo '<tr><td><b>Are you an Individual Candidate:</b></td><td>'.$tr[$i]["ind_c"].'</td></tr>';
	echo '<tr><td><b>Candidate Date of Birth:</b></td><td>'.$tr[$i]["c_dob"].'</td></tr>';
	echo '<tr><td><b>Do You Have a Car</b></td><td>'.$tr[$i]["c_car"].'</td></tr>';
	echo '<tr><td><b>Are You Salaried:</b></td><td>'.$tr[$i]["c_sal"].'</td></tr>';
	echo '<tr><td><b>Do you have any criminal cases pending:</b></td><td>'.$tr[$i]["c_crime"].'</td></tr>';
	echo '<tr><td><b>Detail amount of movable assets:</b></td><td>'.$tr[$i]["m_a"].'</td></tr>';
	echo '<tr><td><b>Detail amount of ImMovable assets:</b></td><td>'.$tr[$i]["n_m_a"].'</td></tr>';
	echo '<tr><td><b>Do you have any loan amount pending:</b></td><td>'.$tr[$i]["l_a_p"].'</td></tr>';
	echo '<tr><td><b>Select your Qualification:</b></td><td>'.$tr[$i]["c_qua"].'</td></tr>';
	echo '<tr><td><b>Select your Mother Tounge:</b></td><td>'.$tr[$i]["c_mt"].'</td></tr>';
	echo '<tr><td><b>Is the candidate is holding any office of profit under the Goverment of India:</b></td><td>'.$tr[$i]["c_gov"].'</td></tr>';
	echo '<tr><td><b>Is the Candiadate is disqualified under section 8A of the said act by an order of the President:</b></td><td>'.$tr[$i]["c_8A"].'</td></tr>';
	echo '<tr><td><b>Is the Candidate was dismissed for the corruption or for disloyalty while holding office under the Goverment of India:</b></td><td>'.$tr[$i]["c_dis"].'</td></tr>';
	echo '<tr><td><b>Is the Candiadate is disqualified under section 10A:</b></td><td>'.$tr[$i]["c_10A"].'</td></tr>';
	echo '<tr><td><b>Is the Candidate is Managing agent of any company or corporation in the capital of which the central Goverment or state Goverment has not less then 25% share:</b></td><td>'.$tr[$i]["c_m_g"].'</td></tr>';
	echo '<tr><td><b>Candidate State:</b></td><td>'.$tr[$i]["cn_state"].'</td></tr>';
	echo '<tr><td><b>Candidate Constituencies:</b></td><td>'.$tr[$i]["cn_const"].'</td></tr>';
	echo '<tr><td><b>Candidate Party:</b></td><td>'.$tr[$i]["cn_par"].'</td></tr>';
	echo '<tr><td><b>Candidate Voter id:</b></td><td>'.$tr[$i]["cn_vid"].'</td></tr>';
	echo '<tr><td><b>Remark(If Any):</b></td><td><textarea maxlength=100 placeholder="Remark" id="rm" name="rm"></textarea> <span class="alert alert-danger">Note:Only 100 Charachters Allowed.</span></td></tr>';
}
echo '</table>';
echo '<form method="POST">';
?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		td{
			width:50%;
			font-size: 18px;
		}
		th{
			font-size: 24px;
			color:white;
			background: gray;	
		}
	</style>
	<title></title>
</head>
<body>
	<table class="table">
		<tr><td colspan="2" style=" color:white; background: #cf0d0d;"><center><strong style="color:black;">Note: </strong><b>Please verify the details above and click Verify</b></center></td></tr>
		<tr>
			<td><b>Police station record verfied:</b></td>
			<td><input type="radio" name="p_vr" id="p_vr" value="Verified"><b>Verified</b>
     			<input type="radio" name="p_vr" id="p_vr" value="Not Verified"><b>Not Verified</b>
     		</td>
		</tr>
		<tr>
			<td><b>Detail of Immovable Property:</b></td>
			<td><input type="radio" name="i_p" id="i_p" value="Verified"><b>Verified</b>
      			<input type="radio" name="i_p" id="i_p" value="Not Verified"><b>Not Verified</b>
      		</td>
		</tr>
		<tr>
			<td><b>Detail of movable Property:</b></td>
			<td><input type="radio" name="m_p" id="m_p" value="Verified"><b>Verified</b>
      			<input type="radio" name="m_p" id="m_p" value="Not Verified"><b>Not Verified</b>
      		</td>
		</tr>
		<tr>
			<td><b>Bank Account Detail:</b></td>
			<td><input type="radio" name="b_ac" id="b_ac" value="Verified"><b>Verified</b>
      			<input type="radio" name="b_ac" id="b_ac" value="Not Verified"><b>Not Verified</b>
      		</td>
		</tr>
		<tr>
			<td><b>Resedential Detail Verified:</b></td>
			<td><input type="radio" name="rs_d" id="rs_d" value="Verified"><b>Verified</b>
      			<input type="radio" name="rs_d" id="rs_d" value="Not Verified"><b>Not Verified</b>
  			</td>
		</tr>
		<tr>
			<td colspan="2">
				<center><input type="submit" name="sub" id="sub" class="btn btn-success"></center>
			</td>
		</tr>
	</table>
</form>
<?php
if(isset($_POST["sub"])){
	echo"ecclo";
	$que="UPDATE `cn_reg` SET `psr`='".$_POST["p_vr"]."',`d_imp`='".$_POST["i_p"]."',`d_mp`='".$_POST["m_p"]."',`b_a_d`='".$_POST["b_ac"]."',`rd`='".$_POST["rs_d"]."',`cn_ver`='Verified' WHERE `ca_no`=".$r." AND `vt_year`=".$yr."";
	echo $que;
	 $status=$database->fireSafeQuery($que,NULL);
		echo"<br>Status:".$status;
}
?>
</body>
</html>