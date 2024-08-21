<?php

	$vitezna	=	1479046356;
	$prubezna	=	276973666;

	$pred	=	"https://docs.google.com/spreadsheets/d/e/2PACX-1vSmOkJ8EwsJSzzNkeTEtSp-KVMNp0xl91Ed3q2rBEG3sV-3ITO20Nmu-67YUro2suStcMYr9YKWPO1L/pub?gid=";
	$po	=	"&single=true&output=csv";

	date_default_timezone_set("Europe/Prague");
	$osmnact = date_create("18:04:00")->format("H:i:s");
	$uzaverka = date_create("17:30:00")->format("H:i:s");
	$tedcas  = date_create()->format("H:i:s");

	if (($tedcas < $uzaverka) || ($tedcas > $osmnact ))
	 {
		file_put_contents('../CSV/vitezna.csv', file_get_contents($pred.$vitezna.$po));
		file_put_contents('../CSV/prubezna.csv', file_get_contents($pred.$prubezna.$po));
		echo "Povedlo se!";
	 }
	else
	 {
		echo "Počkej cca na 18:05";
	 }
echo "<!DOCTYPE html><html lang=\"cs\"><head><meta http-equiv=\"refresh\" content=\"1;url=../index.php\"></head><body></body></html>";

?>


