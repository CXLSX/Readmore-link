function child_theme_setup() {

	// override parent theme's 'more' text for excerpts

	remove_filter( 'excerpt_more', 'larue_modify_excerpt' );

	remove_filter( 'get_the_excerpt', 'larue_modify_excerpt' );

}

add_action( 'after_setup_theme', 'child_theme_setup' );

function child_new_excerpt_more($more) {

    global $post;

    return '<a class="moretag" href="'. get_permalink($post->ID) . '"> '.esc_html__('Read More', 'larue').'</a>';

}

add_filter('excerpt_more', 'child_new_excerpt_more');
