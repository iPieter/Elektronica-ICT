<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>Besluit</title>
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" /> 
	<link href="styles.css" rel="stylesheet" type= "text/css" >
	<link href='http://fonts.googleapis.com/css?family=Lora:400,400italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

</head>
<body>
<div id = "topbar" >

	<?php  
	$name = "conclusion";
	include("topbar.php"); ?>
	  
</div>
	
<div class = "container" >
		 
	 <h1>Besluit</h1>
</div>
    
  <!-- video element -->
<div class = "image imagecontainer">
    
    <video class= "video" controls> 
        <source src = "images/omegabierma.mp4" 
            type = "video/mp4">
    </video> 			

</div>
<div class="image imagecaption">uitleg bij video
	<hr>
</div>
<!-- end video element -->

<div class = "container">
    <p>
    Na het afwerken van de module in les 2, kozen wij ervoor de om de module in te bouwen in een wekker. De bedoeling is dat op het moment dat de digitale wekker in alarm gaat, en er dus muziek uit de speaker komt, ook de LED-verlichting gaat oplichten.
    <br>
    Na het aanschaffen van een digitale wekker, werd deze opengebroken om de nodige aansluitingen te maken.
    </p>
    
    <p>
    De afwerking is nog niet helemaal compleet maar wekker en de LED's werken perfect samen. Het resultaat mag er dus best zijn. 
    </p>
    
			
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
  