	<?php
    include("fmatch.php");
    ?>
<!DOCTYPE html>
<html>
<head>
	<title>Voting</title>

</head>
<body onload="CallSGIFPGetData(SuccessFunc1, ErrorFunc)">
	<input type="button" value="Click to Scan" onclick="CallSGIFPGetData(SuccessFunc1, ErrorFunc)">
	<input type="button" value="Click to Match" onclick="met()"> <br>
    <p id="result1"> </p>
</body>
</html>