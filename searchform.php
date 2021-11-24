<form class="w-full relative" action="/" method="get">
      <button type="submit" class="absolute py-2 px-4 text-blue-500 top-0 left-0 text-gray-900 dark:text-white hover:text-blue-500 dark:hover:text-blue-500 transition-colors">
            <i class="fas fa-search"></i>
      </button>
      <input type="text" name="s" id="search" class="outline-none bg-gray-200 dark:bg-gray-800 rounded-lg w-full py-2 pl-12 pr-4 border border-gray-200 dark:border-gray-800 focus:border-blue-500 dark:focus:border-blue-500 transition-all" value="<?php the_search_query(); ?>" />
</form>