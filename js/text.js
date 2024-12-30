const txt = document.querySelector("#txt");


window.addEventListener('scroll', e => {
  if (pageYOffset >= 220) {
    txt.classList.add("op");
  } else {
    txt.classList.remove("op");
  }
});