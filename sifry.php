<!DOCTYPE html>
<html lang="cs" >
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Libri Šifry </title>
  <link rel="stylesheet" href="css/sifry-main.css">
  <link rel="stylesheet" href="css/sifry-resp.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Square+Peg&display=swap" rel="stylesheet">
  
</head>
<body>
 <h1> Libri Šifry </h1>
  <p> Kliknutím na kartičku zobrazíte správnou odpověď. Nebo zase schováte. :-)</p>
  <div id="dil"> </div>
  <div id="slideshow">
       <a title="Předchozí" id="prev" onclick="plusSlides(-1)">&#10094;</a>
      
       <div class="fade" id="karta">
            <div id="tema"></div>
            <div id="otazka"></div>
            <div id="odpoved"></div>
       </div>
       
       <a title="Následující" id="next" onclick="plusSlides(1)">&#10095;</a>  
</div>

<footer id="footer"> 	<p> Hádanky jsou použity s laskavým svolením kamarádky kamarádky naší kamarádky
			<a href="https://x.com/PatricieBohony" target="_blank" >Páti</a></p> 
			<p> Frontend stránek:
			<a href="https://x.com/NocniDuha"target="_blank" >Noční Duha</a></p> 
                        <p> Backend stránek:
                        <a href="https://x.com/DamianVCechov" target="_blank" >Damian V. Čechov</a></p>
                        <p>&copy; <?php echo "2024 - " . date("Y");?></p>
</footer>

</body>
<script src="js/sifry.php"></script>
</html>
