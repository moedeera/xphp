document.getElementById("openMenu").addEventListener("click", function () {
  document.getElementById("sidebar").classList.add("active");
  document.body.style.overflow = "hidden"; // Prevent background scrolling
});

document.getElementById("closeMenu").addEventListener("click", function () {
  document.getElementById("sidebar").classList.remove("active");
  document.body.style.overflow = ""; // Allow background scrolling
});
console.log("hello");
// carousel
const popup = {
  init: function () {
    document.querySelectorAll("figure").forEach((figure) => {
      figure.addEventListener("click", function () {
        popup.open(figure);
      });
    });

    document.addEventListener("click", function (event) {
      const target = event.target;
      if (target.matches(".popup img")) {
        return false;
      } else if (target.matches(".popup")) {
        popup.close();
      }
    });
  },

  open: function (figure) {
    document.querySelector(".gallery").classList.add("pop");

    const popupDiv = document.createElement("div");
    popupDiv.classList.add("popup");
    document.body.appendChild(popupDiv);

    const clonedFigure = figure.cloneNode(true);
    popupDiv.appendChild(clonedFigure);

    const bgDiv = document.createElement("div");
    bgDiv.classList.add("bg");
    popupDiv.appendChild(bgDiv);

    const closeDiv = document.createElement("div");
    closeDiv.classList.add("close");
    closeDiv.innerHTML = '<svg><use xlink:href="#close"></use></svg>';
    clonedFigure.appendChild(closeDiv);

    const shadowDiv = document.createElement("div");
    shadowDiv.classList.add("shadow");
    clonedFigure.appendChild(shadowDiv);

    const imgSrc = clonedFigure.querySelector("img").getAttribute("src");
    shadowDiv.style.backgroundImage = `url(${imgSrc})`;
    bgDiv.style.backgroundImage = `url(${imgSrc})`;

    setTimeout(function () {
      popupDiv.classList.add("pop");
    }, 10);
  },

  close: function () {
    document.querySelector(".gallery").classList.remove("pop");
    const popupDiv = document.querySelector(".popup");
    if (popupDiv) {
      popupDiv.classList.remove("pop");
      setTimeout(function () {
        if (popupDiv) {
          popupDiv.remove();
        }
      }, 100);
    }
  },
};

popup.init();
