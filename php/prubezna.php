<?php
	if (($handle = fopen("https://docs.google.com/spreadsheets/d/e/2PACX-1vToV34_gwHD3PD_sHW_4dbX6kP7RhWDNa4hpImAk_hzDmWkCiRj_RIV_-Mmd9bzkD8pgn_SksY827i-/pub?gid=276973666&single=true&output=csv", "r")) !== FALSE) {
	  while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $num = count($data);
	    $row = $num / 6;
	    $cell = 0;
	    while ($cell < $num) {
	      for ($radky=0; $radky < $row; $radky++) {
		echo "<tr>";
		for ($bunky=0; $bunky < 6; $bunky++) {
		  echo "<td>" . $data[$cell] . "</td>";
		  $cell++;
		}
		echo "</tr>";
	      }
	    }
	  }
	fclose($handle);
	}
?>
