<!DOCTYPE html>
<html lang="cs">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> Naprosto nejúžasnější tabulky </title>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quintessential&family=Square+Peg&display=swap">
		<link href="https://fonts.googleapis.com/css2?family=Parisienne&family=Quintessential&family=Square+Peg&display=swap" rel="stylesheet">		
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Comfortaa">
		<link rel="apple-touch-icon" sizes="180x180" href="/icon/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/icon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/icon/favicon-16x16.png">
		<link rel="manifest" href="/icon/site.webmanifest">
		<link rel="mask-icon" href="/icon/safari-pinned-tab.svg" color="#5bbad5">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="msapplication-TileImage" content="/icon/mstile-144x144.png">
		<meta name="theme-color" content="#00000000">
		<link href="css/main.css" rel="stylesheet">
		<link href="css/resp.css" rel="stylesheet">
		<link href="css/cat.css" rel="stylesheet">
	</head>

	<body class="content">
		<header id="header">
			<h1>Nejlepší tabulky ve vesmíru</h1>
			<h2>a přilehlých dimenzích</h2>
		</header>

		<main class="main">

			<div id="Menu"> <p id="Button">» Zápis a ostatní «</p>
			     <ul id="Odkazy">
			       <a class="ButtonSmall" href="https://forms.gle/nsDMh1ErDsF9XVRw9" target="_blank">»Formulář na zápis«</a>
			       <a class="ButtonSmall" href="https://docs.google.com/spreadsheets/d/e/2PACX-1vToV34_gwHD3PD_sHW_4dbX6kP7RhWDNa4hpImAk_hzDmWkCiRj_RIV_-Mmd9bzkD8pgn_SksY827i-/pubhtml?gid=1777722181&single=true" target="_blank">Kompletní archiv našich her</a>
			       <a class="ButtonSmall" href="https://hadejslova.cz" target="_blank">Odkaz na samotnou hru</a>
			     </ul>
			</div>

	    		<div class="tabulky">
				<?php include "php/tabulky.php"; ?>
			</div>

			<p class="odpocet">Uzávěrka denní hry za <span id='time'></span></p>

			<div id="Poznamka"> <?php include "php/note.php"; ?> </div>

    		<div id="marco">
   			<div id="cielo"></div>
			<div id="luna"></div>
			<div id="gato"></div>
			<div id="muro"></div>
			<div id="edificios"></div>
		</div>

		</main>

		<footer class="footer"> <p>Sestavili pro Vás</p>
					<p><a href="https://x.com/NocniDuha" alt="Vždy úžasná a úchvatná" target="_blank" >Noční Duha</a>
					 a
					<a href="https://x.com/DamianVCechov" alt="Démonský a věčně zmatený" target="_blank" >Damian V. Čechov</a></p>
					<p>&copy; <?php echo date("Y");?></p>
<p><a href="mailto:damian@lustitele.chytrak.cz?subject=Ahoj Damiane, máš pěkné tabulky">E-mail</a></p>

		<!-- Počítadlo přístupů, jednoduché, každé načtení stránky
					<p>
					<a href="http://www.web4u.cz/cs/pocitadlo" target="_blank">
					<img src="http://www.web4u.cz/cs/pocitadlo/obrazek/name/Drban" alt="Pocitadlo Web4U.cz" />
					</a>
					</p>
		-->
		</footer>
	<script src="js/countdown.js"></script>
	<script src="js/menu.js"></script>
	<?PHP 
		$tedden = date_create()->format("w");
		$tedcas = date_create()->format("H:i:s");
		$osmnact = date_create("18:00:00")->format("H:i:s");
		if ((($tedden == 3) && ($tedcas > $osmnact)) || (($tedden == 4) && ($tedcas < $osmnact))) {
			echo "<script src=\"https://cdn.jsdelivr.net/npm/@simondmc/popup-js@1.4.3/popup.min.js\"></script>";
			echo "<script src=\"js/streda.js\"></script>";
		}
	?>
	</body>
</html>
