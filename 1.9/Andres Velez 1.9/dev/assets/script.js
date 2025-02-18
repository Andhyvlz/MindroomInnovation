function clickShowHide(text, idTitle, idContainer) {
  debugger;
  var element = document.getElementById(idTitle);
  var action = element.getAttribute("data-action");
  debugger;
  if (action == "true") {
    element.setAttribute("data-action", false);
    element.textContent = text + " -";
    element = document.getElementById(idContainer);
    element.style.display  = "block";
  } else {
    element.setAttribute("data-action", true);
    element.textContent = text + " +";
    element = document.getElementById(idContainer);
    element.style.display  = "none";
  }
}