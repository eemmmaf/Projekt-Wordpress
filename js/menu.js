"use strict";

//Variabler
let hamburger = document.getElementById("hamburger-icon");
let navUl = document.getElementById("nav-ul");

window.onload = init;

function init() {

  //Funktion för hamburger-menyn
  hamburger.addEventListener("click", () => {
    navUl.classList.toggle("show");
  })
}