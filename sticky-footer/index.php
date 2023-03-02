<?php
/*
Plugin Name: Sticky Footer Shortcode Mobile View For Elementor
Description: Adds a shortcode [stickyfooter] to apply sticky footer CSS styles in your Footer. And add CSS Classes "stickyfootercheat" to Apply in your Footer with Elementor.
Plugin URI: https://github.com/mbgin/Sticky-Footer-Shortcode-Mobile-View-For-Elementor
Author: BilalGiri
Version: 1.0
Author URI: mailto:kontakbilal@gmail.com
*/

// Register the shortcode
add_shortcode( 'stickyfooter', 'sticky_footer_shortcode' );

// Define the shortcode function
function sticky_footer_shortcode() {
    $output = '<style>
        .stickyfootercheat {
          position: fixed;
          top: auto;
          bottom: 0;
          width: 100%;
          display: inline-block;
        }
    </style>';

    // Add the CSS class to the HTML element
    $output .= '<div class="stickyfootercheat"></div>';

    return $output;
}
?>