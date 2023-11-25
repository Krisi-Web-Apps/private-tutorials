<?php
  $meta_title = "Контакти";
?>
<?php require "inc/header.php"; ?>
<header class="header h-screen contacts-header">
  <?php require "inc/nav.php"; ?>

  <div class="container mx-auto">
    <div class="my-20 flex justify-center">
      <h1 class="w-fit rounded bg-slate-900 text-white text-4xl text-center p-20">Контакти</h1>
    </div>

    <ul class="grid md:grid-cols-2 gap-10 max-md:px-10">
      <li>
        <a href="tel:0899718824">
          <div class="rounded bg-green-900 text-white text-center p-20">
            <div class="text-4xl">Обаждане сега</div>
            <div class="text-xl mt-5">+359 899 71 88 24</div>
          </div>
        </a>
      </li>
      <li>
        <a href="mailto:krisikostadinov98@gmail.com">
          <div class="rounded bg-slate-400 text-white text-center p-20">
            <div class="text-4xl">Изпратете имейл</div>
            <div class="text-xl mt-5">krisikostadinov98@gmail.com</div>
          </div>
        </a>
      </li>
    </ul>
  </div>
</header>
<?php require "inc/footer.php"; ?>