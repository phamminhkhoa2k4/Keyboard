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




  let listDivImg = document.querySelectorAll(".thumbnail_list-items .thumbnail_list-items");
  let next = document.querySelector(".thumbnail_next-btn");
  let prev = document.querySelector(".thumbnail_prev-btn");
  let imgWrap = document.querySelector(".thumbnail_images img");

  let currentIndex = 0;

  setCurrent(currentIndex);

  function setCurrent(index) {
    currentIndex = index;
    imgWrap.src = listDivImg[currentIndex].querySelector("img").src;

    // remove all active img
    listDivImg.forEach((item) => {
      item.classList.remove("active");
    });

    // set active
    listDivImg[currentIndex].classList.add("actived");
  }

  listDivImg.forEach((img, index) => {
    img.addEventListener("click", (e) => {
      setCurrent(index);
    });
  });

  next.addEventListener("click", () => {
    if (currentIndex == listDivImg.length - 1) {
      currentIndex = 0;
    } else currentIndex++;

    setCurrent(currentIndex);
  });

  prev.addEventListener("click", () => {
    if (currentIndex == 0) currentIndex = listDivImg.length - 1;
    else currentIndex--;

    setCurrent(currentIndex);
  });