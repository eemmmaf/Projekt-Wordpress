/*
 * @Author: Emma Forslund - emfo2102 
 * @Date: 2022-06-16 13:44:52 
 * @Last Modified by:   Emma Forslund - emfo2102 
 * @Last Modified time: 2022-06-16 13:44:52 
 */

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