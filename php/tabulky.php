<?php
	$hlavicka = FALSE;
	date_default_timezone_set("Europe/Prague");
	$osmnact = date_create("18:00:00")->format("H:i:s");
	$uzaverka = date_create("17:55:00")->format("H:i:s");
	$pocatek = date_create("2022-01-15");
	$tedden = date_create()->format("w");
	$tedcas  = date_create()->format("H:i:s");

#  Listy
$vitezna	=	"./CSV/vitezna.csv";
$prubezna	=	"./CSV/prubezna.csv";

if (($tedcas > $uzaverka) && ($tedcas < $osmnact )) {
	echo "<img title=\"Uzávěrka\" src=\"themes/uzavirka.png\">";
}
else
{
# Počet herních dnů
	if ($tedcas > $osmnact) {
		$pocatek = date_create("2022-01-14");
	}

	$diff    = date_diff(date_create(),$pocatek);
	
        echo "<table id=\"Vitezove\">\n\t<caption>" . $diff->format("%a") - 1 . ". Tabulka vítězů</caption>\n\t\t<thead>\n\t\t<tr>\n\t\t    <th>Metál</th>\n\t\t    <th>Nick</th>\n\t\t    <th>Čas</th>\n\t\t    <th>Řádky</th>\n\t\t    <th></th>\n\t\t    <th>Výsledek</th>\n\t\t</tr>\n\t\t</thead>\n\t\t<tbody>";

	if($file = fopen($vitezna, "r"))
	{
	$pocethracu = tisktabulky($file);
	}

	echo "\n\t\t<tfoot><tr><th class=\"footleft\"></th><th class=\"foot\">Hrálo: </th><th class=\"foot\">" . $pocethracu - 1 . "</th><th class=\"foot\"> hráčů</th><th class=\"foot\"></th><th class=\"footright\"></th></tr></tfoot>\n\t</tbody>\n</table>\n";

        echo "<table id=\"Prubezna\">\n\t<caption>" . $diff->format("%a") . ". Aktuální průběh</caption>\n\t\t<thead>\n\t\t<tr>\n\t\t    <th>Metál</th>\n\t\t    <th>Nick</th>\n\t\t    <th>Čas</th>\n\t\t    <th>Řádky</th>\n\t\t    <th></th>\n\t\t    <th>Výsledek</th>\n\t\t</tr>\n\t\t</thead>\n\t\t<tbody>";

	if($file = fopen($prubezna, "r"))
	{
	$pocethracu = tisktabulky($file);
	}

	echo "\n\t\t<tfoot><tr><th class=\"footleft\"></th><th class=\"foot\">Hraje: </th><th class=\"foot\">" . $pocethracu - 1 . "</th><th class=\"foot\"> hráčů</th><th class=\"foot\"></th><th class=\"footright\"></th></tr></tfoot>\n\t</tbody>\n</table>\n";
}

function tisktabulky($file) {
	$pocethracu = 0;
	$hlavicka = FALSE;
	  while (($data = fgetcsv($file, 300, ",")) !== FALSE) {
		$pocethracu++;
		if (in_array("PROHRA", $data)) { 
				echo "\n\t\t<tr class=\"Prohra\">";
		}
		elseif (in_array("🦄", $data)) {
				echo "\n\t\t<tr class=\"Unicorn\">";
		}
		elseif (in_array("❎", $data)) {
			if($hlavicka == FALSE) {
		     		echo "\n\t\t<th class=\"Hlavicka\">Hráči</th>\n\t\t<th class=\"Hlavicka\">kteří</th>\n\t\t<th class=\"Hlavicka\">nehráli</th>\n\t\t<th class=\"Hlavicka\">dle</th>\n\t\t<th></th>\n\t\t<th class=\"Hlavicka\">výzvy</th><tr class=\"Deravahlava\">";
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
	return $pocethracu;
}
?>
