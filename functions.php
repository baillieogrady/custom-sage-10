<?php

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our theme. We will simply require it into the script here so that we
| don't have to worry about manually loading any of our classes later on.
|
*/

if (! file_exists($composer = __DIR__ . '/vendor/autoload.php')) {
    wp_die(__('Error locating autoloader. Please run <code>composer install</code>.', 'sage'));
}

require $composer;

/*
|--------------------------------------------------------------------------
| Register Sage Theme Files
|--------------------------------------------------------------------------
|
| Out of the box, Sage ships with categorically named theme files
| containing common functionality and setup to be bootstrapped with your
| theme. Simply add (or remove) files from the array below to change what
| is registered alongside Sage.
|
*/

collect(['helpers', 'setup', 'cpt', 'filters', 'admin'])
    ->each(function ($file) {
        $file = "app/{$file}.php";

        if (! locate_template($file, true, true)) {
            wp_die(
                sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file)
            );
        }
    });

/*
|--------------------------------------------------------------------------
| Enable Sage Theme Support
|--------------------------------------------------------------------------
|
| Once our theme files are registered and available for use, we are almost
| ready to boot our application. But first, we need to signal to Acorn
| that we will need to initialize the necessary service providers built in
| for Sage when booting.
|
*/

add_theme_support('sage');

/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| We are ready to bootstrap the Acorn framework and get it ready for use.
| Acorn will provide us support for Blade templating as well as the ability
| to utilize the Laravel framework and its beautifully written packages.
|
*/

new Roots\Acorn\Bootloader();

// custom pagination

function custom_pagination($args = [], $class = 'pagination') {

    if ($GLOBALS['wp_query']->max_num_pages <= 1) return;

    $args = wp_parse_args( $args, [
        'mid_size'           => 2,
        'prev_next'          => false,
        'prev_text'          => __('Older posts', 'textdomain'),
        'next_text'          => __('Newer posts', 'textdomain'),
        'screen_reader_text' => __('Posts navigation', 'textdomain'),
    ]);

    $links     = paginate_links($args);
    $next_link = get_previous_posts_link('<span class="flex items-center link link--alt"><svg class="inline-block transform rotate-180" style="width: 21px; height: 5px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.34 5.03"><path fill="none" stroke="#e6324b" stroke-miterlimit="10" stroke-width=".5" d="M0 2.52h20.74"/><path d="M17.33 4.92a.25.25 0 01.07-.35l3.23-2.05L17.4.46a.24.24 0 01-.07-.34.25.25 0 01.34-.12l3.56 2.3a.27.27 0 01.11.22.26.26 0 01-.11.21L17.67 5a.22.22 0 01-.13 0 .24.24 0 01-.21-.08z" fill="#e6324b"/></svg><span class="inline-block ml-3">Previous</span></span>');
    $prev_link = get_next_posts_link('<span class="flex items-center link"><span>Next</span><svg  class="inline-block ml-3" style="width: 21px; height: 5px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.34 5.03"><path fill="none" stroke="#e6324b" stroke-miterlimit="10" stroke-width=".5" d="M0 2.52h20.74"/><path d="M17.33 4.92a.25.25 0 01.07-.35l3.23-2.05L17.4.46a.24.24 0 01-.07-.34.25.25 0 01.34-.12l3.56 2.3a.27.27 0 01.11.22.26.26 0 01-.11.21L17.67 5a.22.22 0 01-.13 0 .24.24 0 01-.21-.08z" fill="#e6324b"/></svg></span>');
    $template  = apply_filters( 'the_so37580965_navigation_markup_template', '<div class="pagination bg-grey mb-16 p-4 flex justify-between font-medium">%5$s<div class="page-numbers-container">%4$s</div>%3$s</div>', $args, $class);

    echo sprintf($template, $class, $args['screen_reader_text'], $prev_link, $links, $next_link);

}

function posts_per_page( $query ) {
    if ( is_admin() || ! $query->is_main_query() ) {
       return;
    }

    if ( is_post_type_archive( 'case_studies' ) ) {
       $query->set( 'posts_per_page', 5 );
    }

    if ( is_post_type_archive( 'management_models' ) ) {
        $query->set( 'posts_per_page', 5 );
     }
}
add_filter( 'pre_get_posts', 'posts_per_page' );