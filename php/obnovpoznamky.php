<?php

$poznamky	=	158379616;

$pred	=	"https://docs.google.com/spreadsheets/d/e/2PACX-1vSmOkJ8EwsJSzzNkeTEtSp-KVMNp0xl91Ed3q2rBEG3sV-3ITO20Nmu-67YUro2suStcMYr9YKWPO1L/pub?gid=";
$po	=	"&single=true&output=csv";

		file_put_contents('../CSV/notes.csv', file_get_contents($pred.$poznamky.$po));

echo "<!DOCTYPE html><html lang=\"cs\"><head><meta http-equiv=\"refresh\" content=\"1;url=../index.php\"></head><body></body></html>";
?>


