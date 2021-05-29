<?php

/**
 * Theme filters.
 */

namespace App;

// contain all native Gutenberg blocks
// add_filter( 'render_block', function ( $block_content, $block ) {
//     if ( empty( trim( $block_content ) ) ) {
//         return $block_content;
//     }
//     if(strpos($block['blockName'],'core') !== false || $block['blockName'] == null){
//         $block_content = '<div class="container">' . $block_content  .'</div>';
//     } else {
//         return $block_content; 
//     }
//     return $block_content;
// }, 10, 2 );