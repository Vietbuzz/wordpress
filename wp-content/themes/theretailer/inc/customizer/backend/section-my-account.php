<?php 

$section = 'my-account';
$sep_id  = 10000;

Kirki::add_field( 'theretailer', array(
    'type'        => 'dropdown',
    'settings'    => 'registration_dropdown',
    'section'     => $section,
    'label'       => __( 'Registration', 'theretailer' ),
    'priority'    => 10,
));

Kirki::add_field( 'theretailer', array(
    'type'        => 'editor',
    'settings'    => 'registration_content',
    'section'     => $section,
    'label'       => __( 'Registration &#8212; Content', 'theretailer' ),
    'priority'    => 10,
    'default'     => __( '<h3>Your Registration text here</h3>
                        <ul>
                        <li>Your text here</li>
                        <li>Your text here</li>
                        <li>Your text here</li>
                        <li>Your text here</li>
                        </ul>', 'theretailer')
)); 

Kirki::add_field( 'theretailer', array(
    'type'        => 'dropdown',
    'settings'    => 'login_dropdown',
    'section'     => $section,
    'label'       => __( 'Login', 'theretailer' ),
    'priority'    => 10,
));

Kirki::add_field( 'theretailer', array(
    'type'        => 'editor',
    'settings'    => 'login_content',
    'section'     => $section,
    'label'       => __( 'Login &#8212; Content', 'theretailer' ),
    'priority'    => 10,
    'default'     => __( '<h3>Your Login text here</h3>
                        <ul>
                        <li>Your text here</li>
                        <li>Your text here</li>
                        <li>Your text here</li>
                        <li>Your text here</li>
                        </ul>', 'theretailer')
)); 
