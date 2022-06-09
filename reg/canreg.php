<?php
	include("../menu.php");
	include("test.php");
	include("config.php");
$database=new DatabaseManager();
    $sql="SELECT * FROM `pt_reg`";
    $tr=$database->safeRetrieve($sql,NULL);
    /*if($_SESSION["log"]!=1){
			echo'<script>   window.location="../Admin/adlog.php?sta=nolog"; </script>';
		}else{
		}*/
?>
<!DOCTYPE html>
<html>
<head>
	
	<style>
		table{
			position:absolute;
			top:20%;
			width:78%;
			font-size: 18px;
		}
		td{

			width: 60%;
		}
		th{
			background:black;
			color: white;
			font-size: 20px;
		}
		.download_href{
			position:absolute;
			top:30%;
			right:15%;
		}
		#blah{
			position: absolute;
			top:30%;
			right:10%;
		}
	</style>
	<title>Candidate Registration</title>
	<script type="text/javascript">
		function myFunction(a,b,x,z) {
			//alert(x+a+z+b);
  // Get the checkbox
  var checkBox = document.getElementsByName(a);
  // Get the output text
  var text = document.getElementById(b);

  // If the checkbox is checked, display the output text
  if(x!=z){
   text.style.display = "none";
  }
  if(x==z){
    text.style.display = "block";
  } 	}

function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>
<link rel="stylesheet" href="../BootStrap/bootstrap.min.css">
  <script src="../BootStrap/jquery.min.js"></script>
  <script src="../BootStrap/bootstrap.min.js"></script>
</head>
<body>
	<form method="POST" action="creg.php" enctype="multipart/form-data" autocomplete="off">
		<div class="alert alert-info">
  <center><strong>Info!</strong> All information should be verfied physically Before filling the form</center>
</div><br>
<img id="blah" alt="." src="#" style="position: absolute; top:20%; right:1%; border-radius: 50%;"height="150" width="150" align="right" />
	<table class="table" style="width:75%;">
		<tr><th colspan="2"><center><b>Candidate Registration</b></center></th></tr>
		<tr>
			<td><b>Select image to upload:</b></td>
        <td><input type="file" name="c_pr" id="c_pr" accept=".jpg, .jpeg" onchange="readURL(this);"></td>
		</tr>
		<tr>
			<td><b>Candidate's Name:</b></td>
			<td><input type="text" name="cn_na" id="cn_na" placeholder="Enter Candidate's Name" class="form-control"></td>
		</tr>
		<tr>
			<td><b>Candidate's Adhaar No.:</b></td>
			<td><input type="text" name="cn_ar" id="cn_ar" placeholder="Enter Candidate's Adhaar No." class="form-control" maxlength="12"></td>
		</tr>
		<tr>
			<td><b>Candidate's Mobile No.:</b></td>
			<td><input type="text" name="mob" id="mob" placeholder="Enter Candidate's Mobile No." class="form-control" maxlength="10"></td>
		</tr>
		<tr>
			<td><b>Are you an Individual Candidate:</b></td>
			<td><input type="radio" name="cn_ind" id="cn_ind" value="Yes" onchange="myFunction('cn_ind','cn-par','Yes','No')"><b>Yes</b>                
				<input type="radio" name="cn_ind" id="cn_ind" value="No" onchange="myFunction('cn_ind','cn-par','No','No')"><b>No</b>
			</td>
		</tr>
		<tr style="display:none;" id="cn-par">
			<td><b>Candidate's Party Name:</b></td>
			<td><select name="cn_par" id="cn_par" class="form-control" required>
				<option>Select one</option><?php
				for($i=0;$i<=count($tr)-1;$i++){
					echo'<option>'.$tr[$i]["pt_na"].'</option>';
			}
				?>
			</select></td>
		</tr>
		<tr>
			<td><b>Candidate's Date of Birth:</b></td>
			<td><input type="date" name="cn_d" id="cn_d" placeholder="Enter Candidate's DOB" class="form-control"></td>
		</tr>
		<tr>
		  <td><b>Are You Salaried</b></td><td>
    	  <input type="radio" name="cn_s" id="cn_s" value="Yes" onchange="myFunction('cn_s','SA','Yes','Yes')"><b>Yes</b>
	      <input type="radio" name="cn_s" id="cn_s" value="No" onchange="myFunction('cn_s','SA','No','Yes')"><b>No</b></td>
    	</tr>
    	<tr style="display: none;"  id="SA" >
    		<td>
    			<b>Enter Your Salary:</b>
    		</td>
      		<td>
      			<input type="text" name="sal" id="sal" class="form-control" placeholder="Enter your Salary">
    		</td>
		</tr>
		<tr>
			<td><b>Do You Have a Car</b></td>
			<td><input type="radio" name="cn_p" id="cn_p" value="Yes"><b>Yes</b>
      			<input type="radio" name="cn_p" id="cn_p" value="No"><b>No</b>
      			</td>
		</tr>
		<tr>
			<td><b>Do you have any criminal cases pending:</b></td>
			<td>
      			<input type="radio" name="c_c" id="c_c" value="Yes" onchange="myFunction('c_c','cc','Yes','Yes')"><b>Yes</b>
      			<input type="radio" name="c_c" id="c_c" value="No" onchange="myFunction('c_c','cc','No','Yes')"><b>No</b>
   			</td>
		</tr>
		<tr style="display: none;" id="cc" >
			<td><b>Enter about your crime briefly:</b></td>
			<td>
				<input type="text" name="cri" id="cri" class="form-control" placeholder="Enter your Crime Details" >
			</td>
		</tr>
		<tr><td colspan="2" style=" color:white; background: #cf0d0d;">
  				<center><strong style="color:black;">Note: </strong><b>Enter Proper Details Below</b></center>
			</td>
		</tr>
		<tr>
			<td><b>Detail amount of movable asset's:</b></td>
			<td><input type="text" class="form-control" name="m_a" id="m_a" placeholder="Enter the total amount of movable asset you have"></td>
		</tr>
		<tr>
			<td><b>Detail amount of ImMovable asset's:</b></td>
			<td><input type="text" class="form-control" name="n_m_a" id="n_m_a" placeholder="Enter the total amount of Immovable asset you have"></td>
		</tr>
		<tr>
			<td><b>Do you have any loan amount pending</b></td><td>
      			<input type="radio" name="l_a" id="l_a" value="Yes"><b>Yes</b>
      			<input type="radio" name="l_a" id="l_a" value="No"><b>No</b>
    		</td>
		</tr>
		<tr>
			<td><b>Select your Qualification:</b></td>
			<td><select  name="qa" id="qa" class="form-control"  style="width: 60%;"  required>
  				<option>SELECT</option>
  				<option>B.E</option>
  				<option>M.E</option>
  				<option>B.SC</option>
  				<option>PHD</option>
  				</select>
  			</td>
		</tr>
		<tr>
			<td><b>Select your Mother Tounge:</b></td>
			<td><select  name="mt" id="mt" class="form-control"  style="width: 60%;"  required>
  				<option>SELECT</option>
  				<option>Hindi</option>
  				<option>Marathi</option>
  				<option>Tamil</option>
  				<option>English</option>
  				<option>Telegu</option>
  				</select>
  			</td>
		</tr>
		<tr>
			<td><b>Is the candidate is holding any office of profit under the Goverment of India</b></td>
			<td><input type="radio" name="gv" id="gv" value="Yes"><b>Yes</b>
      			<input type="radio" name="gv" id="gv" value="No"><b>No</b></td>
		</tr>
		<tr>
			<td><b>Is the Candiadate is disqualified under section 8A of the said act by an order of the President</b>
			</td>
			<td><input type="radio" name="p8" id="p8" value="Yes"><b>Yes</b>
      			<input type="radio" name="p8" id="p8" value="No"><b>No</b>
      		</td>
		</tr>
		<tr>
			<td><b>Is the Candidate was dismissed for the corruption or for disloyalty while holding office under the Goverment of India</b></td>
			<td>
				<input type="radio" name="gv_c" id="gv_c" value="Yes"><b>Yes</b>
      			<input type="radio" name="gv_c" id="gv_c" value="No"><b>No</b>
			</td>
		</tr>
		<tr>
			<td><b>Is the Candiadate is disqualified under section 10A</b></td>
			<td><input type="radio" name="p10a" id="p10a" value="Yes"><b>Yes</b>
      			<input type="radio" name="p10a" id="p10a" value="No"><b>No</b>
      		</td>
		</tr>
		<tr>
			<td><b>Is the Candidate is Managing agent of any company or corporation in the capital of which the central Goverment or state Goverment has not less then 25% share</b></td>
			<td>
				<input type="radio" name="gv_mn" id="gv_mn" value="Yes"><b>Yes</b>
      			<input type="radio" name="gv_mn" id="gv_mn" value="No"><b>No</b>
			</td>
		</tr>
		<tr><td><b>Scan your Finger</b></td>
			<td>
				<input type="button" value="Click to Scan" onclick="captureFP()" class="btn btn-success">
			</td>
		</tr>
		<tr>
			<td colspan="2"><center><input type="submit" name="sub" id="sub" class="btn btn-success"></center></td>
		</tr>
	</table>
	<div id="result" style="display:none;"/>.
                        </div>
</form>
<img id="FPImage1" alt="." style="position: absolute;top:200%;right:0%;" height=300 width=210 align="right">
</body>
</html>
