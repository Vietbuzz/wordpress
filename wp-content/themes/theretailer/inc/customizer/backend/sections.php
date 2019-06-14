<?php 

Kirki::add_section( 'general', array(
    'title'          => esc_attr__( 'General', 'theretailer' ),
    'priority'       => 1,
    'capability'     => 'edit_theme_options',
) );

Kirki::add_section( 'header', array(
    'title'          => esc_attr__( 'Header', 'theretailer' ),
    'priority'       => 2,
    'capability'     => 'edit_theme_options',
) );

Kirki::add_section( 'footer', array(
    'title'          => esc_attr__( 'Footer', 'theretailer' ),
    'priority'       => 3,
    'capability'     => 'edit_theme_options',
) );

Kirki::add_section( 'blog', array(
    'title'          => esc_attr__( 'Blog', 'theretailer' ),
    'priority'       => 4,
    'capability'     => 'edit_theme_options',
) );

Kirki::add_section( 'shop', array(
    'title'          => esc_attr__( 'Shop', 'theretailer' ),
    'priority'       => 5,
    'capability'     => 'edit_theme_options',
) );

Kirki::add_section( 'product', array(
    'title'          => esc_attr__( 'Product Page', 'theretailer' ),
    'priority'       => 6,
    'capability'     => 'edit_theme_options',
) );

Kirki::add_section( 'my-account', array(
    'title'          => esc_attr__( 'Login', 'theretailer' ),
    'priority'       => 7,
    'capability'     => 'edit_theme_options',
) );

Kirki::add_section( 'styling', array(
    'title'          => esc_attr__( 'Styling', 'theretailer' ),
    'priority'       => 8,
    'capability'     => 'edit_theme_options',
) );

Kirki::add_section( 'fonts', array(
    'title'          => esc_attr__( 'Fonts', 'theretailer' ),
    'priority'       => 9,
    'capability'     => 'edit_theme_options',
) );

require_once 'section-general.php';
require_once 'section-header.php';
require_once 'section-footer.php';
require_once 'section-fonts.php';
require_once 'section-blog.php';
require_once 'section-shop.php';
require_once 'section-product.php';
require_once 'section-my-account.php';