<?php 

$section = 'blog';
$sep_id = 20000;


Kirki::add_field( 'theretailer', array(
    'type'        => 'toggle',
    'settings'    => 'show_full_post',
    'label'       => esc_attr__( 'Full Post on Blog Listing', 'theretailer' ),
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
    'settings'    => 'featured_image_single_post',
    'label'       => esc_attr__( 'Featured Image on Single Post', 'theretailer' ),
    'section'     => $section,
    'default'     => true,
    'priority'    => 10
) );
