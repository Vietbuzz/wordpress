<?php

$section = 'fonts';
$sep_id = 2000;

Kirki::add_field( 'theretailer', array(
    'type'        => 'typography',
    'settings'    => 'new_gb_main_font',
    'label'       => esc_attr__( 'Main Font', 'theretailer' ),
    'section'     => $section,
    'default'     => array(
        'font-family'    => 'Radnika Next Alt',
        // 'variant'        => 'regular',
        // 'subsets'        => array( 'latin' ),
    ),
) );

Kirki::add_field( 'theretailer', array(
    'type'        => 'custom',
    'default'     => '<hr />',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section
) );

Kirki::add_field( 'theretailer', array(
    'type'        => 'typography',
    'settings'    => 'new_gb_secondary_font',
    'label'       => esc_attr__( 'Secondary Font', 'theretailer' ),
    'section'     => $section,
    'default'     => array(
        'font-family'    => 'HK Nova',
        // 'variant'        => 'regular',
        // 'subsets'        => array( 'latin' ),
    ),
) );

Kirki::add_field( 'theretailer', array(
    'type'        => 'custom',
    'default'      => '<hr />',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
) );

Kirki::add_field( 'theretailer', array(
    'type'        => 'color',
    'settings'    => 'primary_color',
    'label'       => esc_attr__( 'Primary Font Color', 'theretailer' ),
    'section'     => $section,
    'default'     => '#000',
    'priority'    => 10,
) );                                