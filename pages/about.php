<?php
  $meta_title = "Кристиан Костадинов";
  $meta_desc = "Като опитен програмист, посветен на създаването на динамични уеб приложения, с голяма страст споделям своите знания с учениците.";
?>
<?php require "inc/header.php"; ?>
<header class="header h-screen about-header">
  <?php require "inc/nav.php"; ?>

  <div class="container mx-auto">
    <div class="flex justify-center">
      <h1 class="w-fit text-white text-4xl text-center md-px-20 py-20">Кристиан Костадинов</h1>
    </div>
    <div class="flex justify-center">
      <div class="max-w-xs rounded-full border-white border-2 shadow-md overflow-hidden">
        <img class="w-full h-full" src="/assets/images/teacher.png"
          alt="Кристиан Костадинов - частен учител по уеб програмиране"
          title="Кристиан Костадинов - частен учител по уеб програмиране">
      </div>
    </div>
    <div class="text-center mt-10">
      <a href="#read-more" class="inline-block text-xl text-white bg-slate-900 rounded py-6 px-14">Научете повече</a>
    </div>
  </div>
</header>
<main>
  <section id="read-more" class="my-20 py-10">
    <div class="container mx-auto">
      <h2 class="text-4xl text-center font-bold mb-10 max-md:px-10">Повече за преподавателя</h2>
      <div class="grid gap-10 md:grid-cols-2 items-center max-md:px-10">
        <img src="/assets/images/illustrations/about-page-img.svg" alt="Повече за преподавателя">
        <div class="flex flex-col gap-5 text-slate-900 text-xl max-md:text-center">
          <p>
            Като опитен програмист, посветен на създаването на динамични уеб приложения, с голяма страст споделям своите
            знания с учениците. Обединявам богатия си опит с подкрепa и вдъхновяващ подход, с цел да помогна на
            учениците да освоят исновните умения и компетенции в уеб програмирането.
          </p>
          <p>
            Моят образователен стил се фокусира върху интензивна практика, която не само представлява технически аспекти
            на уеб разработката, но и включва конкретни практически сценарии и реални проекти. Създавам обучение,
            персонализирано според индивидуалните нужди на всеки ученик, комбинирайки техническата подготовка с умения
            за решаване на задачи и логическо мислене.
          </p>
        </div>
      </div>
    </div>
  </section>
</main>
<?php require "inc/footer.php"; ?>