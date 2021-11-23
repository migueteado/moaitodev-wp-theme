<?php get_header() ?>

<article>
  <div id="notFound" class="max-w-5xl mx-auto">
    <h1 class="font-bold text-4xl font-bungee py-6">404 - Page Not Found</h1>
    <p class="text-lg dark:border-gray-800 py-6">Not everyone that is wandering is lost, but looks like you are. Need some help?</p>
    <div class="flex flex-row">
      <div class="py-2 px-4 text-blue-500">
        <i class="fas fa-search"></i>
      </div>
      <?php 
        get_search_form();
      ?>
    </div>
  </div>
</article>

<?php get_footer() ?>