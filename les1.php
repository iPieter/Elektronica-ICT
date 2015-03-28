<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>Lesson 1</title>
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" /> 
	<link href="styles.css" rel="stylesheet" type= "text/css" >
	<link href='http://fonts.googleapis.com/css?family=Lora:400,400italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
</head>
<body>
<div id = "topbar" >

	<?php  
	$name = "les1";
	include("topbar.php"); ?>
	  
</div>
	
<div class = "container" >
		 
		 <h1>Les 1</h1>
		 <p>Bij de aanvang van deze les, hebben we korte instructies gekregen om te solderen. Dit hebben we die les dan ook voldoende kunnen inoefenen; eerst op een testplaat en daarna op een PCB. Hierop hebben we enkele weerstanden gesoldeerd die de basis vormden voor de aansturing van de LED-stip.</p>
</div>

<!-- image element -->
<div class = "image imagecontainer">
		 <img src="images/les_1_upside_pcb.jpg">			
</div>
<div class="image imagecaption">De bovenzijde van de PCB op het einde van les 1
	<hr>
</div>
<!-- end image element -->

<div class = "container" >
		 
		 <p>Naast leren solderen, hebben we ook kennis gemaakt met de wereld van weerstanden: we kunnen nu ook uitrekenen wat de weerstandswaarde is door gebruik te maken van de kleurcodering.</p>
</div>
<div id = "footer" >

	<?php 
	include("footer.php"); ?>
	  
</div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-60916631-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
  