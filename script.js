var backtotopButton = document.getElementById("backtotop");

window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
  ) {
    backtotopButton.style.display = "block";
  } else {
    backtotopButton.style.display = "none";
  }
}

backtotopButton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}