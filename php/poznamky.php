<?php
	if (filesize("./CSV/notes.csv") <> 0)
	{ 
		if ($file = fopen("./CSV/notes.csv", "r"))
		{
			while (($data = fgetcsv($file, 300, ",")) !== FALSE)
			{
				$rows[] = $data;
			}
			fclose($file);
	
			$randomIndex = array_rand($rows); // Náhodný index
			$randomRadek = $rows[$randomIndex];

			echo "\n<p id=\"citat\">" . $randomRadek[0] . "</p>\n";
			echo "\n<p id=\"autor\">" . $randomRadek[1] . "</p>\n";
		}
		else
		{
			echo "Poznámky se nenačetly... <a href=\"./php/obnovpoznamky.php\">Pro nápravu stiskni ZDE a vyčkej</a>";
		}
	}
	else
	{
		echo "Poznámky se nenačetly... <a href=\"./php/obnovpoznamky.php\">Pro nápravu stiskni ZDE a vyčkej</a>";
	}

?>
