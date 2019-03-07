<?php 
 
  add_action( 'wp_enqueue_scripts','theme_styles' );
  add_action( 'wp_enqueue_scripts', 'theme_scripts');
  add_action( 'after_setup_theme','theme_register_nav_menu');
  add_action( 'widgets_init', 'register_my_widgets' );
  add_filter('the_content','test_content');




   function test_content($content){
   $content.='Thanks for read this article!';
   return $content;
  }
  function theme_register_nav_menu() {
  register_nav_menu( 'top', 'Меню в шапке' );
  add_theme_support( 'title-tag');
  add_theme_support( 'post-thumbnails', array( 'post' ) );
  add_theme_support( 'post-formats', array( 'aside', 'video' ) );
  add_image_size( 'post_thumb', 800, 400, true ); 
  add_filter( 'excerpt_more', 'new_excerpt_more' );
   function new_excerpt_more( $more ){
  global $post;
  return '<a href="'. get_permalink($post) . '">Читать дальше...</a>';
}
// удаляет H2 из шаблона пагинации
add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
function my_navigation_template( $template, $class ){
  /*
  Вид базового шаблона:
  <nav class="navigation %1$s" role="navigation">
    <h2 class="screen-reader-text">%2$s</h2>
    <div class="nav-links">%3$s</div>
  </nav>
  */

  return '
  <nav class="navigation %1$s" role="navigation">
    <div class="nav-links">%3$s</div>
  </nav>    
  ';
}

// выводим пагинацию
the_posts_pagination( array(
  'end_size' => 2,
) ); 
}
  function theme_styles(){
  	wp_enqueue_style('default', get_template_directory_uri() . '/assets/css/default.css'  );
  	wp_enqueue_style('layout', get_template_directory_uri() . '/assets/css/layout.css'  );
  }

  function theme_scripts(){
  	wp_deregister_script( 'jquery' );
  	wp_register_script('jquery','//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');
  	wp_enqueue_script('flexslider', get_template_directory_uri(). '/assets/js/jquery.flexslider.js',['jquery'],null, true);
  	wp_enqueue_script('doubletaptogo', get_template_directory_uri(). '/assets/js/doubletaptogo.js',['jquery'],null, true);
  	wp_enqueue_script('init', get_template_directory_uri(). '/assets/js/init.js',['jquery'],null, true);
  	wp_enqueue_script('modernizr', get_template_directory_uri(). '/assets/js/modernizr.js',null,null, false);
  }

function register_my_widgets(){
  register_sidebar( array(
    'name'          => 'Left Sidebar',
    'id'            => "left_sidebar",
    'description'   => 'Description of Sidebar',
    'before_widget' => '<div class="widget %2$s">',
    'after_widget'  => "</div>\n",
    'before_title'  => '<h5 class="widgettitle">',
    'after_title'   => "</h5>\n",
  ) );
}


