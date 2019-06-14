<?php 

$section = 'footer';
$sep_id = 3000;

Kirki::add_field( 'theretailer', array(
    'type'        => 'dropdown',
    'settings'    => 'footer_dropdown',
    'section'     => $section,
    'label'       => __( 'Mobile', 'theretailer' ),
    'priority'    => 10,
));

Kirki::add_field( 'theretailer', array(
    'type'        => 'toggle',
    'settings'    => 'expandable_footer_mobiles',
    'label'       => esc_attr__( 'Expandable Footer on Mobiles', 'theretailer' ),
    'section'     => $section,
    'default'     => true,
    'priority'    => 10
) );

//==============================================================================
//  Light Footer
//==============================================================================
Kirki::add_field( 'theretailer', array(
    'type'        => 'dropdown',
    'settings'    => 'light_footer_dropdown',
    'section'     => $section,
    'label'       => __( 'Light Footer', 'theretailer' ),
    'priority'    => 10,
));                    

Kirki::add_field( 'theretailer', array( 
    'type'        => 'radio-image', 
    'settings'    => 'light_footer_all_site', 
    'label'       => esc_attr__( 'Show Light Footer', 'theretailer' ), 
    'section'     => $section, 
    'default'     => '0', 
    'priority'    => 10, 
    'choices'     => array( 
        '0'   => get_template_directory_uri() . '/images/customizer/light_footer_with.png', 
        '1'   => get_template_directory_uri() . '/images/customizer/light_footer_without.png', 
    ), 
) ); 

Kirki::add_field( 'theretailer', array(
    'type'        => 'custom',
    'default'      => '<hr />',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
    'active_callback'    => array(
        array(
            'setting'  => 'light_footer_all_site',
            'operator' => '==',
            'value'    => 0,     
        ),
    )
) );

Kirki::add_field( 'theretailer', array( 
    'type'        => 'radio-image', 
    'settings'    => 'light_footer_layout', 
    'label'       => esc_attr__( 'Light Footer Layout', 'theretailer' ), 
    'section'     => $section, 
    'default'     => '4col', 
    'priority'    => 10, 
    'choices'     => array( 
        '4col'   => get_template_directory_uri() . '/images/customizer/light_footer_4_col.png', 
        '3col'   => get_template_directory_uri() . '/images/customizer/light_footer_3_col.png', 
    ), 
    'active_callback'    => array(
        array(
            'setting'  => 'light_footer_all_site',
            'operator' => '==',
            'value'    => 0,     
        ),
    )
) );         

Kirki::add_field( 'theretailer', array(
    'type'        => 'custom',
    'default'      => '<hr />',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
    'active_callback'    => array(
        array(
            'setting'  => 'light_footer_all_site',
            'operator' => '==',
            'value'    => 0,     
        ),
    )
) );      

Kirki::add_field( 'theretailer', array(
    'type'        => 'color',
    'settings'    => 'primary_footer_bg_color',
    'label'       => esc_attr__( 'Light Footer Background Color', 'theretailer' ),
    'section'     => $section,
    'default'     => '#f4f4f4',
    'priority'    => 10,
    'active_callback'    => array(
        array(
            'setting'  => 'light_footer_all_site',
            'operator' => '==',
            'value'    => 0,     
        ),
    )
) );             

//==============================================================================
//  Dark Footer
//==============================================================================
Kirki::add_field( 'theretailer', array(
    'type'        => 'dropdown',
    'settings'    => 'dark_footer_dropdown',
    'section'     => $section,
    'label'       => __( 'Dark Footer', 'theretailer' ),
    'priority'    => 10,
));                    

Kirki::add_field( 'theretailer', array( 
    'type'        => 'radio-image', 
    'settings'    => 'dark_footer_all_site', 
    'label'       => esc_attr__( 'Show Dark Footer', 'theretailer' ), 
    'section'     => $section, 
    'default'     => '0', 
    'priority'    => 10, 
    'choices'     => array( 
        '0'   => get_template_directory_uri() . '/images/customizer/dark_footer_with.png', 
        '1'   => get_template_directory_uri() . '/images/customizer/dark_footer_without.png', 
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
    'settings'    => 'dark_footer_layout', 
    'label'       => esc_attr__( 'Dark Footer Layout', 'theretailer' ), 
    'section'     => $section, 
    'default'     => '4col', 
    'priority'    => 10, 
    'choices'     => array( 
        '4col'   => get_template_directory_uri() . '/images/customizer/dark_footer_4_col.png', 
        '3col'   => get_template_directory_uri() . '/images/customizer/dark_footer_3_col.png', 
    ), 
    'active_callback'    => array(
        array(
            'setting'  => 'dark_footer_all_site',
            'operator' => '==',
            'value'    => 0,     
        ),
    )
) );           

Kirki::add_field( 'theretailer', array(
    'type'        => 'custom',
    'default'      => '<hr />',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
    'active_callback'    => array(
        array(
            'setting'  => 'dark_footer_all_site',
            'operator' => '==',
            'value'    => 0,     
        ),
    )
) );    

Kirki::add_field( 'theretailer', array(
    'type'        => 'color',
    'settings'    => 'secondary_footer_bg_color',
    'label'       => esc_attr__( 'Dark Footer Background Color', 'theretailer' ),
    'section'     => $section,
    'default'     => '#000',
    'priority'    => 10,
    'active_callback'    => array(
        array(
            'setting'  => 'dark_footer_all_site',
            'operator' => '==',
            'value'    => 0,     
        ),
    )
) );         

Kirki::add_field( 'theretailer', array(
    'type'        => 'color',
    'settings'    => 'secondary_footer_color',
    'label'       => esc_attr__( 'Dark Footer Text Color', 'theretailer' ),
    'section'     => $section,
    'default'     => '#fff',
    'priority'    => 10,
    'active_callback'    => array(
        array(
            'setting'  => 'dark_footer_all_site',
            'operator' => '==',
            'value'    => 0,     
        ),
    )
) );

Kirki::add_field( 'theretailer', array(
    'type'        => 'custom',
    'default'      => '<hr />',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
    'active_callback'    => array(
        array(
            'setting'  => 'dark_footer_all_site',
            'operator' => '==',
            'value'    => 0,     
        ),
    )
) );

Kirki::add_field( 'theretailer', array(
    'type'        => 'select',
    'settings'    => 'secondary_footer_title_border_style',
    'label'       => __( 'Widget Title Border Style', 'theretailer' ),
    'section'     => $section,
    'default'     => 'solid',
    'priority'    => 10,
    'choices'     => array(
        'none'  =>  'none',
        'solid'  => 'solid',
        'dashed' => 'dashed',
        'dotted' => 'dotted'
    ),
    'active_callback'    => array(
        array(
            'setting'  => 'dark_footer_all_site',
            'operator' => '==',
            'value'    => 0,     
        ),
    )
) );  

Kirki::add_field( 'theretailer', array(
    'type'        => 'slider',
    'settings'    => 'secondary_footer_title_border_width',
    'label'       => __( 'Widget Title Border Width', 'theretailer' ),
    'section'     => $section,
    'default'     => 2,
    'priority'    => 10,
    'choices'     => array(
        'min'  => 1,
        'max'  => 20,
        'step' => 1
    ),
    'active_callback'    => array(
        array(
            'setting'  => 'dark_footer_all_site',
            'operator' => '==',
            'value'    => 0,     
        ),
        array(
            'setting'  => 'secondary_footer_title_border_style',
            'operator' => '!=',
            'value'    => 'none', 
        )
    )
) );

Kirki::add_field( 'theretailer', array(
    'type'        => 'color',
    'settings'    => 'secondary_footer_title_border_color',
    'label'       => esc_attr__( 'Widget Title Border Color', 'theretailer' ),
    'section'     => $section,
    'default'     => '#3d3d3d',
    'priority'    => 10,
    'active_callback'    => array(
        array(
            'setting'  => 'dark_footer_all_site',
            'operator' => '==',
            'value'    => 0,     
        ),
        array(
            'setting'  => 'secondary_footer_title_border_style',
            'operator' => '!=',
            'value'    => 'none', 
        )
    )
) ); 

Kirki::add_field( 'theretailer', array(
    'type'        => 'custom',
    'default'      => '<hr />',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
    'active_callback'    => array(
        array(
            'setting'  => 'dark_footer_all_site',
            'operator' => '==',
            'value'    => 0,     
        ),
    )
) );

Kirki::add_field( 'theretailer', array(
    'type'        => 'color',
    'settings'    => 'secondary_footer_borders_color',
    'label'       => esc_attr__( 'List Separators and Borders', 'theretailer' ),
    'section'     => $section,
    'default'     => '#3d3d3d',
    'priority'    => 10,
) ); 

//==============================================================================
//  Credit Card Icons
//==============================================================================
Kirki::add_field( 'theretailer', array(
    'type'        => 'dropdown',
    'settings'    => 'footer_credit_card_dropdown',
    'section'     => $section,
    'label'       => __( 'Credit Card Icons', 'theretailer' ),
    'priority'    => 10,
));   

Kirki::add_field( 'theretailer', array(
    'type'        => 'image',
    'settings'    => 'footer_logos',
    'section'     => $section,
    'label'       => __( 'Footer Credit Card Icons', 'theretailer' ),
    'priority'    => 10,
    'default'     => get_template_directory_uri() . '/images/customizer/payment_cards.png'
));  

//==============================================================================
//  Copyright Text
//==============================================================================
Kirki::add_field( 'theretailer', array(
    'type'        => 'dropdown',
    'settings'    => 'footer_copyright_dropdown',
    'section'     => $section,
    'label'       => __( 'Copyright Text', 'theretailer' ),
    'priority'    => 10,
));  

Kirki::add_field( 'theretailer', array(
    'type'        => 'textarea',
    'settings'    => 'copyright_text',
    'section'     => $section,
    'label'       => __( 'Footer Copyright Text', 'theretailer' ),
    'priority'    => 10,
    'default'     => __( '&#169; <strong>Get Bowtied</strong> - Elite ThemeForest Author', 'theretailer')
));  

Kirki::add_field( 'theretailer', array(
    'type'        => 'custom',
    'default'      => '<hr />',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
) );

Kirki::add_field( 'theretailer', array(
    'type'        => 'color',
    'settings'    => 'copyright_bar_bg_color',
    'label'       => esc_attr__( 'Copyright Bar Background Color', 'theretailer' ),
    'section'     => $section,
    'default'     => '#000',
    'priority'    => 10,
) ); 

Kirki::add_field( 'theretailer', array(
    'type'        => 'color',
    'settings'    => 'copyright_text_color',
    'label'       => esc_attr__( 'Copyright Bar Text Color', 'theretailer' ),
    'section'     => $section,
    'default'     => '#a8a8a8',
    'priority'    => 10,
) );

Kirki::add_field( 'theretailer', array(
    'type'        => 'custom',
    'default'      => '<hr />',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
) );

Kirki::add_field( 'theretailer', array(
    'type'        => 'select',
    'settings'    => 'copyright_bar_top_border_style',
    'label'       => __( 'Dark Footer Copyright Bar Separator Style', 'theretailer' ),
    'section'     => $section,
    'default'     => 'solid',
    'priority'    => 10,
    'choices'     => array(
        'none'  =>  'none',
        'solid'  => 'solid',
        'dashed' => 'dashed',
        'dotted' => 'dotted'
    ),
    'active_callback'    => array(
        array(
            'setting'  => 'dark_footer_all_site',
            'operator' => '==',
            'value'    => 0,     
        ),
    )
) );  

Kirki::add_field( 'theretailer', array(
    'type'        => 'slider',
    'settings'    => 'copyright_bar_top_border_width',
    'label'       => __( 'Dark Footer Copyright Bar Separator Width', 'theretailer' ),
    'section'     => $section,
    'default'     => 2,
    'priority'    => 10,
    'choices'     => array(
        'min'  => 1,
        'max'  => 20,
        'step' => 1
    ),
    'active_callback'    => array(
        array(
            'setting'  => 'dark_footer_all_site',
            'operator' => '==',
            'value'    => 0,     
        ),
        array(
            'setting'  => 'copyright_bar_top_border_style',
            'operator' => '!=',
            'value'    => 'none', 
        )
    )
) );

Kirki::add_field( 'theretailer', array(
    'type'        => 'color',
    'settings'    => 'copyright_bar_top_border_color',
    'label'       => esc_attr__( 'Dark Footer Copyright Bar Separator Color', 'theretailer' ),
    'section'     => $section,
    'default'     => '#3d3d3d',
    'priority'    => 10,
    'active_callback'    => array(
        array(
            'setting'  => 'dark_footer_all_site',
            'operator' => '==',
            'value'    => 0,     
        ),
        array(
            'setting'  => 'copyright_bar_top_border_style',
            'operator' => '!=',
            'value'    => 'none', 
        )
    )
) ); 
