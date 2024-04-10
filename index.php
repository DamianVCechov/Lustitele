<html lang="cs">
   <head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
	<link href="icon/fav.ico" rel="shortcut icon" type="image/x-icon">
   </head>

   <header class="header">
		<h2>Nejlepší tabulky ve vesmíru</h2>
		<h4>a přilehlých dimenzích</h4>
   </header>
   <body>
	<p>Tabulka vítězů</p>
	<table>
		<tr>
		    <th>Den</th>
   		    <th>Nick</th>
		    <th>Čas</th>
		    <th>Řádky</th>
   		    <th>3</th>
		    <th>Výsledek</th>
		</tr>

	<?php include 'php/vitezna.php'; ?>

	</table>
<br>
<br>
	<p>Průběžná tabulka</p>	
	<table>
		<tr>
		    <th>Den</th>
   		    <th>Nick</th>
		    <th>Čas</th>
		    <th>Řádky</th>
   		    <th>3</th>
		    <th>Výsledek</th>
		</tr>

	<?php include 'php/prubezna.php'; ?>

	</table>
   </body>
</html>
