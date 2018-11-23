<?php
function register_my_menus() {
  	register_nav_menu( 'primary', __( 'Primary Menu', 'twentytwelve' ) );

}
add_action( 'init', 'register_my_menus' );

function new_excerpt_more($more) {
       global $post;
	return '<a class="moretag" href="'. get_permalink($post->ID) . '"> Read the full News </a>';
}
add_filter('excerpt_more', 'new_excerpt_more');
?>