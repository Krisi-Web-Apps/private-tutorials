<?php require "inc/header.php"; ?>
<header class="header courses-header">
  <?php require "inc/nav.php"; ?>

  <div class="container mx-auto">
    <div class="my-20 flex justify-center">
      <h1 class="w-fit rounded bg-slate-900 text-white text-4xl text-center p-20">Курсове</h1>
    </div>
  </div>
</header>
<main>
  <ul class="grid gap-10 md:grid-cols-2 px-10">
    <li class="p-10 bg-slate-100 rounded">
      <a href="#">
        <h2 class="text-black font-bold text-center text-2xl">Основи на HTML & CSS</h2>
        <img class="w-full h-full" src="/assets/images/HTML-CSS.png" alt="Уроци по HTML & CSS">
      </a>
    </li>
    <li class="p-10 bg-slate-100 rounded">
      <a href="#" class="flex flex-col items-center justify-center">
        <h2 class="text-black font-bold text-center text-2xl">Основи на JavaScript</h2>
        <img class="w-full h-full mt-10" src="/assets/images/JavaScript.png" alt="Уроци по JavaScript">
      </a>
    </li>
  </ul>
</main>
<?php require "inc/footer.php"; ?>