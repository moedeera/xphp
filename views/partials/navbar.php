<header class="relative">
  <div class="hidden md:flex items-center w-full bg-white h-12 px-1">
    <div class="h-full flex justify-between  items-center  mx-auto w-full ">
    <div class="">BarberShop</div>
    </div>
  </div>
  <div
    class="w-full h-12 px-3 flex items-center"
    style="background-color: #d6d6d4"
  >
    <div class="h-full flex justify-between  items-center  mx-auto w-full md:w-4/5 ">
    <div class="md:hidden">BarberShop</div> 
    <div class="hidden md:flex gap-3 capitalize">
        <div><a href="/">home</a></div>
        <div><a href="/">Services</a></div>
        <div><a href="/">About</a></div>
        <div><a href="/">Login</a></div>
      </div>
      <button class="btn text-sm md:hidden" id="openMenu">Menu</button>
      <button class="hidden btn text-sm md:block" id="openMenu">Book</button>
    </div>
  </div>
  <div
    class="sidebar"
    id="sidebar"
    style="background-color: rgba(128, 128, 128, 0.75)"
  >
  <div class="sidebar-menu">
  <button class="btn mb-3" id="closeMenu">Close</button>
  <div class="flex flex-col gap-3 capitalize">
        <div><a href="/">home</a></div>
        <div><a href="/">Services</a></div>
        <div><a href="/">About</a></div>
        <div><a href="/">Login</a></div>
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
</script>
