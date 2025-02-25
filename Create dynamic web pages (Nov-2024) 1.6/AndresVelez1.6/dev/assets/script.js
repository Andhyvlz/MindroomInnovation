function bigNav(x) {
  x.style.fontSize  = "1.8rem";
}
function normalNav(x) {
  x.style.fontSize  = "1.3em";
}
function closeModal() {
  var modal = document.getElementById("modal");
  modal.classList.add("hidden");
}
function openModal(event) {
  var modal = document.getElementById("modal");
  modal.style.backgroundImage = "url(" + event.src + ")";
  modal.classList.remove("hidden");
  window.scrollTo(0, 0);
}