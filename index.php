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



<!-- AGE -->

	<div id="block" class="age">

		<h5>current age</h5>
		
		<h1><?php

			// replace birthday date with your own

			$birthday = new DateTime('1990-01-09 8:30:00');
			$present = new DateTime();
			$interval = $present->diff($birthday);
			echo $interval->y;

		?></h1>
		<p>yrs</p>
	
	</div>
	


<!-- STEPS TAKEN -->
	
	<div id="block" class="steps">
		
		<h5>total steps</h5>
		
		<h1><?php 
			
			// replace the URL with your own; see the readme for further instructions on creating the csv link in google drive
			
			$row = 1;
			if (($handle = fopen("https://docs.google.com/spreadsheet/pub?key=0Aj0HBW5Zdp3ddHVCOVUtdkNUcFMwelk3ODB5UUd1R2c&single=true&gid=1&range=A1&output=csv", "r")) !== FALSE) { while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) { $num = count($data); 
			echo " "," "," "; 
			$row++; for ($recordcount=0; 
			$recordcount < $num;
			$recordcount++) { echo $data[$recordcount] . " \n"; } } fclose($handle); } 
			
		?></h1>
		<p>steps</p>
				
	</div<



<!-- WEIGHT -->
	
	<div id="block" class="weight">
		
		<h5>current weight</h5>
		
		<h1><?php 
		
		
			
			// replace the URL with your own; see the readme for further instructions on creating the csv link in google drive
			
			$row = 1;
			if (($handle = fopen("https://docs.google.com/spreadsheet/pub?key=0Aj0HBW5Zdp3ddG5NbFJQVU04N0FZaXNPT1lmeDVlaGc&single=true&gid=1&range=A1&output=csv", "r")) !== FALSE) { while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) { $num = count($data); 
			echo " "," "," "; 
			$row++; for ($recordcount=0; 
			$recordcount < $num;
			$recordcount++) { echo $data[$recordcount] . " \n"; } } fclose($handle); }
			
		?></h1>
		<p>kg</p>
	
	</div>

	
	
<!-- HEART RATE -->

	<div id="block" class="heart">
		
		<h5>latest heart rate</h5>
		
		<h1><?php 
			
			// replace the URL with your own; see the readme for further instructions on creating the csv link in google drive
			
			$row = 1;
			if (($handle = fopen("https://docs.google.com/spreadsheet/pub?key=0Aj0HBW5Zdp3ddGFnMWMxdDV3OExRaTFydlMyWU5PaUE&single=true&gid=1&range=A1&output=csv", "r")) !== FALSE) { while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) { $num = count($data); 
			echo " "," "," "; 
			$row++; for ($recordcount=0; 
			$recordcount < $num;
			$recordcount++) { echo $data[$recordcount] . " \n"; } } fclose($handle); } 
			
		?></h1>
		<p>bpm</p>
	
	</div>

</body>

</html>