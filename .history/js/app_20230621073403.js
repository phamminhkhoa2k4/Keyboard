// slider
var index = 1;
changeImage = function () {
  var images = [
    "./images/slider1.jpg",
    "./images/slider2.jpg",
    "./images/slider3.jpg",
    "./images/slider4.jpg",
    "./images/slider5.jpg",
  ];
  document.getElementById("image").src = images[index];
  index++;
  if (index == 5) {
    index = 0;
  }
};
setInterval(changeImage, 3000);



  const minusBtn = document.querySelector(".minus_quality");
  const plusBtn = document.querySelector(".plus_quality");
  const qualityInput = document.querySelector(".quality_text");

  minusBtn.addEventListener("click", () => {
    let currentQty = parseInt(qualityInput.value);
    if (currentQty > 1) {
      qualityInput.value = currentQty - 1;
    }
  });

  plusBtn.addEventListener("click", () => {
    let currentQty = parseInt(qualityInput.value);
    qualityInput.value = currentQty + 1;
  });