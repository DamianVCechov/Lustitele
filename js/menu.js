// zmena viditelnosti polozek v menu

var menu = document.getElementById("Menu");
var odkazy = document.getElementById("Odkazy");

menu.addEventListener("click", Show);

function Show () {
 if (odkazy.style.getPropertyValue("display") == "none") {
  odkazy.style.setProperty("display", "block")} 
 else {
   odkazy.style.setProperty("display", "none")}
}
