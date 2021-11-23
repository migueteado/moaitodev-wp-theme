<?php

/**
 * Load Custom Comments Layout file.
 */
require get_template_directory() . '/inc/comments-helper.php';

function mdev_assets() {
  wp_register_style("google-font", "https://fonts.googleapis.com/css2?family=Bungee&family=Kanit:wght@100;400;600;700&family=Roboto&display=swap", array(), false, "all");
  wp_register_style("font-awesome", "https://use.fontawesome.com/releases/v5.15.4/css/all.css", array(), "5.15.4", "all");
  wp_enqueue_style("main-css", get_template_directory_uri() . "/assets/css/main.css", array("google-font", "font-awesome"), false, "all");

  wp_enqueue_script("mdev-jquery", "https://code.jquery.com/jquery-3.6.0.min.js", array(), "3.6.0", "all");
  wp_enqueue_script("main-js", get_template_directory_uri() . "/assets/js/main.js", array("mdev-jquery"), false, "all");
}

add_action("wp_enqueue_scripts", "mdev_assets");

function mdev_analytics() {
  ?>

  <?php
}

add_action("wp_body_open", "mdev_analytics");

function mdev_theme_supports() {
  add_theme_support("title-tag");
  add_theme_support("post-thumbnails");
}

add_action("after_setup_theme", "mdev_theme_supports");

function mdev_add_menus() {
  register_nav_menus(
    array(
      "menu-principal" => "Menu Principal",
      "menu-responsive" => "Menu Responsive"
    )  
  );
}

add_action("after_setup_theme", "mdev_add_menus");

function add_additional_class_on_li($classes, $item, $args) {
  if(isset($args->add_li_class)) {
    $classes[] = $args->add_li_class;
  }
  return $classes;
}

add_filter("nav_menu_css_class", "add_additional_class_on_li", 1, 3);

function mdev_add_sidebar() {
  register_sidebar(
    array(
      "name" => "Pie de pagina",
      "id" => "page-footer",
      "before_widget" => "",
      "after_widget" => ""
    )
  );
}

add_action("widgets_init", "mdev_add_sidebar");

function mdev_remove_website_field($fields) {
  unset($fields['url']);
  return $fields;
}

add_filter('comment_form_default_fields', 'mdev_remove_website_field');

function my_excerpt_length($length){
  return 35;
}

add_filter("excerpt_length", "my_excerpt_length");