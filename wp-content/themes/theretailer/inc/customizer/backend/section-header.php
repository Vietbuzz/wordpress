<?php 

$section = 'header';
$sep_id = 4000;

//==============================================================================
//  Logo
//==============================================================================
Kirki::add_field( 'theretailer', array(
    'type'        => 'dropdown',
    'settings'    => 'logo_dropdown',
    'section'     => $section,
    'label'       => __( 'Logo', 'theretailer' ),
    'priority'    => 1,
));

Kirki::add_field( 'theretailer', array(
    'type'        => 'image',
    'settings'    => 'site_logo',
    'section'     => $section,
    'label'       => __( 'Site Logo', 'theretailer' ),
    'priority'    => 1,
    'default'     => ''
));  

Kirki::add_field( 'theretailer', array(
    'type'        => 'custom',
    'default'      => '<hr />',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
    'priority'    => 1,
) );

Kirki::add_field( 'theretailer', array(
    'type'        => 'image',
    'settings'    => 'site_logo_retina',
    'section'     => $section,
    'label'       => __( 'Site Retina Logo ', 'theretailer' ),
    'priority'    => 1,
    'default'     => ''
)); 

//==============================================================================
//   Top Bar
//==============================================================================
Kirki::add_field( 'theretailer', array(
    'type'        => 'dropdown',
    'settings'    => 'top_bar_dropdown',
    'section'     => $section,
    'label'       => __( 'Top Bar', 'theretailer' ),
    'priority'    => 1,
));

Kirki::add_field( 'theretailer', array(
    'type'        => 'toggle',
    'settings'    => 'hide_topbar',
    'label'       => esc_attr__( 'Disable Top Bar', 'theretailer' ),
    'section'     => $section,
    'default'     => false,
    'priority'    => 2,
) );

Kirki::add_field( 'theretailer', array(
    'type'        => 'custom',
    'default'     => '<hr />',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
    'priority'    => 3,
    'active_callback'    => array(
        array(
            'setting'  => 'hide_topbar',
            'operator' => '==',
            'value'    => false,     
        ),
    )
) );

Kirki::add_field( 'theretailer', array(
    'type'     => 'textarea',
    'settings' => 'topbar_text',
    'label'    => __( 'Top Bar Text (c)', 'theretailer' ),
    'section'  => $section,
    'default'  => __( 'FREE SHIPPING ON ALL ORDERS OVER $75', 'theretailer' ),
    'priority' => 4,
    'active_callback'    => array(
        array(
            'setting'  => 'hide_topbar',
            'operator' => '==',
            'value'    => false,     
        ),
    )
) );

Kirki::add_field( 'theretailer', array(
    'type'        => 'custom',
    'default'     => '<hr />',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
    'priority'    => 5,
    'active_callback'    => array(
        array(
            'setting'  => 'hide_topbar',
            'operator' => '==',
            'value'    => false,     
        ),
    )
) );

Kirki::add_field( 'theretailer', array(
    'type'        => 'toggle',
    'settings'    => 'search_input_style',
    'label'       => esc_attr__( 'Search Input Open at All Times', 'theretailer' ),
    'section'     => $section,
    'default'     => false,
    'priority'    => 6,
    'active_callback'    => array(
        array(
            'setting'  => 'hide_topbar',
            'operator' => '==',
            'value'    => false,     
        ),
    )
) );

Kirki::add_field( 'theretailer', array(
    'type'        => 'custom',
    'default'     => '<hr />',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
    'priority'    => 7,
    'active_callback'    => array(
        array(
            'setting'  => 'hide_topbar',
            'operator' => '==',
            'value'    => false,     
        ),
    )
) );

Kirki::add_field( 'theretailer', array(
    'type'        => 'color',
    'settings'    => 'topbar_bg_color',
    'label'       => esc_attr__( 'Top Bar Background Color', 'theretailer' ),
    'section'     => $section,
    'default'     => '#000',
    'priority'    => 8,
    'active_callback'    => array(
        array(
            'setting'  => 'hide_topbar',
            'operator' => '==',
            'value'    => false,     
        ),
    )
) );

Kirki::add_field( 'theretailer', array(
    'type'        => 'color',
    'settings'    => 'topbar_color',
    'label'       => esc_attr__( 'Top Bar Text Color', 'theretailer' ),
    'section'     => $section,
    'default'     => '#FFF',
    'priority'    => 9,
    'active_callback'    => array(
        array(
            'setting'  => 'hide_topbar',
            'operator' => '==',
            'value'    => false,     
        ),
    )
) );

Kirki::add_field( 'theretailer', array(
    'type'        => 'custom',
    'default'     => '<hr />',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
    'priority'    => 10,
    'active_callback'    => array(
        array(
            'setting'  => 'hide_topbar',
            'operator' => '==',
            'value'    => false,     
        ),
    )
) );

Kirki::add_field( 'theretailer', array(
    'type'        => 'slider',
    'settings'    => 'top_bar_font_size',
    'label'       => __( 'Top Bar Font Size', 'theretailer' ),
    'section'     => $section,
    'default'     => 10,
    'priority'    => 10,
    'choices'     => array(
        'min'  => 8,
        'max'  => 16,
        'step' => 1
    ),
    'active_callback'    => array(
        array(
            'setting'  => 'hide_topbar',
            'operator' => '==',
            'value'    => false,     
        ),
    )
) );

//==============================================================================
//  Header
//==============================================================================
Kirki::add_field( 'theretailer', array(
    'type'        => 'dropdown',
    'settings'    => 'header_dropdown',
    'section'     => $section,
    'label'       => __( 'Header', 'theretailer' ),
    'priority'    => 12,
));

Kirki::add_field( 'theretailer', array( 
    'type'        => 'radio-image', 
    'settings'    => 'gb_header_style', 
    'label'       => esc_attr__( 'Header Layout', 'theretailer' ), 
    'section'     => $section, 
    'default'     => '0', 
    'priority'    => 13, 
    'choices'     => array( 
        '0'    => get_template_directory_uri() . '/images/customizer/header_1.png', 
        '1'    => get_template_directory_uri() . '/images/customizer/header_2.png', 
        '2'    => get_template_directory_uri() . '/images/customizer/header_3.png', 
    ), 
) );         

Kirki::add_field( 'theretailer', array(
    'type'        => 'custom',
    'default'     => '<hr />',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
    'priority'    => 14,
) );  

Kirki::add_field( 'theretailer', array(
    'type'        => 'color',
    'settings'    => 'header_bg_color',
    'label'       => esc_attr__( 'Header Background Color', 'theretailer' ),
    'section'     => $section,
    'default'     => '#f4f4f4',
    'priority'    => 15,
) );   

Kirki::add_field( 'theretailer', array(
    'type'        => 'custom',
    'default'     => '<hr />',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
    'priority'    => 16,
) );    

Kirki::add_field( 'theretailer', array(
    'type'        => 'toggle',
    'settings'    => 'sticky_header',
    'label'       => esc_attr__( 'Enable Sticky Header', 'theretailer' ),
    'section'     => $section,
    'default'     => true,
    'priority'    => 17,
) );  

//==============================================================================
//  Main Navigation
//==============================================================================
Kirki::add_field( 'theretailer', array(
    'type'        => 'dropdown',
    'settings'    => 'main_navigation_dropdown',
    'section'     => $section,
    'label'       => __( 'Main Navigation', 'theretailer' ),
    'priority'    => 18,
));

Kirki::add_field( 'theretailer', array(
    'type'        => 'color',
    'settings'    => 'primary_menu_color',
    'label'       => esc_attr__( 'Main Navigation Text Color', 'theretailer' ),
    'section'     => $section,
    'default'     => '#000',
    'priority'    => 19,
) ); 

Kirki::add_field( 'theretailer', array(
    'type'        => 'custom',
    'default'     => '<hr />',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
    'priority'    => 20,
) ); 

Kirki::add_field( 'theretailer', array(
    'type'        => 'slider',
    'settings'    => 'main_navigation_font_size',
    'label'       => __( 'Main Navigation Font Size', 'theretailer' ),
    'section'     => $section,
    'default'     => 12,
    'priority'    => 21,
    'choices'     => array(
        'min'  => 8,
        'max'  => 16,
        'step' => 1
    ),
) );

//==============================================================================
//  Secondary Navigation
//==============================================================================
Kirki::add_field( 'theretailer', array(
    'type'        => 'dropdown',
    'settings'    => 'secondary_navigation_dropdown',
    'section'     => $section,
    'label'       => __( 'Secondary Navigation', 'theretailer' ),
    'priority'    => 22,
));

Kirki::add_field( 'theretailer', array(
    'type'        => 'color',
    'settings'    => 'secondary_menu_color',
    'label'       => esc_attr__( 'Secondary Navigation Text Color', 'theretailer' ),
    'section'     => $section,
    'default'     => '#777',
    'priority'    => 23,
) ); 

Kirki::add_field( 'theretailer', array(
    'type'        => 'custom',
    'default'     => '<hr />',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
    'priority'    => 24,
) ); 

Kirki::add_field( 'theretailer', array(
    'type'        => 'slider',
    'settings'    => 'secondary_navigation_font_size',
    'label'       => __( 'Secondary Navigation Font Size', 'theretailer' ),
    'section'     => $section,
    'default'     => 12,
    'priority'    => 25,
    'choices'     => array(
        'min'  => 8,
        'max'  => 16,
        'step' => 1
    ),
) );

//==============================================================================
//  Header Spacing
//==============================================================================              
Kirki::add_field( 'theretailer', array(
    'type'        => 'dropdown',
    'settings'    => 'header_spacing_dropdown',
    'section'     => $section,
    'label'       => __( 'Header Spacing', 'theretailer' ),
    'priority'    => 26,
));      

Kirki::add_field( 'theretailer', array(
    'type'        => 'slider',
    'settings'    => 'menu_header_top_padding_1_7',
    'label'       => __( 'Spacing Above the Navigation', 'theretailer' ),
    'section'     => $section,
    'default'     => 40,
    'priority'    => 27,
    'choices'     => array(
        'min'  => 0,
        'max'  => 300,
        'step' => 1
    ),
) );

Kirki::add_field( 'theretailer', array(
    'type'        => 'custom',
    'default'     => '<hr />',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
    'priority'    => 28,
) ); 

Kirki::add_field( 'theretailer', array(
    'type'        => 'slider',
    'settings'    => 'menu_header_bottom_padding_1_7',
    'label'       => __( 'Spacing Below the Navigation', 'theretailer' ),
    'section'     => $section,
    'default'     => 40,
    'priority'    => 29,
    'choices'     => array(
        'min'  => 0,
        'max'  => 300,
        'step' => 1
    ),
) );

//==============================================================================
//  Mini Shopping Bag
//==============================================================================              
Kirki::add_field( 'theretailer', array(
    'type'        => 'dropdown',
    'settings'    => 'shopping_bag_dropdown',
    'section'     => $section,
    'label'       => __( 'Mini Shopping Bag', 'theretailer' ),
    'priority'    => 30,
));  

Kirki::add_field( 'theretailer', array(
    'type'        => 'toggle',
    'settings'    => 'shopping_bag_in_header',
    'label'       => esc_attr__( 'Enable Mini Shopping Bag', 'theretailer' ),
    'section'     => $section,
    'default'     => true,
    'priority'    => 31
) );            

Kirki::add_field( 'theretailer', array( 
    'type'        => 'radio-image', 
    'settings'    => 'shopping_bag_style', 
    'label'       => esc_attr__( 'Mini Shopping Bag Style', 'theretailer' ), 
    'section'     => $section, 
    'default'     => 'style2', 
    'priority'    => 32, 
    'choices'     => array( 
        'style1'    => get_template_directory_uri() . '/images/customizer/bag_1.png', 
        'style2'    => get_template_directory_uri() . '/images/customizer/bag_2.png', 
    ), 
    'active_callback'    => array(
        array(
            'setting'  => 'gb_header_style',
            'operator' => '!=',
            'value'    => 1,     
        ),
        array(
            'setting'  => 'shopping_bag_in_header',
            'operator' => '==',
            'value'    => true,     
        ),
    )
) );         