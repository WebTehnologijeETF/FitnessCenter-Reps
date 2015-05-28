<!DOCTYPE html>
<HTML>

<head>
<link href='http://fonts.googleapis.com/css?family=Orbitron:500' rel='stylesheet' type='text/css'>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<TITLE>Fitness Center Reps</TITLE>
<link rel="stylesheet" type="text/css" href="stil.css">
</head>
<BODY>
	<div id="zaglavlje">
		
		<img src="Repslogo2.jpg" alt="Fitness Center Reps logo" id="logo">
		Reps
	</div>
	
	
		<ul id="navigacija">
			<li><a href="index.html">Home</a></li>
			
			<li onmouseover="otvori('m1')" onmouseout="zatvori('m1');"><a onclick="ucitajStranicu('Onama.html')" >O&nbsp;nama</a>
				<div id="m1" onmouseout="zatvori('m1')">
					<a onclick="ucitajStranicu('Galerija.html')">Galerija</a>
				</div>	
			</li>
			<li><a onclick="ucitajStranicu('Ponuda.html')">Ponuda</a></li>
			<li onmouseover="otvori('m2')" onmouseout="zatvori('m2');"><a onclick="ucitajStranicu('Savjeti.html')">Savjeti</a>
			<div id="m2" onmouseout="zatvori('m2')">
					<a href="#">Ishrana</a>
					<a href="#">Trening</a>
					<a href="#">Suplementi</a>
				</div>	
			</li>
			<li><a onclick="ucitajStranicu('Linkovi.html')">Linkovi</a></li>
			<li><a onclick="ucitajStranicu('Kontakt.html')">Kontakt</a></li>
		</ul>	
		
		<div id="glavni_dio">
		<h3>Novosti</h3>
		
		<div class="sadrzaj">
		
		<?php include 'testmysql.php';?>
		
		</div>
		</div>
	
	<div id="podnozje"><p>Made in China...Err made by Emir Hurem</p></div>
	<script src="skripta.js"></script>
	<script src="ucitaj_stranicu.js"></script>
</BODY>
</HTML>
