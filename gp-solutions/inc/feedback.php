<?php
/*  Feedbacks - Post Type Start */
add_action('init', 'blank_feedbacks', 0 );
function blank_feedbacks() {
	$feedbacks_slug = 'feedbacks';
	$args = array(
        'labels' => array(
			'name' => esc_html__('Feedbacks', 'blank'),
			'add_new' => esc_html__('Add Feedback', 'blank'),
            'edit_item' => esc_html__('Edit Feedback', 'blank'),
            'add_new_item' => esc_html__('Add New Feedback', 'blank'),
            'view_item' => esc_html__('View Feedback', 'blank'),
        ),
        'singular_label' => __('feedback'),
        'public' => false,
		'publicly_queryable' => false,
        'show_ui' => true,
		'show_in_rest' => true,
		'menu_icon' => 'dashicons-admin-comments',
        '_builtin' => false,
        '_edit_link' => 'post.php?post=%d',
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
        	'title',
        	'editor',
        	'thumbnail'
        ),
		'has_archive' => false,
		'rewrite' => array(
			'slug' => $feedbacks_slug,
			'with_front' => false
		)
    );
    register_post_type( 'feedbacks' , $args );
}
/*  Feedbacks - Post Type End */