<?php

/* Slug for CPT plugin	*/
define('MVPWP_SLUG', 'portfolio');
 
 
/* Labels for CPT plugin	*/
function stanleywp_mvpwp_product_labels( $labels ) {
	$labels = array(
	   'singular' => __('Portfilio Item', 'stanleywp'),
	   'plural'   => __('Portfolio Items', 'stanleywp')
	);
	return $labels;
}
add_filter('mvpwp_default_projects_name', 'stanleywp_mvpwp_product_labels');