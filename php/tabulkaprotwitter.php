<?php

	$hlavicka = FALSE;
	date_default_timezone_set("Europe/Prague");
	$osmnact = date_create("18:00:00")->format("H:i:s");
	$pocatek = date_create("2022-01-15");
	$tedden = date_create()->format("w");
	$tedcas  = date_create()->format("H:i:s");

#  Listy
$vitezna		=	25546860;

/*
$StredaVitezToCSV	=	25546860;

	if ((($tedden == 3) && ($tedcas > $osmnact)) || (($tedden == 4) && ($tedcas < $osmnact))) {
		$prubezna = $StredaAktualToCSV;
		$vitezna  = $VitezToCSV;
	}
	elseif ((($tedden == 4) && ($tedcas > $osmnact)) || (($tedden == 5) && ($tedcas < $osmnact))) {
		$prubezna = $AktualToCSV;
		$vitezna  = $StredaVitezToCSV;
	}
	else {
		$vitezna  = $VitezToCSV;
		$prubezna = $AktualToCSV;
	}
*/

# Počet herních dnů
	if ($tedcas > $osmnact) {
		$pocatek = date_create("2022-01-14");
	}

	$diff    = date_diff(date_create(),$pocatek);
	
        echo "<table id=\"Vitezove\">\n\t<caption>" . $diff->format("%a") - 1 . ". Tabulka vítězů</caption>\n\t\t<thead>\n\t\t<tr>\n\t\t    <th>Metál</th>\n\t\t    <th>Nick</th>\n\t\t    <th>Čas</th>\n\t\t    <th>Řádky</th>\n\t\t    <th></th>\n\t\t    <th></th>\n\t\t    <th>Výsledek</th>\n\t\t</tr>\n\t\t</thead>\n\t\t<tbody>";

	$file = fopen("https://docs.google.com/spreadsheets/d/e/2PACX-1vToV34_gwHD3PD_sHW_4dbX6kP7RhWDNa4hpImAk_hzDmWkCiRj_RIV_-Mmd9bzkD8pgn_SksY827i-/pub?gid=" . $vitezna . "&single=true&output=csv", "r");

	tisktabulky($file);

	echo "\n\t</tbody>\n</table>\n";

function tisktabulky($file) {
	$hlavicka = FALSE;
	  while (($data = fgetcsv($file, 1000, ",")) !== FALSE) {
		if (in_array("PROHRA", $data)) { 
				echo "\n\t\t<tr class=\"Prohra\">";
		}
		elseif (in_array("❎", $data)) {
			if($hlavicka == FALSE) {
		     		echo "\n\t\t<th class=\"Hlavicka\">Hráči</th>\n\t\t<th class=\"Hlavicka\">kteří</th>\n\t\t<th class=\"Hlavicka\">nehráli</th>\n\t\t<th class=\"Hlavicka\">dle</th>\n\t\t<th></th>\n\t\t<th></th>\n\t\t<th class=\"Hlavicka\">výzvy</th><tr class=\"Deravahlava\">";
				$hlavicka = TRUE;
			}
		if (in_array("🅱️🥇", $data)) {
				echo "\n\t\t<tr class=\"Zlato\">";
		}
		elseif (in_array("🅱️🥈", $data)) {
				echo "\n\t\t<tr class=\"Stribro\">";
		}
		elseif (in_array("🅱️🥉", $data)) {
				echo "\n\t\t<tr class=\"Bronz\">";
		}
		elseif (in_array("🅱️🥔", $data)) {
				echo "\n\t\t<tr class=\"Brambora\">";
		}
		elseif (in_array("🅱️🏮", $data)) {
				echo "\n\t\t<tr class=\"Lucerna\">";
		}}
		elseif (in_array("🥇", $data)) {
				echo "\n\t\t<tr class=\"Zlato\">";
		}
		elseif (in_array("🥈", $data)) {
				echo "\n\t\t<tr class=\"Stribro\">";
		}
		elseif (in_array("🥉", $data)) {
				echo "\n\t\t<tr class=\"Bronz\">";
		}
		elseif (in_array("🥔", $data)) {
				echo "\n\t\t<tr class=\"Brambora\">";
		}
		elseif (in_array("🏮", $data)) {
				echo "\n\t\t<tr class=\"Lucerna\">";
		}
		elseif (in_array("remove", $data)) {
			echo "\n\t\t<tr class=\"Remove\">";
		}
		elseif (in_array("--:--", $data)) {
			echo "\n\t\t<tr class=\"BezCasu\">";
		}
		else { 
			echo "\n\t\t<tr>";
		}
		foreach ($data as $cell) {
		        echo "\n\t\t\t<td>" . $cell . "</td>";
		}
		echo "\n\t\t</tr>";
	}
	fclose($file);
}
?>
