<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo("charset") ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body class="bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-white overflow-x-hidden">
  <?php wp_body_open(); ?>
  <div id="veil" class="fixed block bg-gray-100 dark:bg-gray-900 h-screen w-screen z-50"></div>
  <header id="mainHeader" class="fixed top-0 left-0 bg-gray-200 dark:bg-gray-800 w-full shadow-lg transition-all duration-500 border-l border-gray-200 dark:border-gray-800 z-10">
    <div class="bg-gray-200 dark:bg-gray-800 w-full py-2 px-4">
      <div class="flex flex-row items-center justify-center space-x-2">
        <div class="text-gray-400 hover:text-gray-600 dark:text-gray-600 dark:hover:text-gray-400 transition-all">
          <a href="https://github.com/moaitodev">
            <i class="fab fa-github"></i>
          </a>
        </div>
        <div class="text-gray-400 hover:text-gray-600 dark:text-gray-600 dark:hover:text-gray-400 transition-all">
          <a href="https://t.me/moaito">
            <i class="fab fa-telegram"></i>
          </a>
        </div>
        <div class="text-gray-400 hover:text-gray-600 dark:text-gray-600 dark:hover:text-gray-400 transition-all">
          <a href="https://discord.gg/V997EzQV">
            <i class="fab fa-discord"></i>
          </a>
        </div>
        <div class="text-gray-400 hover:text-gray-600 dark:text-gray-600 dark:hover:text-gray-400 transition-all">
          <a href="https://twitter.com/moaitodev">
            <i class="fab fa-twitter"></i>
          </a>
        </div>
        <div class="text-gray-400 hover:text-gray-600 dark:text-gray-600 dark:hover:text-gray-400 transition-all">
          <a href="https://www.youtube.com/channel/UCwX6xQOxMbB8V2veBrBvRDA">
            <i class="fab fa-youtube"></i>
          </a>
        </div>
        <div class="text-gray-400 hover:text-gray-600 dark:text-gray-600 dark:hover:text-gray-400 transition-all">
          <a href="https://instagram.com/moaitodev">
            <i class="fab fa-instagram"></i>
          </a>
        </div>
      </div>
    </div>
    <div class="bg-gray-100 dark:bg-gray-900 w-full p-4">
      <div class="flex flex-row items-center justify-between">
        <div class="ml-0">
          <button class="menu-btn py-2 px-4 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-800 transition-all">
            <i class="fas fa-bars"></i>
          </button>
        </div>
        <div class="ml-2">
          <a class="font-kanit font-bold text-2xl" href="<?php echo get_site_url(); ?>">Moaito<span class="text-pink-500">Blog</span></a>
        </div>
        <div class="mr-0 ml-auto">
          <button class="theme-btn ml-2 py-2 px-4 rounded-lg bg-purple-400 hover:bg-purple-500 text-white dark:bg-yellow-400 dark:hover:bg-yellow-300 dark:text-yellow-700 transition-all">
            <span class="theme-icon">
              <i class="fas fa-sun"></i>
            </span>
          </button>
        </div>
      </div>
    </div>
    <div id="mainMenu" class="fixed w-72 h-full min-h-full top-0 left-0 bg-gray-100 dark:bg-gray-900 -translate-x-full transition-transform duration-500 border-r border-gray-200 dark:border-gray-800">
      <div class="p-4">
        <div class="pt-10 pb-4 pl-4 border-b border-gray-200 dark:border-gray-800 flex flex-row items-center justify-between">
          <h3 class="text-2xl font-bungee">Menu</h3>
          <button class="menu-btn py-2 px-4 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-800 text-red-500 transition-all">
            <i class="fas fa-times"></i>
          </button>
        </div>
        <div class="py-4">
          <?php wp_nav_menu(
            array(
              "menu" => "menu-principal",
              'add_li_class'  => 'py-2 px-4 hover:bg-gray-200 dark:hover:bg-gray-800 transition-colors rounded-lg mb-2'
            )
          ); ?>
        </div>
      </div>
    </div>
  </header>       
  <div class="py-28 flex flex-col lg:flex-row-reverse">
    <div class="py-8 lg:py-28 w-full mx-auto md:max-w-2xl lg:w-96 lg:mx-0">
      <div class="px-4 lg:px-8 lg:border-l border-gray-200 dark:border-gray-800">
        <div class="flex flex-col">
          <?php 
            get_search_form();
          ?>
        </div>
      </div>
    </div>
    <main class="py-8 lg:py-28 flex-grow">
      <div class="w-full md:max-w-2xl lg:max-w-xl xl:max-w-3xl 2xl:max-w-5xl mx-auto px-4 lg:px-8">
    
  
