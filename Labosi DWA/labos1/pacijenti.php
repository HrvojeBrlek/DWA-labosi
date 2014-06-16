<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>Dinamičke web aplikacije</title>
  <link rel="stylesheet" href="stil.css"> 
</head>
<body>
	<header class="site-header">
	</header>
	
 	<div class="row">
		<div class="novilogo column column-7">
				<h1 class="logo"></h1>
				
		</div>
		<div class=" odjava column column-5">
				<div class="column column 2">
					<?php
						$imeKorisnik = $_GET['username'];
						echo '<p> Korisnik: ' . $imeKorisnik . '</p>';
					?>
				</div>
				<div class="column column 2">
					<input type="submit" value="Odjavite se"/>
				</div>
		</div>
		
		<section class="gray-boxes row">
			<nav class="izbornik column column-3">
				<li><a href="login.php">Pocetna</a></li>
				<li><a href="pacijenti.php">Pacijenti</a></li>
				<li><a href="#">Meni3</a></li>
				<li><a href="#">Meni4</a></li>
				<li><a href="#">Meni5</a></li>
				<li><a href="#">Meni6</a></li>
			</nav>
			
			<!-- tablica sa pacijentima -->
			<div class="column column-8">
				<table class="table">
					<thead>
						<th>Ime</th>
						<th>Prezime</th> 
						<th>Spol</th>
						<th>Datum rođenja</th>
						<th>Mobitel</th>
						<th>Adresa</th>
						<th>Mjesto</th>
						
					</thead>
					<tr onmouseover='this.style.backgroundColor="grey";' onmouseout='this.style.backgroundColor="white";'>
						<td>Štefica</td>
						<td>Ostojić</td> 
						<td>Ž</td>
						<td>17.3.1937</td>
						<td>091/7121688</td>
						<td>Redovka 9</td>
						<td>Zagreb</td>
					</tr>
					<tr onmouseover='this.style.backgroundColor="grey";' onmouseout='this.style.backgroundColor="white";'>
						<td>Ivan</td>
						<td>Kušan</td> 
						<td>M</td>
						<td>19.7.1979</td>
						<td>098/1667148</td>
						<td>Marinovečka 12</td>
						<td>Zagreb</td>
					</tr>
					<tr onmouseover='this.style.backgroundColor="grey";' onmouseout='this.style.backgroundColor="white";'>
						<td>Hrvoje</td>
						<td>Radić</td> 
						<td>M</td>
						<td>6.6.1944</td>
						<td>098/7317883</td>
						<td>Dore Pejačević 28</td>
						<td>Zagreb</td>
					</tr>
					<tr onmouseover='this.style.backgroundColor="grey";' onmouseout='this.style.backgroundColor="white";'>
						<td>Vjeran</td>
						<td>Delić</td> 
						<td>M</td>
						<td>2.3.1978</td>
						<td>022/4672651</td>
						<td>Banovski Put 11</td>
						<td>Zagreb</td>
					</tr>
					<tr onmouseover='this.style.backgroundColor="grey";' onmouseout='this.style.backgroundColor="white";'>
						<td>Filip</td>
						<td>Pavlović</td> 
						<td>M</td>
						<td>28.3.1939</td>
						<td>092/6058667</td>
						<td>Sitnice 24</td>
						<td>Zagreb</td>
					</tr>
				
				</table>
				<br/>
			
			
			
			</div>
			
			
</body>
</html>