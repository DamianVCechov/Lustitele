<?php
	$list = 38094985;
	$pred = "https://docs.google.com/spreadsheets/d/e/2PACX-1vSmOkJ8EwsJSzzNkeTEtSp-KVMNp0xl91Ed3q2rBEG3sV-3ITO20Nmu-67YUro2suStcMYr9YKWPO1L/pub?gid=";
	$po   = "&single=true&output=csv";

if(file_put_contents('../CSV/texttweetu.csv', file_get_contents($pred.$list.$po)))
{
echo "Text Tweetu stažen";
}
else
{
echo "CHYBA!!!";
}

?>
