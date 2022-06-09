<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
  font-family: 'Lato', sans-serif;
}

.overlay {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0, 9, 25, 0.93);
  overflow-x: hidden;
  transition: 0.5s;
}

.overlay-content {
  position: relative;
  top: 25%;
  width: 100%;
  text-align: center;
  margin-top: 30px;
}

.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
  color: #f1f1f1;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}

.un{
	position:absolute;
	top:1%;
	right:8%;
	font-size: 25px;
	color:white;
}
.lo{
	position:absolute;
	right:1%;
}
#er{
  box-shadow: 1px 2px 5px black;
}
  /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    .footer{
            position: absolute;
            left:0px;
            top:160%;
            width:100%;
            border: 2px blue;
            background:#002159;
            color:white;
            text-align: center;
        }
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
    .b1 h4{text-align: center;
            height: 205px;
            width: 210px;
            background-color:skyblue;
                color: white;
            padding: 20px;
            margin: 50px;
            border:4px solid black;
            
        }
        .b2 h4{
           text-align: center;
            height: 205px;
            width: 210px;
            background-color:lightgreen;
            color: white;
            padding: 20px;
            margin: 50px;
            border:4px solid black;
            }
            ul {
  list-style-type: none;
  color:white;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #002159;
  box-shadow: 1px 2px 8px #0564ff;
}
  .fa {
  padding: 10px;
  font-size: 20px;
  width: 40px;
  text-align: center;
  text-decoration: none;
    margin:5px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}
 body{
  background-image:url(Icons/pexels-photo-1550337.jpeg width);
 }   
</style>
</head>
<script>
function openNav() {
  document.getElementById("myNav").style.width = "45%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>   
<body>

<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="#">About</a>
    <a href="Party/chlog.php">Party Cheif Login</a>
    <a href="Admin/adlog.php"> ECO(Election Commission Officier) Login</a>
    <a href="Admin/adlog.php">Booth Officier Login</a>
  </div>
</div>
<ul>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; MENU</span>
</ul>
   <div id="er"><img src="BootStrap/logo.png" height="70"></div>
<div class="container" style="width: 100%"> 
  <div id="myCarousel" class="carousel slide" data-ride="carousel" >
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="Icons/img1.PNG" alt="Los Angeles"style="width:100%;height:">
      </div>

      <div class="item">
        <img src="Icons/img2.PNG" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="Icons/img3.PNG" alt="New york"style="width:100%;" >
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<br>
<div style="border:2px solid #002159;">
  <marquee><b style="font-size:20px;color:darkblue;">Shri Sunil Arora assumes charge as the 23rd Chief Election Commissioner of IndiaElection Commission of India organised a two day conference of Chief Electoral officers to review the poll preparedness Schedule for bye-elections to fill casual vacancies in the State Legislative Assemblies of Haryana and Tamil Nadu EVM Credibility: Technological and Administrative safeguards. Mr. Sunil Arora, Hon'ble Chief Election Commissioner of India meeting with H.E. Mr. Syed Muazzem Ali, High Commissioner of Bangladesh to India on 12 Dec 2018Results of General Elections to the Legislative Assemblies of Chhattisgarh Madhya Pradesh Rajasthan Mizoram Telangana 2018 at http://eciresults.nic.in</b></marquee> 
</div><br>
<div style="background-color:black;text-align:center;padding:5px;font-size:22px"><a href="canreg.php" style="text-decoration:none;">Click here to register as Candidate </div>
      <div style="position: absolute;top:90%;left:20px; border:5px solid black;width:600px; background-color:lightblue;height:45%" class="jumbotron">
    <h4 style="background-color:#002159;color:white;padding-top:50px;">News From ECO</h4>
    <?php
      include("reg/config.php");
    $database=new DatabaseManager();
    $yr=0;
    $tr=$database->safeRetrieve($sql,NULL);
    for($i=0;$i<1;$i++){
      echo "<span style='font-size:16px;border-bottom: 2px solid black;top: 0px'>Dated:<b>".$tr[$i]["date"]."</b><br>News:<b>".$tr[$i]["content"]."</b></span>";
    }
    $que="SELECT * FROM `date` WHERE `vt_year`=$yr";
    

    ?>
  </div>
    </div>

<br>  <div id="ri"></div>
<div id="demo" style="position: absolute; right:5%;"><?php 
  $tr=$database->safeRetrieve($que,NULL);
  for($i=0;$i<1;$i++){
    echo'<h4>Voting Starts From: <b>'.$tr[$i]["st_date"].'</b></h4>';
    echo'<h4>Voting Ends at: <b>'.$tr[$i]["ed_date"].'</b></h4>';
    echo'<h4>Voting Boot timming: <b>'.$tr[$i]["st_time"].' To '.$tr[$i]["ed_time"].'</b></h4>';
  }?> 
</div>
<div class="footer">
<div class="container-fluid">
<div class="row">
<div class="col-sm-4">
    <span class="" style="bordeblack;"><h4>ABOUT US</h4><br>
            <br>Fingerprint Based Voting Project is an application where the user is recognized by his Adhaar number and
finger pattern. Since the finger pattern of each human being is different, the voter can be easily
authenticated
    </span>
    </div>    
    <div class="col-sm-4">
        <span class=""><h4>USEFUL LINK</h4></span><br>
        <span class=""><h5><a href="votreg.php" style="text-decoration: none;"><b>Voter Registration</b></a></h5></span>
        <span class=""><h5><a href="canreg.php" style="text-decoration: none;"><b>Candidate Registrtion</b></a></h5></span>
    <span class=""><h5><a href="parreg.php" style="text-decoration: none;"><b>Party Registration</b></a></h5></span>
    </div>    
<div class="col-sm-4">
    <span class=""><h4>CONTACT</h4></span><br>
    <span class=""><h5>Afroz Labbai</h5></span>
    <span class=""><h5>Arbaaz Nakhwa</h5></span>
    <span class=""><h5>Uzair Faquih</h5></span>
    </div>   
    </div>   
    </div>
      <span class=""><h2>Follow Us On</h2>
        <span class="fa fa-facebook"></span>
        <span class="fa fa-twitter"></span>
        <span class="fa fa-google"></span>
        <span class="fa fa-youtube"></span>   
        </span>
    </div>
</body></html>
<?php
$yr=0;
$sql="SELECT * FROM `date` WHERE `vt_year`=$yr";
$tr=$database->safeRetrieve($sql,NULL);
date_default_timezone_set('Asia/Kolkata');
for($i=0;$i<1;$i++){

}
?>