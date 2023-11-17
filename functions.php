<?php

add_action('wp_enqueue_scripts', 'band_digital_styles');
add_action('wp_enqueue_scripts', 'band_digital_scripts');

function band_digital_styles()
{
  wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/plugins/bootstrap/css/bootstrap.css');
  wp_enqueue_style('all-style', get_template_directory_uri() . '/plugins/fontawesome/css/all.css');
  wp_enqueue_style('animate-style', get_template_directory_uri() . '/plugins/animate-css/animate.css');
  wp_enqueue_style('icofont-style', get_template_directory_uri() . '/plugins/icofont/icofont.css');

  wp_enqueue_style('band-digital', get_template_directory_uri() . '/css/style.css', array('main'));
  wp_enqueue_style('main', get_template_directory_uri() . '/style.css?1');
}


function band_digital_scripts()
{
  // Переподключаем jq
  // 1) когда нет файла в проекте и он подключается через путь
  // wp_deregister_script( 'jquery' );
  // wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js' );
  // wp_enqueue_script( 'jquery' );

  // 2) когда в проекте есть файл и мы подключаем именно его
  wp_deregister_script('jquery');
  wp_register_script('jquery', get_template_directory_uri() . '/plugins/jquery/jquery.min.js');
  wp_enqueue_script('jquery');

  wp_enqueue_script('jquery', get_template_directory_uri() . '/plugins/jquery/jquery.min.js', array('jquery'), null, true);
  wp_enqueue_script('popper', get_template_directory_uri() . '/plugins/bootstrap/js/popper.min.js', array('jquery'), null, true);
  wp_enqueue_script('bootstrap', get_template_directory_uri() . '/plugins/bootstrap/js/bootstrap.min.js', array('jquery'), null, true);
  wp_enqueue_script('wow', get_template_directory_uri() . '/plugins/counterup/wow.min.js', array('jquery'), null, true);
  wp_enqueue_script('easing', get_template_directory_uri() . '/plugins/counterup/jquery.easing.1.3.js', array('jquery'), null, true);
  wp_enqueue_script('waypoints', get_template_directory_uri() . '/plugins/counterup/jquery.waypoints.js', array('jquery'), null, true);
  wp_enqueue_script('counterup', get_template_directory_uri() . '/plugins/counterup/jquery.counterup.min.js', array('jquery'), null, true);

  // Пока подключаю так, в дальнейшем google map будет делаться по-другому 
  wp_enqueue_script('gmap3', get_template_directory_uri() . '/plugins/google-map/gmap3.min.js', array('jquery'), null, true);
  wp_enqueue_script('googleapis', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap');

  wp_enqueue_script('contact', get_template_directory_uri() . '/plugins/jquery/contact.js', array('jquery'), null, true);
  wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), null, true);
}


