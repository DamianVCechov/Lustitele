<?php
	$note = 253199222;
	$file = fopen("https://docs.google.com/spreadsheets/d/e/2PACX-1vToV34_gwHD3PD_sHW_4dbX6kP7RhWDNa4hpImAk_hzDmWkCiRj_RIV_-Mmd9bzkD8pgn_SksY827i-/pub?gid=" . $note . "&single=true&output=csv", "r");

	while (($data = fgetcsv($file, 200, ",")) !== FALSE) {
		echo "\n<p id=\"citat\">" . $data[0] . "</p>\n";
		echo "\n<p id=\"autor\">" . $data[1] . "</p>\n";
		
	}
	fclose($file);
?>
