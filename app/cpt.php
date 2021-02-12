<?php

/**
 * Theme CPTs.
 */

// courses
$courses = new CPT(
	array(
		'post_type_name' => 'courses',
		'singular' => 'Course',
		'plural' => 'Courses',
		'slug' => 'courses',
	),
	array(
		'supports' => array('title', 'thumbnail'),
		'menu_icon' => 'dashicons-book-alt'
		
	)
);

// case studies
$case_studies = new CPT(
	array(
		'post_type_name' => 'case_studies',
		'singular' => 'Case study',
		'plural' => 'Case studies',
		'slug' => 'case-studies',
	),
	array(
		'supports' => array('title', 'thumbnail', 'editor'),
		'has_archive' => true,
		'show_in_rest' => true,
		'menu_icon'   => 'dashicons-awards',
	)
);

// mangement models
$management_models = new CPT(
	array(
		'post_type_name' => 'management_models',
		'singular' => 'Management model',
		'plural' => 'Management models',
		'slug' => 'management-models'
	),
	array(
		'supports' => array('title', 'thumbnail', 'editor','page-attributes'),
		'has_archive' => true,
		'show_in_rest' => true,
		'menu_icon'   => 'dashicons-businessman',
		'rewrite' => [
			'slug' => 'management-models',
			'with_front' => false
		]
	)
);

$management_models->register_taxonomy(array(
	'taxonomy_name' => 'managment_model_category',
	'singular' => 'Category',
	'plural' => 'Categories',
	'slug' => 'managment_model_category'
	),
	array(
		'show_in_rest' => true,
		'menu_icon'   => 'dashicons-book-alt',
	)
);