
<header class="mb-12">
  <div>
    <div class="mb-4">
      <?php the_category('<span class="text-gray-900 dark:text-gray-100 font-bold"> / </span>') ?>
    </div>
    <div class="font-bungee text-5xl mb-4"><?php the_title(); ?></div>
    <div class="inline-block mr-2">
      <i class="far fa-user"></i>
      <?php the_author(); ?>
    </div>
    <div class="inline-block mr-2">
      <i class="far fa-clock"></i>
      <?php the_date(); ?>
    </div>
    <div class="inline-block mr-2">
      <i class="far fa-comment"></i>  
      <?php comments_number(); ?>
    </div>
  </div>
</header>
<div>
  <?php 
    the_post_thumbnail("post-thumbnail", array(
      "class" => "w-full rounded-lg my-12"
    )) 
  ?>
</div>
<div>
  <?php 
    the_content();
  ?>
</div>
<footer>
  <div class="mt-12">
    <div class="py-4"><?php the_tags('<span class="rounded-lg bg-gray-200 dark:bg-gray-800 py-1 px-2 mr-2"><i class="fas fa-tag mr-1"></i>', '</span><span class="rounded-lg bg-gray-200 dark:bg-gray-800 py-1 px-2 mr-2"><i class="fas fa-tag mr-1"></i>', '</span>'); ?></div>
  </div>
</footer>
<div>
  <?php 
    comments_template();
  ?>
</div>



