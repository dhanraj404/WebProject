// JavaScript Document
const left = document.querySelector(".left");
const right = document.querySelector(".right");
const balance = document.querySelector(".balance");

left.addEventListener("mouseenter", () => {
  balance.classList.add("hover-left");
});

left.addEventListener("mouseleave", () => {
  balance.classList.remove("hover-left");
});

right.addEventListener("mouseenter", () => {
  balance.classList.add("hover-right");
});

right.addEventListener("mouseleave", () => {
  balance.classList.remove("hover-right");
});