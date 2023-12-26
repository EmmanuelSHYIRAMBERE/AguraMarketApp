"use strict";

/**
 * add event on element
 */

const addEventOnElem = function (elem, type, callback) {
    if (elem.length > 1) {
        for (let i = 0; i < elem.length; i++) {
            elem[i].addEventListener(type, callback);
        }
    } else {
        elem.addEventListener(type, callback);
    }
};

/**
 * tooggle navbar
 */

const navbar = document.querySelector("[data-navbar]");
const navbarLinks = document.querySelectorAll("[data-nav-link]");
const navTogger = document.querySelector("[data-nav-toggler]");

const togglerNavbar = function () {
    navbar.classList.toggle("active");
    navTogger.classList.toggle("active");
};

addEventOnElem(navTogger, "click", togglerNavbar);

const closeNavbar = function () {
    navbar.classList.remove("active");
    navTogger.classList.remove("active");
};

addEventOnElem(navbarLinks, "click", closeNavbar);

const header = document.querySelector("[data-header]");

window.addEventListener("scroll", function () {
    if (window.scrollY > 100) {
        header.classList.add("active");
    } else {
        header.classList.remove("active");
    }
});
