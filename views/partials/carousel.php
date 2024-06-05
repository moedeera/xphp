<div class="carousel-container" id="carouselContainer">
  <div class="carousel-slide" style="background-color: blue">
    <h1 style="color: blue">Blue</h1>
  </div>
  <div class="carousel-slide" style="background-color: red">
    <h1 style="color: red">Red</h1>
  </div>
  <div class="carousel-slide" style="background-color: yellow">
    <h1 style="color: yellow">Yellow</h1>
  </div>
  <div class="carousel-slide" style="background-color: green">
    <h1 style="color: green">Green</h1>
  </div>
  <div class="carousel-indicators">
    <div class="indicator" data-slide="0" style="background-color: blue"></div>
    <div class="indicator" data-slide="1" style="background-color: red"></div>
    <div
      class="indicator"
      data-slide="2"
      style="background-color: yellow"
    ></div>
    <div class="indicator" data-slide="3" style="background-color: green"></div>
  </div>
</div>

<script>
  // let currentIndex = 0;
  // let isAutoSliding = true;
  // const slides = document.querySelectorAll(".carousel-slide");
  // const indicators = document.querySelectorAll(".indicator");

  // function showSlide(index) {
  //   slides.forEach((slide, i) => {
  //     slide.style.transform = `translateX(${(i - index) * 100}%)`;
  //   });
  //   indicators.forEach((indicator, i) => {
  //     if (i === index) {
  //       indicator.classList.add("active");
  //     } else {
  //       indicator.classList.remove("active");
  //     }
  //   });
  //   currentIndex = index;
  // }

  // function nextSlide() {
  //   currentIndex = (currentIndex + 1) % slides.length;
  //   showSlide(currentIndex);
  // }

  // function startAutoSlide() {
  //   isAutoSliding = true;
  //   autoSlideInterval = setInterval(nextSlide, 3000);
  // }

  // function stopAutoSlide() {
  //   isAutoSliding = false;
  //   clearInterval(autoSlideInterval);
  // }

  // indicators.forEach((indicator) => {
  //   indicator.addEventListener("click", (e) => {
  //     stopAutoSlide();
  //     const index = parseInt(e.target.dataset.slide);
  //     showSlide(index);
  //   });
  // });

  // showSlide(currentIndex);
  // startAutoSlide();

  // // Touch swipe functionality
  // let startX;
  // const threshold = 50;

  // document
  //   .querySelector(".carousel-container")
  //   .addEventListener("touchstart", (e) => {
  //     startX = e.touches[0].clientX;
  //   });

  // document
  //   .querySelector(".carousel-container")
  //   .addEventListener("touchmove", (e) => {
  //     const diffX = e.touches[0].clientX - startX;
  //     if (Math.abs(diffX) > threshold) {
  //       stopAutoSlide();
  //       if (diffX > 0) {
  //         currentIndex = (currentIndex - 1 + slides.length) % slides.length;
  //       } else {
  //         currentIndex = (currentIndex + 1) % slides.length;
  //       }
  //       showSlide(currentIndex);
  //       startX = e.touches[0].clientX; // Update startX for continuous swiping
  //     }
  //   });
  let currentIndex = 0;
  let isAutoSliding = true;
  const slides = document.querySelectorAll(".carousel-slide");
  const indicators = document.querySelectorAll(".indicator");
  const carouselContainer = document.getElementById("carouselContainer");
  let autoSlideInterval;

  function showSlide(index) {
    slides.forEach((slide, i) => {
      slide.style.transform = `translateX(${(i - index) * 100}%)`;
    });
    indicators.forEach((indicator, i) => {
      if (i === index) {
        indicator.classList.add("active");
      } else {
        indicator.classList.remove("active");
      }
    });
    currentIndex = index;
  }

  function nextSlide() {
    currentIndex = (currentIndex + 1) % slides.length;
    showSlide(currentIndex);
  }

  function startAutoSlide() {
    isAutoSliding = true;
    autoSlideInterval = setInterval(nextSlide, 3000);
  }

  function stopAutoSlide() {
    isAutoSliding = false;
    clearInterval(autoSlideInterval);
  }

  indicators.forEach((indicator) => {
    indicator.addEventListener("click", (e) => {
      stopAutoSlide();
      const index = parseInt(e.target.dataset.slide);
      showSlide(index);
    });
  });

  showSlide(currentIndex);
  startAutoSlide();

  // Touch swipe functionality
  let startX;
  const threshold = 50;

  carouselContainer.addEventListener("touchstart", (e) => {
    startX = e.touches[0].clientX;
  });

  carouselContainer.addEventListener("touchmove", (e) => {
    const diffX = e.touches[0].clientX - startX;
    if (Math.abs(diffX) > threshold) {
      stopAutoSlide();
      if (diffX > 0) {
        currentIndex = (currentIndex - 1 + slides.length) % slides.length;
      } else {
        currentIndex = (currentIndex + 1) % slides.length;
      }
      showSlide(currentIndex);
      startX = e.touches[0].clientX; // Update startX for continuous swiping
    }
  });
</script>
