<?php 

$section = 'shop';
$sep_id  = 6000;

Kirki::add_field( 'theretailer', array(
    'type'        => 'toggle',
    'settings'    => 'catalog_mode',
    'label'       => esc_attr__( 'Catalog Mode', 'theretailer' ),
    'description' => __( 'When enabled, the feature turns off the shopping functionality of WooCommerce by hiding the mini cart in the header and the add-to-cart buttons for products.' ),
    'section'     => $section,
    'default'     => false,
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
    'settings'    => 'sidebar_listing',
    'label'       => esc_attr__( 'Shop Sidebar', 'theretailer' ),
    'section'     => $section,
    'default'     => 0,
    'priority'    => 10
) );

Kirki::add_field( 'theretailer', array(
    'type'        => 'custom',
    'default'     => '<hr />',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
) );
                
Kirki::add_field( 'theretailer', array( 
    'type'        => 'radio-image', 
    'settings'    => 'flip_product', 
    'label'       => esc_attr__( 'Flipping Products Animation', 'theretailer' ), 
    'section'     => $section, 
    'default'     => '0', 
    'priority'    => 10, 
    'choices'     => array( 
        '0'   => get_template_directory_uri() . '/images/customizer/flip_product_enabled.png', 
        '1'   => get_template_directory_uri() . '/images/customizer/flip_product_disabled.png', 
    ), 
) );

Kirki::add_field( 'theretailer', array(
    'type'        => 'custom',
    'default'      => '<hr />',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
) );  

Kirki::add_field( 'theretailer', array( 
    'type'        => 'radio-image', 
    'settings'    => 'flip_product_mobiles', 
    'label'       => esc_attr__( 'Flipping Products Animation on Mobile Devices', 'theretailer' ), 
    'section'     => $section, 
    'default'     => '0', 
    'priority'    => 10, 
    'choices'     => array( 
        '0'   => get_template_directory_uri() . '/images/customizer/flip_product_mobiles_enabled.png', 
        '1'   => get_template_directory_uri() . '/images/customizer/flip_product_mobiles_disabled.png', 
    ), 
) ); 

Kirki::add_field( 'theretailer', array(
    'type'        => 'custom',
    'default'      => '<hr />',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
) );

Kirki::add_field( 'theretailer', array( 
    'type'        => 'radio-image', 
    'settings'    => 'category_listing', 
    'label'       => esc_attr__( 'Parent Category on Catalog Pages', 'theretailer' ), 
    'section'     => $section, 
    'default'     => '0', 
    'priority'    => 10, 
    'choices'     => array( 
        '0'   => get_template_directory_uri() . '/images/customizer/category_listing_enabled.png', 
        '1'   => get_template_directory_uri() . '/images/customizer/category_listing_disabled.png', 
    ), 
) ); 

Kirki::add_field( 'theretailer', array(
    'type'        => 'custom',
    'default'      => '<hr />',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
) );

Kirki::add_field( 'theretailer', array(
    'type'        => 'toggle',
    'settings'    => 'ratings_on_product_listing',
    'label'       => esc_attr__( 'Ratings on Catalog Pages', 'theretailer' ),
    'section'     => $section,
    'default'     => false,
    'priority'    => 10
) );

Kirki::add_field( 'theretailer', array( 
    'type'        => 'radio-image', 
    'settings'    => 'ratings_styles', 
    'label'       => esc_attr__( 'Rating Meter Style', 'theretailer' ), 
    'section'     => $section, 
    'default'     => '0', 
    'priority'    => 10, 
    'choices'     => array( 
        '0'   => get_template_directory_uri() . '/images/customizer/rating-dashes.png', 
        '1'   => get_template_directory_uri() . '/images/customizer/rating-stars.png', 
    ), 
) ); 

Kirki::add_field( 'theretailer', array(
    'type'        => 'custom',
    'default'      => '<hr />',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
) );
               
Kirki::add_field( 'theretailer', array(
    'type'        => 'text',
    'settings'    => 'out_of_stock_text',
    'section'     => $section,
    'label'       => __( 'Out of Stock Badge Text', 'theretailer' ),
    'priority'    => 10,
    'default'     => __( 'Out of Stock', 'theretailer')
)); 

Kirki::add_field( 'theretailer', array(
    'type'        => 'custom',
    'default'      => '<hr />',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
) );  

Kirki::add_field( 'theretailer', array(
    'type'        => 'text',
    'settings'    => 'sale_text',
    'section'     => $section,
    'label'       => __( 'Sale Badge Text', 'theretailer' ),
    'priority'    => 10,
    'default'     => __( 'Sale!', 'theretailer')
)); 

Kirki::add_field( 'theretailer', array(
    'type'        => 'custom',
    'default'      => '<hr />',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
) );

Kirki::add_field( 'theretailer', array(
    'type'        => 'toggle',
    'settings'    => 'breadcrumbs',
    'label'       => esc_attr__( 'Breadcrumbs', 'theretailer' ),
    'section'     => $section,
    'default'     => false,
    'priority'    => 10
) );
