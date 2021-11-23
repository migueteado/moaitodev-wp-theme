  <div class="max-w-5xl mx-auto mb-24 relative flex flex-col md:flex-row">
  
    <div class="pr-6 w-5/12">
      <div class="mb-6">
        <div>
          <div class="font-bungee text-2xl mb-4"><a class="" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
          <div class="mb-4 text-sm">
            <?php the_category('<span class="text-gray-900 dark:text-gray-100 font-bold"> / </span>') ?>
          </div>
        </div>
      </div>
      <div class="py-4 my-6">
        <?php 
          the_excerpt();
        ?>
      </div>
      <div class="text-sm">
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
    </div>
    <div class="w-7/12">
      <a class="" href="<?php the_permalink(); ?>">
        <?php 
          the_post_thumbnail("post-thumbnail", array(
            "class" => "w-full rounded-lg"
          )) 
        ?>
      </a>
    </div> 
  
  </div>



