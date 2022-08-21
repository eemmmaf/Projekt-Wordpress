/*
 * @Author: Emma Forslund - emfo2102 
 * @Date: 2022-06-16 13:44:52 
 * @Last Modified by: Emma Forslund - emfo2102
 * @Last Modified time: 2022-08-22 01:14:02
 */

"use strict";

//Variabler
let hamburger = document.getElementById("hamburger-icon");
let navUl = document.getElementById("nav-ul");

window.onload = init;

function init() {

  //Funktion för hamburger-menyn. 
  hamburger.addEventListener("click", () => {
    //Visar menyn vid klick på hamburger-ikonen
    navUl.classList.toggle("show");
    //Gömmer bokningsformuläret på boka-restaurang-sidan
    let datepickerEl = document.getElementsByClassName("ui-datepicker")
    for (let i = 0; i < datepickerEl.length; i++) {
      datepickerEl[i].style.display = "none";
    }
  })
}