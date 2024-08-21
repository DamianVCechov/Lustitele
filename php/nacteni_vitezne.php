<?php

$vitezna	=	1479046356;

$pred	=	"https://docs.google.com/spreadsheets/d/e/2PACX-1vSmOkJ8EwsJSzzNkeTEtSp-KVMNp0xl91Ed3q2rBEG3sV-3ITO20Nmu-67YUro2suStcMYr9YKWPO1L/pub?gid=";
$po	=	"&single=true&output=csv";

file_put_contents('../CSV/vitezna.csv', file_get_contents($pred.$vitezna.$po));
unlink('../CSV/prubezna.csv');
$fp = fopen('../CSV/prubezna.csv','wb');
fwrite($fp,"remove,,,,,");
fclose($fp);

echo "Vitezna tabulka nactena";

?>
