// deklarace promennych

var menu = document.getElementById("Menu");
var odkazy = document.getElementById("Odkazy");
var button = document.getElementById("Button");
var tabulky = document.getElementsByTagName("table");
var header = document.getElementById("header");

// Dynamicke nastaveni vlastnosti top pro rozklikavaci menu
var height = header.offsetHeight + menu.offsetHeight + 30 + "px";
odkazy.style.setProperty("top",height);

// Zmena viditelnosti menu
menu.addEventListener("click", Show);
tabulky.addEventListener("mouseover", Hide);
tabulky.addEventListener("click", Hide);

function Show () {
 if (odkazy.style.getPropertyValue("display") == "none") {
  odkazy.style.setProperty("display", "flex");
  button.style.setProperty("color","black");
  button.style.setProperty("background","#f4ddba");
} else {
  odkazy.style.setProperty("display", "none");
  button.style.setProperty("color","#f4ddba");
  button.style.setProperty("background","black");
      }
}

function Hide () {
  if (odkazy.style.getPropertyValue("display") == "flex") {
  odkazy.style.setProperty("display", "none");
  button.style.setProperty("color","#f4ddba");
  button.style.setProperty("background","black");
  }
}
