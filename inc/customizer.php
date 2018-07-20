<?php

function portfolio_customizer( $wp_customize){

// Create frontpage section
$wp_customize-> add_section('sec_frontpage', array(
    'title' => 'Frontpage', 
    'description' => 'Content for the frontpage'
));

    // Main Header
	$wp_customize-> add_setting( 'set_tagline', array(
		'type' => 'theme_mod',
		'default' => __( 'This is a big sentence, read it first' ),
		'sanitize_callback' => 'esc_attr'
    ) );   

	$wp_customize-> add_control( 'ctrl_tagline', array(
		'label' => __( 'Tagline', 'learnwp' ),
		'description' => __( 'Please enter your tagline' ),
		'section' => 'sec_frontpage',
		'settings' => 'set_tagline',
		'type' => 'text'
    ) );    
    
    // SubHeader
	$wp_customize-> add_setting( 'set_subheader', array(
		'type' => 'theme_mod',
		'default' => __( 'This is a smaller sentence, read it anyway' ),
		'sanitize_callback' => 'esc_attr'
    ) );   

	$wp_customize-> add_control( 'ctrl_subheader', array(
		'label' => __( 'Tagline', 'learnwp' ),
		'description' => __( 'Please enter your subheader' ),
		'section' => 'sec_frontpage',
		'settings' => 'set_subheader',
		'type' => 'text'
    ) );      
    
    // Frontpage photo
    $wp_customize->add_setting( 'set_fp_photo',
    array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'absint'
    )
    );
    
    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'set_fp_photo',
    array(
        'label' => __( 'Default Media Control' ),
        'description' => esc_html__( 'This is the description for the Media Control' ),
        'section' => 'sec_frontpage',
        'mime_type' => 'image',  // Required. Can be image, audio, video, application, text
        'button_labels' => array( // Optional
            'select' => __( 'Select File' ),
            'change' => __( 'Change File' ),
            'default' => __( 'Default' ),
            'remove' => __( 'Remove' ),
            'placeholder' => __( 'No file selected' ),
            'frame_title' => __( 'Select File' ),
            'frame_button' => __( 'Choose File' ),
        )
    )
    ) );

}

add_action( 'customize_register', 'portfolio_customizer' );