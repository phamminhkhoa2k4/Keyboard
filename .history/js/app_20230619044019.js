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
