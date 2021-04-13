<?php

// Registrar o CSS e o JS
/*
function escontil_scripts() {
	// Desregistra o jQuery do Wordpress
	wp_deregister_script('jquery');

	// Registra o jQuery Novo
	wp_register_script( 'jquery', get_template_directory_uri() . '/js/libs/jquery-1.11.2.min.js', array(), "1.11.2", true );

	// Registra o Script de Plugins, com dependência do jquery, sem especificar versão e no footer do site
	wp_register_script( 'plugins-script', get_template_directory_uri() . '/js/plugins.js', array( 'jquery' ), false, true );

	// Registra o Script Principal, com dependência do jquery e plugins, sem especificar versão e no footer do site
	wp_register_script( 'main-script', get_template_directory_uri() . '/js/main.js', array( 'jquery', 'plugins-script' ), false, true );

	// Coloca script no site
	wp_enqueue_script( 'main-script' );
}
add_action( 'wp_enqueue_scripts', 'escontil_scripts' );
*/

function escontil_css() {
  wp_register_style( 'escontil-style', get_template_directory_uri() . '/style.css', array(), false, false );

  wp_enqueue_style( 'escontil-style' );
}
add_action( 'wp_enqueue_scripts', 'escontil_css');

// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// Habilitar Menus
add_theme_support('menus');

// Registrar o Menu
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Menu Topo' ),
      'footer-menu' => __( 'Menu Rodapé' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

?>