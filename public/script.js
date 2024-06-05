document.getElementById("openMenu").addEventListener("click", function () {
  document.getElementById("sidebar").classList.add("active");
  document.body.style.overflow = "hidden"; // Prevent background scrolling
});

document.getElementById("closeMenu").addEventListener("click", function () {
  document.getElementById("sidebar").classList.remove("active");
  document.body.style.overflow = ""; // Allow background scrolling
});
