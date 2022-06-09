<html>
<?php
include("menu.php");
?>
<head>
  <style>
    img{
        border-radius: 50%;
    }
  </style>
  <script type="text/javascript">
  function timer(){
	var sec = 1;
	var timer = setInterval(function(){
			sec--;
			if (sec < 0) {
        load();
				//alert("end");
					clearInterval(timer);
			}
	}, 1000);
}
  function load()
  {
       $.ajax({
       type:"POST",
       url: "lv.php",
       data: { party:'<?php echo $_SESSION['party'] ?>'}
       }).done(function(msg){
        $("#ri").html(msg);
       });
       //load();
       timer();
  }

	</script>
  <title>Live Voting</title>
</head>
<body onload="load()">

<div id="ri"></div>
</body>
</html>
