const cuadrodesple = document.getElementById ("cuadrodesple");

const Nocuadrodesple = document.querySelector("nav > ul > li:last-child");

Nocuadrodesple.addEventListener("click", () =>{
cuadrodesple.classList.toggle("active")});