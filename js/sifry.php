const hadanky = [ <?PHP require 'sifry.db'; ?> ];

let dil = document.getElementById("dil");
let tema = document.getElementById("tema");
let otazka = document.getElementById("otazka");
let odpoved = document.getElementById("odpoved");
let karta = document.getElementById("karta");
let img = document.getElementById("img");
Add();

// Carousel
let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {

  if (n > hadanky.length) {slideIndex = 1;}
  if (n < 1) {slideIndex = hadanky.length;}
  dil.innerText = hadanky[slideIndex-1].dil;
  tema.innerText = hadanky[slideIndex-1].tema;
  otazka.innerHTML = hadanky[slideIndex-1].otazka;
  odpoved.innerText = hadanky[slideIndex-1].odpoved;

  odpoved.style.display="none";
  
  if (hadanky[slideIndex-1].img !== "") {otazka.innerHTML = otazka.innerHTML + "<img id='img' src='"+hadanky[slideIndex-1].img+"'>"}
}

function Add() {
  karta.addEventListener('click', function () { 
    if (odpoved.style.display == "none") {
        odpoved.style.display = "block"} 
    else {
          odpoved.style.display="none"}
         });
       }
