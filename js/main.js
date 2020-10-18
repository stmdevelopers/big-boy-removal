// Required Scripts
AOS.init({
  startEvent: 'DOMContentLoaded',
});

// Toggle Responsive Navigation
const responsiveNav = document.getElementById("responsive-nav");
window.onload = () => {
  document.getElementById("btn-responsive-nav").addEventListener("click", openResponsiveNav);
  document.getElementById("btn-close-responsive-nav").addEventListener("click", closeResponsiveNav);
}
function openResponsiveNav(e) {
  responsiveNav.classList.add("open");
}
function closeResponsiveNav(e) {
  responsiveNav.classList.remove("open");
}