<?php
/**
 * Enqueue scripts and styles.
 */

function sth_scripts() {

  // Include both child and parent styles
  // 
  // Comment out to remove
  
    $parent_style = 'WP_NHS';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
  
 // Include only child
 // 
 // wp_enqueue_style( 'sth-style', get_stylesheet_uri() );

}