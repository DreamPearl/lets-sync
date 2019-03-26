<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
	
	<video id="myvideo" width="400" height="300" controls>
		<source src="ralph.mp4" type="video/mp4">
	</video>
<script type="text/javascript">
	var vid=document.getElementById("myvideo");
	//	console.log(vid);
	vid.onpause=function()
	{   
		$.get("control.php?type=1");
		//alert("The video has been paused");
	};


	vid.onplay=function()
	{   
		$.get("control.php?type=2");
		//alert("The video has been play");
	};


// var can_seek=true;
// vid.onseeked=function(){
// // 	//alert("seeking");
// 	if(can_seek==true){
// 	$.get("control.php?type=3&location="+vid.currentTime);
// 		console.log("called: "+can_seek);
// }	
	
// }
setInterval(function()
{ 
<?php
if($_GET["master"]==1)
{
	?>
	$.get("control.php?type=3&location="+vid.currentTime);
	<?php

}
?>
    
	
	

	$.get("getstatus.php",function(data,status){
		console.log(data);
		var r=data.split("\n");
		//console.log(r);
		var st=r[0];
		var loc=r[1];
		console.log(st);
		console.log(loc);
		
	    if(Math.abs(vid.currentTime-loc)>=5)
	    {
	    	can_seek=false;

<?php
	if($_GET['master']!=1)
	{
		?>
		    vid.currentTime=loc;
		    <?php
	}

?>

		   // can_seek=true;

		   //1 sec
		    setTimeout(function()
		    {
		    	can_seek=true;
		    },50);
		   
	   }
		

			if(st=="pause")
			{ //console.log("hi");
				vid.pause();
		}
				else
				{
					vid.play();
				}





				})
	
//alert("hello hello");
},1000);
</script>
</body>
</html>