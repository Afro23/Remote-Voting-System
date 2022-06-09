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
<html>
<head>
	<style>
		table{
			position:absolute;
			top:25%;
			right:35%;
			width:100%;
			font-size: 16px;
		}
		td{

			width: 50%;
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
	<title>Party Registration</title>
	<script type="text/javascript">
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
</head>
<body>
	<form method="POST" action="pr.php" enctype="multipart/form-data" autocomplete="off">
	<table class="table" style="width:50%;">
		<tr><th colspan="2"><center><b>Political Party Registration</b></center></th></tr>
		<tr>
			<td><b>Party's Abbreviation:</b></td>
			<td><input type="text" name="pr_ab" id="pr_ab" placeholder="Enter Party Name" class="form-control"></td>
		</tr>
		<tr>
			<td><b>Party's Name:</b></td>
			<td><input type="text" name="pr_na" id="pr_na" placeholder="Enter Party Name" class="form-control"></td>
		</tr>
		<tr>
			<td><b>Party Cheif's Name:</b></td>
			<td><input type="text" name="pr_cf" id="pr_cf" placeholder="Enter Party Name" class="form-control"></td>
		</tr>
		<tr>
			<td><b>Party's Logo:</b></td>
			<td><input type="file" name="pr_ig" id="pr_ig" placeholder="Enter Party Name" class="form-control" accept=".jpg, .jpeg" onchange="readURL(this);"></td>
		</tr>
		<tr>
			<td colspan="2"><center><input type="submit" name="sub" id="sub" class="btn btn-success"></center></td>
		</tr>
	</table>
<img id="blah" alt="." src="#" height="300" width="300"/>
</form>
</body>
</html>