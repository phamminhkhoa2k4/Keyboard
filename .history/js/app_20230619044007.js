// slider
var index = 1;
changeImage = function () {
  var images = [
    "./images/slider1.jpg",
    "./images/slider1.jpg",
    "./images/slider1.jpg",
    "./images/slider1.jpg",
  ];
  document.getElementById("image").src = images[index];
  index++;
  if (index == 2) {
    index = 0;
  }
};
setInterval(changeImage, 3000);
