<?php
/**
 * Plugin Name: Sedoo Robots.txt generator
 * Description: Ajoutez des infos au fichier robots.txt
 * Version: 0.3.0
 * Author: Pierre Vert - SEDOO OMP
 * Text Domain:  sedoo-wppl-robotstxt 
 * Domain Path:  /languages
 */

 // Edit robots.txt for individual sites in a WordPress Multisite installation

include 'inc/sedoo-wppl-robotstxt-acf-fields.php';
include 'inc/sedoo-wppl-robotstxt-options.php';

function sedoo_wppl_robotstxt_custom_robots( $output, $public ) {
	$site_id = get_current_blog_id();

	// Check rows existexists.
	if( have_rows('robots-txt-lines', 'option') ):

		// Loop through rows.
		while( have_rows('robots-txt-lines', 'option') ) : the_row();

			// Load sub field value.
			// $sub_value = get_sub_field('sub_field');
			$output .= "\n".get_sub_field('robots-txt-line', 'option')."";

		// End loop.
		endwhile;

	// No value.
	else :
		// Do something...
	endif;
	// if ( $site_id == 1 ) {
		// $output .= "Allow: /wp-content/uploads/\n";
	// $output .= "\nSitemap: https://api.sedoo.fr/sedoo-resif-rest/sitemap/v1_0/network_sitemap.xml";
	// }
    //    elseif ( $site_id == 2 ) { 
       // Your code here
        // }

	return $output;
}

add_filter( 'robots_txt', 'sedoo_wppl_robotstxt_custom_robots', 20, 2 );