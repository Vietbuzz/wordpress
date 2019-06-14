<?php 

$section = 'product';
$sep_id  = 5000;

// Product Page

Kirki::add_field( 'theretailer', array( 
    'type'        => 'toggle', 
    'settings'    => 'products_layout', 
    'label'       => esc_attr__( 'Product Page Sidebar', 'theretailer' ), 
    'section'     => $section, 
    'default'     => 0, 
    'priority'    => 10, 
) ); 

Kirki::add_field( 'theretailer', array(
    'type'        => 'custom',
    'default'      => '<hr />',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
) );           

Kirki::add_field( 'theretailer', array(
    'type'        => 'toggle',
    'settings'    => 'product_image_zoom',
    'label'       => esc_attr__( 'Product Image Zoom', 'theretailer' ),
    'section'     => $section,
    'default'     => true,
    'priority'    => 10
) );

Kirki::add_field( 'theretailer', array(
    'type'        => 'custom',
    'default'      => '<hr />',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
) );                     

Kirki::add_field( 'theretailer', array(
    'type'        => 'toggle',
    'settings'    => 'reviews_on_product_page',
    'label'       => esc_attr__( 'Product Reviews', 'theretailer' ),
    'section'     => $section,
    'default'     => true,
    'priority'    => 10
) );

Kirki::add_field( 'theretailer', array(
    'type'        => 'custom',
    'default'      => '<hr />',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
) );           

Kirki::add_field( 'theretailer', array(
    'type'        => 'toggle',
    'settings'    => 'related_products_on_product_page',
    'label'       => esc_attr__( 'Related Products', 'theretailer' ),
    'section'     => $section,
    'default'     => true,
    'priority'    => 10
) );
