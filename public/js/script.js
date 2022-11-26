// Toggler
const buttonNav = document.querySelector("#button-nav");
const nav = document.querySelector("#nav");

buttonNav.addEventListener("click", () => {
    nav.classList.toggle("hidden");
});
