<?php 

$section = 'general';
$sep_id = 100;

Kirki::add_field( 'theretailer', array( 
    'type'        => 'radio-image', 
    'settings'    => 'gb_layout', 
    'label'       => esc_attr__( 'Main Layout Style', 'theretailer' ), 
    'section'     => $section, 
    'default'     => 'fullscreen', 
    'priority'    => 10, 
    'choices'     => array( 
        'fullscreen'   => get_template_directory_uri() . '/images/customizer/1col.png', 
        'boxed'    => get_template_directory_uri() . '/images/customizer/3cm.png', 
    ), 
) ); 

Kirki::add_field( 'theretailer', array(
    'type'        => 'slider',
    'settings'    => 'boxed_layout_width',
    'label'       => __( 'Boxed Layout Width', 'theretailer' ),
    'section'     => $section,
    'default'     => 1100,
    'priority'    => 10,
    'choices'     => array(
        'min'  => 980,
        'max'  => 1600,
        'step' => 1
    ),
    'active_callback'    => array(
        array(
            'setting'  => 'gb_layout',
            'operator' => '==',
            'value'    => 'boxed',     
        ),
    )
) );

//==============================================================================
//  Site Background
//==============================================================================
Kirki::add_field( 'theretailer', array(
    'type'        => 'color',
    'settings'    => 'main_bg_color',
    'label'       => esc_attr__( 'Background Color', 'theretailer' ),
    'section'     => $section,
    'default'     => '#fff',
    'priority'    => 10,
    'active_callback'    => array(
        array(
            'setting'  => 'gb_layout',
            'operator' => '==',
            'value'    => 'boxed',     
        ),
    )
) );

Kirki::add_field( 'theretailer', array(
    'type'        => 'image',
    'settings'    => 'main_bg',
    'label'       => esc_attr__( 'Background Image', 'theretailer' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
    'active_callback'    => array(
        array(
            'setting'  => 'gb_layout',
            'operator' => '==',
            'value'    => 'boxed',     
        ),
    )
) ); 

Kirki::add_field( 'theretailer', array(
    'type'        => 'custom',
    'default'     => '<hr />',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section
) );

Kirki::add_field( 'theretailer', array(
    'type'        => 'toggle',
    'settings'    => 'page_comments',
    'label'       => esc_attr__( 'Comments on Pages', 'theretailer' ),
    'section'     => $section,
    'default'     => false,
    'priority'    => 10
) );

Kirki::add_field( 'theretailer', array(
    'type'        => 'custom',
    'default'     => '<hr />',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section
) );

Kirki::add_field( 'theretailer', array(
    'type'        => 'toggle',
    'settings'    => 'progress_bar',
    'label'       => esc_attr__( 'Progress Bar', 'theretailer' ),
    'section'     => $section,
    'default'     => false,
    'priority'    => 10
) );

Kirki::add_field( 'theretailer', array(
    'type'        => 'custom',
    'default'     => '<hr />',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section
) );

Kirki::add_field( 'theretailer', array(
    'type'        => 'color',
    'settings'    => 'accent_color',
    'label'       => esc_attr__( 'Main Theme Color / Accent Color', 'theretailer' ),
    'section'     => $section,
    'default'     => '#b39964',
    'priority'    => 10,
) );

