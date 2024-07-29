// READ ME!!!
// This file contains the logic for the toggle effect for both the dashboard and the main page FOR SMALL SCREEN
// Changes made in this file will affect both the main page and the dashboard
// Exact files where navbar_logic.js is inserted:
// 1. welcome.blade.php
// 2. pages-nav.blade.php

let navbar_menu = document.querySelector('.navbar_menu');
let backgroundDashboard = document.querySelector('.background_menu')
let contentPanel = document.querySelector('.content-panel');
let close_x = document.querySelector('.close_x');




openSidebar();
closeSidebar();


function openSidebar() {
  navbar_menu.addEventListener('click', function () {
    backgroundDashboard.style.display = 'block';
    setTimeout(function () {
      contentPanel.style.transform = "translateX(0px)";

    }, 50)
  })
}


function closeSidebar() {

  close_x.addEventListener('click', function () {
    contentPanel.style.transform = "translateX(-110%)";

    setTimeout(function () {
      backgroundDashboard.style.display = 'none';

    }, 450)
  })


}