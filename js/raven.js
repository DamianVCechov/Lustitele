const raven = document.getElementById('raven');

function randomFly() {
  const randomTop = (window.innerHeight - 128);
  const randomLeft = (window.innerWidth - 128);
  const randomDelay = 10000; // Náhodná prodleva mezi lety (0-10 sekund)

  // Zrcadlení při odrazu
  if (randomLeft + 128 >= window.innerWidth && raven.style.transform !== 'scaleX(1)') {
    raven.style.transform = 'scaleX(1)'; // Zrcadlení vertikálně
  } else if (randomTop + 128 <= window.innerHeight && raven.style.transform !== 'scaleX(-1)') {
    raven.style.transform = 'scaleX(-1)'; // Zpět na normální směr
  }

  raven.style.top = randomTop + 'px';
  raven.style.left = randomLeft + 'px';

  setTimeout(randomFly, randomDelay); // Spustí další let po náhodné prodlevě

  ravenSound.currentTime = 0; // Reset zvuku na začátek
  ravenSound.play(); // Přehrání zvuku
}

randomFly(); // První let

