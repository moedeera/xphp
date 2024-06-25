
<div class="gallery my-24">
  <figure>
    <img src="https://images.pexels.com/photos/897262/pexels-photo-897262.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" />
    <figcaption>Classic Cut <small>Jorge Castillo</small></figcaption>
  </figure>
  <figure>
    <img src="https://images.pexels.com/photos/668196/pexels-photo-668196.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1 alt="" />
    <figcaption>Териберка, gorod Severomorsk <small>Russia</small></figcaption>
  </figure>
  <figure>
    <img src="https://images.unsplash.com/photo-1445964047600-cdbdb873673d?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=600" alt="" />
    <figcaption>
      Bad Pyrmont <small>Deutschland</small>
    </figcaption>
  </figure>
  <figure>
    <img src="https://images.unsplash.com/photo-1439798060585-62ab242d7724?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=600" alt="" />
    <figcaption>Yellowstone National Park <small>Jorge Castillo</small></figcaption>
  </figure>
  <figure>
    <img src="https://images.pexels.com/photos/3065171/pexels-photo-3065171.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" />
    <figcaption>Quiraing, Portree <small>United Kingdom</small></figcaption>
  </figure>
  <figure>
    <img src="https://images.unsplash.com/photo-1441906363162-903afd0d3d52?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=600" alt="" />
    <figcaption>Highlands <small>Jorge Castillo</small></figcaption>
  </figure>
  <figure>
    <img src="https://images.pexels.com/photos/897262/pexels-photo-897262.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" />
    <figcaption>Classic Cut <small>Jorge Castillo</small></figcaption>
  </figure>
  <figure>
    <img src="https://images.pexels.com/photos/668196/pexels-photo-668196.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1 alt="" />
    <figcaption>Териберка, gorod Severomorsk <small>Russia</small></figcaption>
  </figure>
  <figure>
    <img src="https://images.unsplash.com/photo-1445964047600-cdbdb873673d?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=600" alt="" />
    <figcaption>
      Bad Pyrmont <small>Deutschland</small>
    </figcaption>
  </figure>

</div>

<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="display:none;">
  <symbol id="close" viewBox="0 0 18 18">
    <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M9,0.493C4.302,0.493,0.493,4.302,0.493,9S4.302,17.507,9,17.507
			S17.507,13.698,17.507,9S13.698,0.493,9,0.493z M12.491,11.491c0.292,0.296,0.292,0.773,0,1.068c-0.293,0.295-0.767,0.295-1.059,0
			l-2.435-2.457L6.564,12.56c-0.292,0.295-0.766,0.295-1.058,0c-0.292-0.295-0.292-0.772,0-1.068L7.94,9.035L5.435,6.507
			c-0.292-0.295-0.292-0.773,0-1.068c0.293-0.295,0.766-0.295,1.059,0l2.504,2.528l2.505-2.528c0.292-0.295,0.767-0.295,1.059,0
			s0.292,0.773,0,1.068l-2.505,2.528L12.491,11.491z"/>
  </symbol>
</svg>

<script>
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

    // const closeDiv = document.createElement("div");
    // closeDiv.classList.add("close");
    // closeDiv.innerHTML = '<svg><use xlink:href="#close"></use></svg>';
    // clonedFigure.appendChild(closeDiv);

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

</script>