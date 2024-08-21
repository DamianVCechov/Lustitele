// Získáme odkaz na obrázek, který chceme animovat
const obrazek = document.getElementById("mujObrazek");

// Nastavíme počáteční styl obrázku (skrytý pod spodním okrajem)
obrazek.style.position = "fixed";
obrazek.style.bottom = "-800px"; // Výška obrázku (upravte podle potřeby)
obrazek.style.left = "10%";
obrazek.style.transform = "translateX(-50%)"; // Vycentrujeme obrázek

// Funkce pro animaci
function vysunObrazek() {
  let pozice = -1000; // Počáteční pozice (skrytý)
  const interval = setInterval(() => {
    pozice += 1; // Rychlost vysouvání (upravte podle potřeby)
    obrazek.style.bottom = pozice + "px";
    if (pozice >= -200) { // Když je obrázek plně viditelný, zastavíme animaci
      clearInterval(interval);
    }
  }, 20); // Interval animace (upravte pro plynulost)
}

// Spustíme animaci při načtení stránky
window.addEventListener("load", vysunObrazek);

