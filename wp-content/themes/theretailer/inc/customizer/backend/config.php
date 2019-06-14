<?php
// ==================================================================
// Remove Customize Pages
// ==================================================================
add_action('admin_menu', 'remove_customize_pages');
function remove_customize_pages(){
    global $submenu;
    unset($submenu['themes.php'][15]); // remove Header link
    unset($submenu['themes.php'][20]); // remove Background link
}

// ==================================================================
// Control Config
// ==================================================================
Kirki::add_config( 'theretailer', array(
    'capability'    => 'edit_theme_options',
    'option_type'   => 'theme_mod',
) );

// ==================================================================
// Custom Controls
// ==================================================================

add_action( 'customize_register', function( $wp_customize ) {

    class Kirki_Control_Dropdown extends Kirki_Control_Base {
        public $type = 'dropdown';
        public function render_content() { ?>
            <div class="dropdown-control"><h3><?php echo esc_html($this->label); ?></h3></div>
            <?php
        }
    }

    add_filter( 'kirki_control_types', function( $controls ) {
        $controls['dropdown'] = 'Kirki_Control_Dropdown';
        return $controls;
    } );

} );

add_action( 'admin_enqueue_scripts', 'theretailer_enqueue_dropdown_control' );
function theretailer_enqueue_dropdown_control() {
    wp_enqueue_script( 'theretailer-dropdown-scripts',  get_template_directory_uri() . '/inc/customizer/assets/js/dropdown.js',     array( 'jquery' ), getbowtied_theme_version(), false );
    wp_enqueue_script( 'theretailer-gotopage-scripts',  get_template_directory_uri() . '/inc/customizer/assets/js/go-to-page.js',   array( 'jquery' ), getbowtied_theme_version(), false );
    wp_enqueue_style(  'theretailer-dropdown-styles',   get_template_directory_uri() . '/inc/customizer/assets/css/dropdown.css',   array(),           getbowtied_theme_version(), false );
}

add_action( 'wp_enqueue_scripts', 'theretailer_enqueue_kirki_settings' );
function theretailer_enqueue_kirki_settings() {
    wp_enqueue_style(  'theretailer-kirki-styles',   get_template_directory_uri() . '/inc/customizer/assets/css/settings.css', array(),          getbowtied_theme_version(), false );
}

// ==================================================================
// Custom Fonts
// ==================================================================
function getbowtied_custom_fonts_to_kirki( $fonts ) {

        $fonts = array();

        $fonts["Radnika Next Alt"] = array(
            "label" => "Radnika Next Alt",
            "stack" => "Radnika Next Alt"
        );

        $fonts["HK Nova"] = array(
            "label" => "HK Nova",
            "stack" => "HK Nova",
        );

        $fonts["Arial, Helvetica, sans-serif"] = array(
            "label" => "Arial, Helvetica, sans-serif",
            "stack" => "Arial, Helvetica, sans-serif",
        );

        $fonts["Arial Black, Gadget, sans-serif"] = array(
            "label" => "Arial Black, Gadget, sans-serif",
            "stack" => "Arial Black, Gadget, sans-serif",
        );

        $fonts["Bookman Old Style, serif"] = array(
            "label" => "Bookman Old Style, serif",
            "stack" => "Bookman Old Style, serif",
        );

        $fonts["Comic Sans MS, cursive"] = array(
            "label" => "Comic Sans MS, cursive",
            "stack" => "Comic Sans MS, cursive",
        );

        $fonts["Courier, monospace"] = array(
            "label" => "Courier, monospace",
            "stack" => "Courier, monospace",
        );

        $fonts["Garamond, serif" ] = array(
            "label" => "Garamond, serif" ,
            "stack" => "Garamond, serif" ,
        );

        $fonts["Georgia, serif"] = array(
            "label" => "Georgia, serif",
            "stack" => "Georgia, serif",
        );

        $fonts["Impact, Charcoal, sans-serif"] = array(
            "label" => "Impact, Charcoal, sans-serif",
            "stack" => "Impact, Charcoal, sans-serif",
        );

        $fonts["Lucida Console, Monaco, monospace"] = array(
            "label" => "Lucida Console, Monaco, monospace",
            "stack" => "Lucida Console, Monaco, monospace",
        );

        $fonts["MS Sans Serif, Geneva, sans-serif"] = array(
            "label" => "MS Sans Serif, Geneva, sans-serif",
            "stack" => "MS Sans Serif, Geneva, sans-serif",
        );

        $fonts["MS Serif, New York, sans-serif"] = array(
            "label" => "MS Serif, New York, sans-serif",
            "stack" => "MS Serif, New York, sans-serif",
        );

        $fonts["Palatino Linotype, Book Antiqua, Palatino, serif"] = array(
            "label" => "Palatino Linotype, Book Antiqua, Palatino, serif",
            "stack" => "Palatino Linotype, Book Antiqua, Palatino, serif",
        );

        $fonts["Tahoma,Geneva, sans-serif"] = array(
            "label" => "Tahoma,Geneva, sans-serif",
            "stack" => "Tahoma,Geneva, sans-serif",
        );

        $fonts["Times New Roman, Times,serif" ] = array(
            "label" => "Times New Roman, Times,serif" ,
            "stack" => "Times New Roman, Times,serif" ,
        );

        $fonts["Trebuchet MS, Helvetica, sans-serif"] = array(
            "label" => "Trebuchet MS, Helvetica, sans-serif",
            "stack" => "Trebuchet MS, Helvetica, sans-serif",
        );

        $fonts["Verdana, Geneva, sans-serif" ] = array(
            "label" => "Verdana, Geneva, sans-serif" ,
            "stack" => "Verdana, Geneva, sans-serif" ,
        );

        return $fonts;
}
add_filter( 'kirki/fonts/standard_fonts', 'getbowtied_custom_fonts_to_kirki' );

//==============================================================================
//  Go To Page
//==============================================================================
if ( ! function_exists( 'get_section_url' ) ) :

    function get_section_url() {

        switch($_POST['page']) {
            case 'shop': 
                echo get_permalink( wc_get_page_id( 'shop' ) ); 
                break;
            case 'blog': 
                echo get_permalink( get_option( 'page_for_posts' ) ); 
                break;
            case 'product': 
                $args = array('orderby' => 'rand', 'limit' => 1); 
                $product = wc_get_products($args); 
                echo get_permalink( $product[0]->get_id() ); 
                break;
            default:
                echo get_home_url();
                break;
        }
        exit();
    }
    
    add_action( 'wp_ajax_get_section_url', 'get_section_url' );

endif;
