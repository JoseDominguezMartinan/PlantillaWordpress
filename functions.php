<?php
function twentyseventeenchild_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'widget-area', 'twentyseventeenchild' ),
		'id'            => 'footer-widget',
		'description'   => __( 'Add widgets here to appear in your footer on blog posts and archive pages.', 'twentyseventeenchild' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'twentyseventeenchild_widgets_init' );


function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

?>


