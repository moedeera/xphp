<header
style="position:static; top:0; width:100%; padding:5px;"
>

  <div
    class="w-full h-12 px-3 flex items-center pt-8"
   
  >
    <div class="h-full flex justify-between  items-center  mx-auto w-full md:w-4/5 ">
    <div class="md:hidden font-bold">FRESH<span 
    style="color:goldenrod"
    > CUTS</span></div> 
    <div class="hidden text-2xl md:block font-thin">FRESH<span 
    style="color:goldenrod"
    > CUTS</span></div>
    <div class="hidden md:flex gap-3 capitalize">
        <div><a  class="link" href="/">home</a></div>
        <div><a  class="link" href="/services">Services</a></div>
        <div><a  class="link" href="/about">About</a></div>
        <div><a  class="link" href="/login">Login</a></div>
      </div>
      <button class=" text-sm md:hidden" id="openMenu">
        <div class="menu-container">
          <div class="menu-line upper-line"></div>
          <div class="menu-line middle-line"></div>
          <div class="menu-line lower-line"></div>
        </div>
      </button>
      <button class="hidden btn text-sm md:block" id="openMenu">Book</button>
    </div>
  </div>
  <div
    class="sidebar md-hideen"
    id="sidebar"
    style="background-color: rgba(128, 128, 128, 0.75)"
  >
  <div class="sidebar-menu md-hidden">
  <button class="mb-3 border border-round px-4 border-black text-black" id="closeMenu">X</button>
  <div class="flex flex-col gap-3 capitalize text-black font-bold">
        <div><a href="/">home</a></div>
        <div ><a href="/services">Services</a></div>
        <div ><a href="/about">Menu</a></div>
        <div ><a href="/about">Gallery</a></div>
        <div ><a href="/about">About</a></div>
        <div  class="btn-small"><a href="./login">Login</a></div>
      </div>

  </div>
    
  </div>
</header>


<script>
  document.getElementById("openMenu").addEventListener("click", function () {
    document.getElementById("sidebar").classList.add("active");
    document.body.style.overflow = "hidden"; // Prevent background scrolling
  });

  document.getElementById("closeMenu").addEventListener("click", function () {
    document.getElementById("sidebar").classList.remove("active");
    document.body.style.overflow = ""; // Allow background scrolling
  });
      // Function to highlight the active link based on the URL
      function highlightActiveLink() {
      // Get the current path
      const path = window.location.pathname;

      // Get all links in the navbar
      const links = document.querySelectorAll('.link');

      // Loop through each link
      links.forEach(link => {
        // Check if the link href matches the current path
        if (link.getAttribute('href') === path) {
          // Add the active-link class to the link
          link.classList.add('active-link');
        }
      });
    }

    // Call the function when the page loads
    window.onload = highlightActiveLink;
</script>
