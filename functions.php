<?php
/**
 * Setup the theme
 * Read: https://developer.wordpress.org/reference/hooks/after_setup_theme/
 */
function hounter_setup_theme() {
    // add some supports
    // read: https://developer.wordpress.org/reference/functions/add_theme_support/
    add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

    // register menu
    register_nav_menus( array(
        'primary_menu' => __( 'Main Menu', 'hounter' ),
        'footer_menu_1'  => __( 'Footer Menu 1', 'hounter' ),
        'footer_menu_2'  => __( 'Footer Menu 2', 'hounter' ),
    ) );

    // I don't like block editor so much
    add_filter( 'use_block_editor_for_post', '__return_false' );
    add_filter( 'should_load_separate_core_block_assets', '__return_true' );
    remove_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' );
    remove_action( 'wp_footer', 'wp_enqueue_global_styles', 1 );
    remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );
}
add_action( 'after_setup_theme', 'hounter_setup_theme' );

/**
 * Theme scripts
 *
 * @return void
 */
function hounter_scripts() {
    $theme_url = get_stylesheet_directory_uri();

    // Stylesheets
    wp_enqueue_style( 'google-font-lexend', '//fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap' );
    wp_enqueue_style( 'normalize', $theme_url . '/assets/css/normalize.css' );
    wp_enqueue_style( 'owl-carousel', $theme_url . '/assets/css/lib/owl.carousel.min.css', [], '2.3.4' );
    wp_enqueue_style( 'hounter', get_stylesheet_uri(), [], '1.0.0', 'all' );

    // Javascripts
    wp_enqueue_script( 'owl-carousel', $theme_url . '/assets/js/lib/owl.carousel.min.js', [], '2.3.4', true );
    wp_enqueue_script( 'hounter', $theme_url . '/assets/js/theme.js', ['jquery'], '1.0.0', true );

    // I don't like Gutenberg / block editor & styles
    // https://github.com/WordPress/gutenberg/issues/36834
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'classic-theme-styles' );
}
add_action( 'wp_enqueue_scripts', 'hounter_scripts' );

/**
 * Additional header link & meta
 *
 * @return void
 */
function hounter_header_meta() {
    ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php
}
add_action( 'wp_head', 'hounter_header_meta', -999 );

/**
 * Min read information
 *
 * @param [type] $post_id
 * @return void
 */
function hounter_post_minread($post_id) {
    // Get the post content by post ID
    $post_content = apply_filters('the_content', get_post_field('post_content', $post_id));

    // Calculate the number of words in the post content
    $word_count = str_word_count(strip_tags($post_content));

    // Average reading speed (words per minute)
    $words_per_minute = 200;

    // Calculate the estimated reading time
    $min_read = ceil($word_count / $words_per_minute);

    // If the calculated reading time is less than or equal to 0, return a random number between 2 and 6
    if ($min_read <= 0) {
        return rand(2, 6);
    }

    // Otherwise, return the calculated reading time
    return $min_read;
}

/**
 * Menu Fallback
 *
 * @return void
 */
function hounter_hounter_primary_menu_cb() {
    ?>
    <?php
}