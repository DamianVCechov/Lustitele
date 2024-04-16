<?php
	date_default_timezone_set("Europe/Prague");
	$osmnact = date_create("18:00:00")->format("H:i:s");
	$pocatek = date_create("2022-01-15");
	$tedcas  = date_create()->format("H:i:s");

	if ($tedcas > $osmnact) {
		$pocatek = date_create("2022-01-14");
	}

	$diff    = date_diff(date_create(),$pocatek);
	
        echo "<table id=\"Vitezove\">\n\t<caption>" . $diff->format("%a") - 1 . ". Tabulka vítězů</caption>\n\t\t<thead>\n\t\t<tr>\n\t\t    <th>Metál</th>\n\t\t    <th>Nick</th>\n\t\t    <th>Čas</th>\n\t\t    <th>Řádky</th>\n\t\t    <th></th>\n\t\t    <th>Výsledek</th>\n\t\t</tr>\n\t\t</thead>\n\t\t<tbody>";

	$file = fopen("https://docs.google.com/spreadsheets/d/e/2PACX-1vToV34_gwHD3PD_sHW_4dbX6kP7RhWDNa4hpImAk_hzDmWkCiRj_RIV_-Mmd9bzkD8pgn_SksY827i-/pub?gid=1479046356&single=true&output=csv", "r");

	tisktabulky($file);

	echo "\n\t</tbody>\n</table>\n";

        echo "<table id=\"Prubezna\">\n\t<caption>" . $diff->format("%a") . ". Aktuální průběh</caption>\n\t\t<thead>\n\t\t<tr>\n\t\t    <th>Metál</th>\n\t\t    <th>Nick</th>\n\t\t    <th>Čas</th>\n\t\t    <th>Řádky</th>\n\t\t    <th></th>\n\t\t    <th>Výsledek</th>\n\t\t</tr>\n\t\t</thead>\n\t\t<tbody>";

	$file = fopen("https://docs.google.com/spreadsheets/d/e/2PACX-1vToV34_gwHD3PD_sHW_4dbX6kP7RhWDNa4hpImAk_hzDmWkCiRj_RIV_-Mmd9bzkD8pgn_SksY827i-/pub?gid=276973666&single=true&output=csv", "r");

	tisktabulky($file);

	echo "\n\t</tbody>\n</table>\n";

function tisktabulky($file) {
	  while (($data = fgetcsv($file, 1000, ",")) !== FALSE) {

		if (in_array("PROHRA", $data)) { 
			if (in_array("DamianVCechov", $data)) {
				echo "\n\t\t<tr class=\"Prohra Authors\">"; 
			}
			elseif (in_array("NocniDuha", $data)) {
				echo "\n\t\t<tr class=\"Prohra Authors\">"; 
			}
			else {
				echo "\n\t\t<tr class=\"Prohra\">";
			}
		}
		elseif (in_array("🥇", $data)) {
			if (in_array("DamianVCechov", $data)) {
				echo "\n\t\t<tr class=\"Zlato Authors\">"; 
			}
			elseif (in_array("NocniDuha", $data)) {
				echo "\n\t\t<tr class=\"Zlato Authors\">"; 
			}
			else {
				echo "\n\t\t<tr class=\"Zlato\">";
			}
		}
		elseif (in_array("🥈", $data)) {
			if (in_array("DamianVCechov", $data)) {
				echo "\n\t\t<tr class=\"Stribro Authors\">"; 
			}
			elseif (in_array("NocniDuha", $data)) {
				echo "\n\t\t<tr class=\"Stribro Authors\">"; 
			}
			else {
				echo "\n\t\t<tr class=\"Stribro\">";
			}
		}
		elseif (in_array("🥉", $data)) {
			if (in_array("DamianVCechov", $data)) {
				echo "\n\t\t<tr class=\"Bronz Authors\">"; 
			}
			elseif (in_array("NocniDuha", $data)) {
				echo "\n\t\t<tr class=\"Bronz Authors\">"; 
			}
			else {
				echo "\n\t\t<tr class=\"Bronz\">";
			}
		}
		elseif (in_array("🥔", $data)) {
			if (in_array("DamianVCechov", $data)) {
				echo "\n\t\t<tr class=\"Brambora Authors\">"; 
			}
			elseif (in_array("NocniDuha", $data)) {
				echo "\n\t\t<tr class=\"Brambora Authors\">"; 
			}
			else {
				echo "\n\t\t<tr class=\"Brambora\">";
			}
		}
		elseif (in_array("🏮", $data)) {
			if (in_array("DamianVCechov", $data)) {
				echo "\n\t\t<tr class=\"Lucerna Authors\">"; 
			}
			elseif (in_array("NocniDuha", $data)) {
				echo "\n\t\t<tr class=\"Lucerna Authors\">"; 
			}
			else {
				echo "\n\t\t<tr class=\"Lucerna\">";
			}
		}
		elseif (in_array("NocniDuha", $data)) {
			echo "\n\t\t<tr class=\"Authors\">";
		}
		elseif (in_array("DamianVCechov", $data)) {
			echo "\n\t\t<tr class=\"Authors\">";
		}
		else { 
			echo "\n\t\t<tr>";
		}
		foreach ($data as $cell) {
		        echo "\n\t\t\t<td>" . htmlspecialchars($cell) . "</td>";
		}
		echo "\n\t\t</tr>";
	}
	fclose($file);
}
?>
