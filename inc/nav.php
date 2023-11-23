<nav class="text-white bg-black">
  <div class="container mx-auto">
    <div class="h-16 flex justify-between items-center">
      <div data-logo>
        <div class="text-2xl">Частни Уроци</div>
      </div>
      <div data-open-menu-button class="w-10 h-10 cursor-pointer" onclick="openMenu()">
        <?php require "icons/menu-bars.php"; ?>
      </div>
    </div>
  </div>
</nav>

<nav class="fixed top-[60px] right-0 h-full z-10 overflow-scroll">
  <div data-nav-items id="nav-items" class="h-full text-white bg-black transition-transform translate-x-full">
    <div class="min-w-[400px]">
      <?php require "inc/nav-items.php"; ?>
    </div>
  </div>
</nav>

<script src="/assets/js/nav.js"></script>