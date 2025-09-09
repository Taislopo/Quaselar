const hamburguer = document.querySelector(".hamburguer");
const navbar = document.querySelector(".navbar");

hamburguer.addEventListener("click", () => navbar.classList.toggle("active"));