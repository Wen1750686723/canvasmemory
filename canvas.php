<!DOCTYPE HTML>
<html>
<head>
	<script type="text/javascript" src="jquery-1.7.2.min.js"></script>
<script type="text/javascript">

$(function(){
      var dddd=null;
      var c=document.getElementById("myCanvas");
	 var cxt=c.getContext("2d");
	 cxt.moveTo(0,0);
	 ss();
	 function ss(){
	 	$.ajax({ 
		type: "POST",
		url: "http://localhost/ceshi/memory/receive.php",
		dataType: "json",
		data: "id=1",
		success: function(data){
            dddd=data; 
            cxt.lineTo(dddd.time-1431048250,dddd.memory/10000);
	        cxt.stroke(); 
	    },
		error:function(){
			alert("F");
			return false;
	   }
	 
      });
	 	var t1=setTimeout(ss,1000);
	 }
      
	


});


</script>
</head>

<body>

<canvas id="myCanvas" width="800" height="100" style="border:1px solid #c3c3c3;">
Your browser does not support the canvas element.
</canvas>

</body>
</html>