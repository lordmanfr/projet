const button = document.querySelector("button");

button.addEventListener("click", function() {
  boxes.forEach(function(elem) {
    elem.classList.toggle("hide");
  });
});