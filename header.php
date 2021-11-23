<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo("charset") ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body class="bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-white">
  <?php wp_body_open(); ?>
  <header class="lg:hidden fixed py-4 px-4 w-full flex flex-row items-center top-0 bg-gray-100 dark:bg-gray-900 bg-opacity-80 dark:bg-opacity-80 backdrop-filter backdrop-blur-sm">
    <div class="ml-0">
      <button class="menu-btn py-2 px-4 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-800 transition-all">
        <i class="fas fa-bars"></i>
      </button>
    </div>
    <div class="ml-2">
      <a class="font-kanit font-bold text-2xl" href="#">Moaito<span class="text-pink-500">Blog</span></a>
    </div>
    <div class="mr-0 ml-auto flex flex-row">
      <button class="search-btn py-2 px-4 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-800 transition-all">
        <i class="fas fa-search"></i>
      </button>
      <button class="theme-btn ml-2 py-2 px-4 rounded-lg bg-purple-400 hover:bg-purple-500 text-white dark:bg-yellow-400 dark:hover:bg-yellow-300 dark:text-gray-900 transition-all">
        <span class="theme-icon">
          <i class="fas fa-sun"></i>
        </span>
      </button>
    </div>
  </header>
  <div id="mainMenu" class="fixed w-3/12 h-full min-h-full max-h-full text-gray-800 dark:text-white bg-gray-100 dark:bg-gray-900 z-20 top-0 left-0 transition-all -translate-x-full lg:translate-x-0">
    <div class="h-full min-h-full max-h-full overflow-y-auto flex flex-col py-4 lg:py-6 px-4 lg:px-8">
      <div class="lg:px-4 flex flex-row items-center">
        <button class="menu-btn py-2 px-4 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-800 transition-all text-red-500 lg:hidden">
          <i class="fas fa-times"></i>
        </button>
        <div class="ml-2 lg:ml-0">
          <a class="font-kanit font-bold text-2xl" href="#">Moaito<span class="text-pink-500">Blog</span></a>
        </div>
      </div>
      <div class="py-6">
        <?php wp_nav_menu(
          array(
            "menu" => "menu-principal",
            'add_li_class'  => 'py-2 px-4 hover:bg-gray-200 dark:hover:bg-gray-800 transition-all rounded-lg'
          )
        ); ?>
      </div>
      <div class="py-6 px-4">
        <h6 class="font-kanit mb-2">Redes</h6>
        <div class="flex flex-row space-x-4 text-lg">
          <a href="https://github.com/moaitodev">
            <i class="fab fa-github"></i>
          </a>
          <a href="">
            <i class="fab fa-telegram"></i>
          </a>
          <a href="">
            <i class="fab fa-discord"></i>
          </a>
          <a href="https://twitter.com/moaitodev">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="">
            <i class="fab fa-youtube"></i>
          </a>
          <a href="https://instagram.com/moaitodev">
            <i class="fab fa-instagram"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
  
  <div class="container mx-auto lg:w-9/12 px-6 lg:px-12 py-6 lg:mr-0 lg:ml-auto">
    <header class="px-8 fixed py-4 hidden lg:flex top-0 right-0 w-9/12 z-10 bg-gray-100 dark:bg-gray-900 bg-opacity-80 dark:bg-opacity-80">
      <div class="mr-0 ml-auto flex flex-row">
        <button class="search-btn py-2 px-4 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-800 transition-all">
          <i class="fas fa-search"></i>
        </button>
        <div class="hidden search-box flex-grow mx-2 w-full">
          <?php 
            get_search_form();
          ?>
        </div>
        <button class="theme-btn ml-2 py-2 px-4 rounded-lg bg-purple-400 hover:bg-purple-500 text-white dark:bg-yellow-400 dark:hover:bg-yellow-300 dark:text-gray-900 transition-all">
          <span class="theme-icon">
            <i class="fas fa-sun"></i>
          </span>
        </button>
      </div>
    </header>
    <main class="pt-36 pb-36">
    
  
