<!DOCTYPE html> 
<html lang="en"> 

<head> 

<!-- ENGLISH -->
		
		
	<meta charset="utf-8" />

	<title>MyLife 0.1</title>
	
	
<!-- information -->

		<meta name="author" content="Floris van de Sande">
	
		<meta name="description" content="Data collection" />
		
		<meta http-equiv="cache-control" content="max-age=3600" />



<!-- mobile -->
	
		<meta name="viewport" content="width=device-width" />
			
		<meta name="apple-mobile-web-app-capable" content="yes" />
		
		<meta name="viewport” content=”width=1024, minimal-ui" />
		
	
	
<!-- appearance -->
    		
    		<link href="http://www.florisvandesande.com/favicon.ico" rel="shortcut icon">
    		
    		<link href="http://www.florisvandesande.com/apple-touch-icon-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144" >
    		
   			<link rel="stylesheet" href="mylife.css">

        
</head>

<body>

<header>	

	<h1 class="site-title">MyLife 0.1</h1>
	
	<nav>
	
		<ul>
			<li><a href="index.html">home</a></li>
			<li><a href="about.html">about</a></li>
		</ul>
	
	</nav>

</header>

	<div class="age">

		<h1><?php

			// replace birthday date with your own

			$birthday = new DateTime('1990-01-09 8:30:00');
			$present = new DateTime();
			$interval = $present->diff($birthday);
			echo $interval->y;

		?></h1>
		<p>years old</p>
	
	</div>

</body>

</html>