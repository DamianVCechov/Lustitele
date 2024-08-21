<!DOCTYPE html>
<html lang="cs" prefix="og: http://ogp.me/ns#">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<meta http-equiv="refresh" content="50">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> Naprosto nejúžasnější tabulky </title>
		<meta property="og:title" content="Luštitelé a Tabulky... a jste zas o krok chytřejší">
		<meta name="description" lang="cs" content="Naprosto nejúžasnější tabulky ve vesmíru a přilehlých dimennzích pro HadejSlova.cz na Twitteru">
		<meta property="og:description" content="Naprosto nejúžasnější tabulky ve vesmíru a přilehlých dimennzích pro HadejSlova.cz na Twitteru">
		<meta name="keywords" lang="cs" content="tabulky, twitter, srovnávání, hadejslova, hadejslova.cz, damianvcechov, nocniduha, Damian Čechov, Noční Duha">
		<meta property="cXenseParse:image" content="/icon/android-chrome-512x512.png">
		<link rel="preload" href="/icon/android-chrome-512x512.png" as="image">
		<meta property="og:type" content="website">
		<meta property="og:site_name" content="lustitele.chytrak.cz">
		<meta property="og:url" content="https://lustitele.chytrak.cz">
		<meta property="article:author" content="https://www.x.com/DamianVCechov">
		<link rel="previewimage" href="/icon/preview.png">
		<meta property="og:image" content="/icon/preview.png">
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:tittle" content="Luštitelé a Tabulky ... a jste zas o krok chytřejší">
		<meta name="twitter:site" content="@Lustitele">
		<meta name="twitter:creator" content="@Lustitele">
		<meta name="twitter:image" content="https://lustitele.chytrak.cz/icon/preview.png">
		<meta name="twitter:description" content="Naprosto nejúžasnější tabulky ve vesmíru a přilehlých dimenzích pro HadejSlova.cz na Twitteru">
		<meta name="twitter:site_name" content="Luštitelské Tabulky">
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
					<a class="ButtonSmall" href="./formular.php" target="_blank">»Formulář na zápis«</a>
					<a class="ButtonSmall" href="./php/obnoveni.php">Zadal/a ses a nevidíš se? STISKNI TU!</a>
					<a class="ButtonSmallNew" href="./sifry.php">Libri-Šifry</a>
					<a class="ButtonSmall" href="https://hadejslova.cz" target="_blank">Hra HadejSlova.cz</a>
					<a class="ButtonSmall" href="https://docs.google.com/spreadsheets/d/e/2PACX-1vSmOkJ8EwsJSzzNkeTEtSp-KVMNp0xl91Ed3q2rBEG3sV-3ITO20Nmu-67YUro2suStcMYr9YKWPO1L/pubhtml?gid=1572940961&single=false" target="_blank">Statistika hráčů</a>
					<a class="ButtonSmall" href="https://x.com/Lustitele" target="_blank">Luštitelé na Twitteru</a>
					<a class="ButtonSmall" href="./servis.php" target="_blank">Různé</a>
				</ul>
				
			</div>

	    		<div class="tabulky">
				<?php include "php/tabulky.php"; ?>
			</div>

			<p class="odpocet">Uzávěrka denní hry za <span id='time'></span></p>

 			<div id="Poznamka"> <?php include "php/poznamky.php"; ?> </div>

    		<div id="marco">
   			<div id="cielo"></div>
			<div id="luna"></div>
			<div id="gato"></div>
			<div id="muro"></div>
			<div id="edificios"></div>
		</div>

		</main>

		<footer class="footer"> 
					<p>Sestavili pro Vás</p>
					<p><a href="https://x.com/NocniDuha" alt="Vždy úžasná a úchvatná" target="_blank" >Noční Duha</a>
					 a
					<a href="https://x.com/DamianVCechov" alt="Démonský a věčně zmatený" target="_blank" >Damian V. Čechov</a></p>
					<p>&copy; <?php echo "2024 - " . date("Y");?></p>
<p><a href="mailto:damian@lustitele.chytrak.cz?subject=Ahoj Damiane, máš pěkné tabulky">E-mail</a></p>

		<!-- Počítadlo přístupů, jednoduché, každé načtení stránky
					<p>
					<a href="http://www.web4u.cz/cs/pocitadlo" target="_blank">
					<img src="http://www.web4u.cz/cs/pocitadlo/obrazek/name/Drban" alt="Pocitadlo Web4U.cz" />
					</a>
					</p>
		-->
		</footer>
	<audio id="backgroundAudio" controls autoplay>
		<source src="themes/cat.mp3" type="audio/mpeg">
		<source src="themes/cat.ogg" type="audio/ogg">
		<source src="themes/cat.wav" type="audio/wav">
		Váš prohlížeč nepodporuje přehrávání zvuku.
	</audio>

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
