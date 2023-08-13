// slider
var index = 1;
changeImage = function () {
  var images = [
    "./images/ban-phim-akko-3098s-spongebob-0.jpg",
    "./images/ban-phim-co-akko-5108b-plus-kamado-nezuko-1.jpg",
  ];
  document.getElementById("image").src = images[index];
  index++;
  if (index == 2) {
    index = 0;
  }
};
setInterval(changeImage, 3000);
