
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="BootStrap/bootstrap.min.css">
  <script src="BootStrap/jquery.min.js"></script>
  <script src="BootStrap/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
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
<script type="text/javascript">
			function myFunction(x) {
			alert(x);
  // Get the checkbox
  var checkBox = document.getElementsByName("cn_p");
  // Get the output text
  var text = document.getElementById("cn-par");

  // If the checkbox is checked, display the output text
  if(x=="Yes"){
   text.style.display = "none";
  }
  if(x=="No"){
    text.style.display = "block";
  } 	}
  </script>
  <script type="text/javascript">

			function myFunction(y) {
			alert(y);
  // Get the checkbox
  var checkBox = document.getElementsByName("cn_s");
  // Get the output text
  var text = document.getElementById("SAL");

  // If the checkbox is checked, display the output text
  if(y=="No"){
   text.style.display = "none";
  }
  if(y=="Yes"){
    text.style.display = "block";
  } 	}

</script>
<script type="text/javascript">

			function myFunction(z) {
			alert(z);
  // Get the checkbox
  var checkBox = document.getElementsByName("c_s");
  // Get the output text
  var text = document.getElementById("CR");

  // If the checkbox is checked, display the output text
  if(y=="No"){
   text.style.display = "none";
  }
  if(y=="Yes"){
    text.style.display = "block";
  } 	}

</script>

</head>
<body>
 <form method="POST" action="creg.php" enctype="multipart/form-data" autocomplete="off">
 <div class="jumbotron" style="background-color:#1c3f80;color: white;">
    <h2><center><img src="gov.png" height="90" width="90">Voting Registration</center></h2>
  </div><hr>
  <h3 style="color: red;"><marquee><b>Welcome To The Online Registration Of Election 2019</b></marquee></h3><hr>
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav" style="height: 100%;">
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1"><b>Notice</b></a></li>
        <li><a href="#section3">The Voting is Applicable only till The Voting is Live</a></li><br><br>
        <li class="active"><a href="#section3"><b>Importance</b></a></li>
        <li><a href="#section2">Importance of voting in democratic elections, Problems facing in voting by individuals. Voting is one of the great privileges of living in a democracy. It provides recognition of their opinions and choices. It is important to vote and that their opinion matters, and believe that change is possible</a></li>
        <li class="active"><a href="#se3ction"><b>Click here for More Help</b></a></li>
      </ul><br>
    </div>
    <div class="alert alert-info" style="width:75%">
  <center><strong>Info!</strong> All information should be verfied physically Before filling the form</center>
</div><br>
<img id="blah" alt="." src="#" style="position: absolute; top:20%; right:1%; border-radius: 50%;"height="150" width="150" align="right" />
  <table class="table" style="width:50%;">
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
<img id="FPImage1" alt="." style="position: absolute;top:200%;right:0%;" height=300 width=210 align="right"></div>
</div></body></html>
