    <?php 
    include("../menu.php");
    include("test.php");
    if($_SESSION["log"]!=1){
      echo'<script>   window.location="../Admin/adlog.php?sta=nolog"; </script>';
    }else{
      //echo'<script>alert("Logged In Successfully");</script>';
    }
  ?>
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

  </style>

</head>
<body>
<form method="POST" action="pr.php" enctype="multipart/form-data" autocomplete="off">
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
<table class="table" style="width:50%;">
    <tr><th colspan="2"><center><b>Political Party Registration</b></center></th></tr>
    <tr>
    
  <td>Party's Abbreviation:</td>
      <td><input type="text" class="form-control" style="width: 60%;" name="pr_ab" id="pr_ab" placeholder="Enter Party Name"></td>
    </tr>
<tr>
  <td>Party's Name:</td>
      <td><input type="text" class="form-control" style="width: 60%;"  name="pr_na" id="pr_na" placeholder="Enter Party Name" >
      </td>
    </tr>
<tr>
<td>Party Cheif's Name</td>
      <td><input type="text" class="form-control" style="width: 60%;"  name="pr_cf" id="pr_cf" placeholder="Enter Party Name" >
      </td>
      </tr>
      <tr>
      <td>Party's Logo:</td>
<td><input type="file" name="pr_ig" id="pr_ig" placeholder="Enter Party Name" class="form-control" accept=".jpg, .jpeg" onchange="readURL(this);"></td>
    </tr>
<tr>     
<td><input type="submit" name="sub" id="sub" class="btn btn-success"style="width: 60%;"></td>
</tr>
</table>
</div></div></form></body></html>

