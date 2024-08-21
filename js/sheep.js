// Získáme odkaz na obrázek, který chceme animovat
const obrazek = document.getElementById("mujObrazek");

// Nastavíme počáteční styl obrázku (skrytý pod spodním okrajem)
obrazek.style.position = "fixed";
obrazek.style.bottom = "-256px"; // Výška obrázku (upravte podle potřeby)
obrazek.style.left = "50%";
obrazek.style.transform = "translateX(-50%)"; // Vycentrujeme obrázek

// Funkce pro animaci
function vysunObrazek() {
  let pozice = -200; // Počáteční pozice (skrytý)
  const interval = setInterval(() => {
    pozice += 1; // Rychlost vysouvání (upravte podle potřeby)
    obrazek.style.bottom = pozice + "px";
    if (pozice >= 400) { // Když je obrázek plně viditelný, zastavíme animaci
      clearInterval(interval);
    }
  }, 25); // Interval animace (upravte pro plynulost)
}

// Spustíme animaci při načtení stránky
window.addEventListener("load", vysunObrazek);

