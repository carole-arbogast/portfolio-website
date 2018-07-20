<?php 

// Require customizer

require get_template_directory() . '/inc/customizer.php'; 

// Bootstrap navbar - Source: https://github.com/wp-bootstrap/wp-bootstrap-navwalker

require get_template_directory() . '/inc/bootstrap-navwalker.php';

// Get image from the customizer - to use in an img src tag

function get_custom_img($img_setting){
	if (get_theme_mod( $img_setting) > 0) {
		echo wp_get_attachment_image_url( get_theme_mod( $img_setting), 'full');
	}
}

// Load scripts and styles

function abc_load_my_scripts() {
		// Fonts
		wp_enqueue_style( 'catamaran', 'https://fonts.googleapis.com/css?family=Catamaran:400,500,600,700,800,900'); 
		wp_enqueue_style( 'montserrat', 'https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800'); 
		// Icons  
		wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.1.0/css/all.css');
		wp_enqueue_style('fizzed', get_template_directory_uri() . '/assets/font-mfizz-2.4.1/font-mfizz.css');
		// Bootstrap CSS
		wp_enqueue_style( 'wp-bootstrap-bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap/bootstrap.min.css' );
		// Custom CSS
		wp_enqueue_style( 'template', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0', 'all' );
		// Bootstrap JS
  		wp_enqueue_script( 'boot1','https://code.jquery.com/jquery-3.3.1.slim.min.js', array('jquery'));
  		wp_enqueue_script( 'boot2','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array('jquery'));
	  	wp_enqueue_script( 'boot3','https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array('jquery'));
}
add_action( 'wp_enqueue_scripts', 'abc_load_my_scripts', 999);

// Register menus

register_nav_menus(
	array(
		'main_menu' => 'Main Menu',
		'right_menu' => 'Right Menu',
		'tags_menu' => 'Tags Menu'
	)
); 

// Theme support

add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-background' );
add_theme_support( 'title-tag' );

// Register sidebars

add_action( 'widgets_init', 'portfolio_sidebars'); 
function portfolio_sidebars(){
	register_sidebar(
		array(
			'name' => 'Home Page Sidebar',
			'id' => 'sidebar-1',
			'description' => 'This is the Home Page Sidebar. You can add your widgets here. ',
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		)
	);
	register_sidebar(
		array(
			'name' => 'Blog Sidebar',
			'id' => 'sidebar-2',
			'description' => 'This is the Blog Sidebar. You can add your widgets here. ',
			'before_widget' => '<div class="widget-wrapper-2">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		)
	);	
}

// Reduce excerpt size

function wpdocs_custom_excerpt_length( $length ) {
    return 15;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

// Featured Post Widget Template - add a custom template

/**
 * 
 * In addition to this filter, you must create a file named my_new_template.php in a /fpw2_views/ folder in the active child or parent theme
 * 
 * @param	$templates	array	slug => label pairs of templates
 */
function fpw_add_widget_template( $templates ) {
	$templates['portfolio'] = __( 'Portfolio Template');
	$templates['skills'] = __( 'Skills');
	return $templates;
}
add_filter( 'fpw_widget_templates', 'fpw_add_widget_template' );


