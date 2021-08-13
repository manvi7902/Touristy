const container = document.querySelector(".container");
const lefty = document.querySelector(".lefty");
let translate = 0;

lefty.addEventListener("click", function() {
  	translate += 200;
  	container.style.transform = "translateX(" + translate + "px" + ")";
});

const righty = document.querySelector(".righty");
righty.addEventListener("click", function() {
  	translate -= 200;
  	container.style.transform = "translateX(" + translate + "px" + ")";
});