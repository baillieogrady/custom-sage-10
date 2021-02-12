<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
});


// limit search results to managemnet models custom post type
add_filter('pre_get_posts',function ($query) {
 
    if ($query->is_search && !is_admin() ) {
        $query->set('post_type',array('management_models'));
    }
 
    return $query;
});


// remove continued text on articles
 add_filter('excerpt_more',function ($more) {
    global $post;
    $more_text = '';
    return '… <a href="'. get_permalink($post->ID) . '">' . $more_text . '</a>';
 });

 // contain all native Gutenberg blocks
add_filter( 'render_block', function ( $block_content, $block ) {
    // determine if it's a custom ACF block
    // if ( empty( trim( $block_content ) ) ) {
    //     return $block_content;
    // }
    if(strpos($block['blockName'],'core') !== false || $block['blockName'] == null){
        $block_content = '<div class="container wysiwyg">' . $block_content  .'</div>';
    } else {
        return $block_content; 
    }
    return $block_content;
}, 10, 2 );