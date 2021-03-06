<?php add_action( 'cmb2_admin_init', 'cmb2_stanleywp_metaboxes' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_stanleywp_metaboxes() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_stanleywp_';

	/**
	 * Initiate the metabox
	 */
	$cmb = new_cmb2_box( array(
		'id'            => 'test_metabox',
		'title'         => __( 'Test Metabox', 'stanleywp' ),
		'object_types'  => array( 'page', ), // Post type
		'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/about.php'),
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );

	// Regular text area
	$cmb->add_field( array(
		'name'       => __( 'Left Column', 'stanleywp' ),
		'desc'       => __( 'content for left column', 'stanleywp' ),
		'id'         => $prefix . 'left',
		'type'       => 'textarea',
	) );
	// Regular text field
	$cmb->add_field( array(
		'name'       => __( 'Right Column', 'stanleywp' ),
		'desc'       => __( 'content for right column', 'stanleywp' ),
		'id'         => $prefix . 'right',
		'type'       => 'textarea',
	) );


	// Metabox for project
	$cmb_project = new_cmb2_box( array(
		'id'            => 'project_metabox',
		'title'         => __( 'Images', 'stanleywp' ),
		'object_types'  => array( 'project', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );
		// Images for project
	$cmb_project->add_field( array(
		'name'       => __( 'Images', 'stanleywp' ),
		'desc'       => __( 'Upload images', 'stanleywp' ),
		'id'         => $prefix . 'images',
		'type'       => 'file_list',
	) );

}
?>