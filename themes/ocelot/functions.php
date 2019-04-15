<?php
/**
 * Describe child theme functions
 *
 * @package Craft Blog
 * @subpackage Ocelot
 * 
 */

if ( ! function_exists( 'ocelot_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function ocelot_setup() {
        
        $ocelot_theme_info = wp_get_theme();
        $GLOBALS['ocelot_version'] = $ocelot_theme_info->get( 'Version' );

        add_image_size('ocelot-full-slider', 1350, 550, true);   // Full Slider
        add_image_size('ocelot-list-post', 370, 400, true);   // Full Slider
    }
endif;
add_action( 'after_setup_theme', 'ocelot_setup' );


/**
 * Managed the theme default color
 */
function ocelot_customize_register( $wp_customize ) {

		global $wp_customize;

        $wp_customize->remove_section('header_image');

        /**
          * Theme Primary Color
        */
        $wp_customize->add_setting('ocelot_primary_theme_color_options', array(
            'default' => '#e74c3c',
            'sanitize_callback' => 'sanitize_hex_color',        
        ));

        $wp_customize->add_control('ocelot_primary_theme_color_options', array(
            'type'     => 'color',
            'label'    => esc_html__('Primary Colors', 'ocelot'),
            'section'  => 'colors'
        ));


        $wp_customize->add_setting( 'craft_blog_blog_display_layout_options', 
            array(
                'default'           => 'masonry2-rsidebar',
                'sanitize_callback' => 'craft_blog_sanitize_select'
            ) 
        );

	}

add_action( 'customize_register', 'ocelot_customize_register', 20 );


/**
 * Enqueue child theme styles and scripts
 */
add_action( 'wp_enqueue_scripts', 'ocelot_scripts', 20 );

function ocelot_scripts() {
    
    global $ocelot_version;
    
    wp_dequeue_style( 'craft-blog-style' );
    
	wp_enqueue_style( 'ocelot-parent-style', trailingslashit( esc_url ( get_template_directory_uri() ) ) . '/style.css', array(), esc_attr( $ocelot_version ) );

    wp_enqueue_style( 'ocelot-style', get_stylesheet_uri(), array(), esc_attr( $ocelot_version ) );

    //Load Custom JavScript Library File
    wp_enqueue_script( 'ocelot-custom', trailingslashit( esc_url ( get_stylesheet_directory_uri() ) ) . '/js/ocelot-custom.js', array('jquery','jquery-ui-tabs' ) );
    
    $ocelot_primary_theme_color = get_theme_mod( 'ocelot_primary_theme_color_options', '#e74c3c' );
    
    $output_css = '';
    

    $output_css .= ".sociallink ul li a, .btn.btn-primary, .lSAction>a:hover, .calendar_wrap caption, .wpcf7 input[type='submit'], .wpcf7 input[type='button'], .aboutAuthor .infos .btns .btn.btn-color-full:hover, button, input[type='button'], input[type='reset'], input[type='submit'], .reply .comment-reply-link, .page-header span, .widget_search .search-submit, .widget_product_search input[type='submit'], .nav-menu > li.current-menu-item:after{ background-color: ". esc_attr( $ocelot_primary_theme_color ) ."}\n";
   
    $output_css .= ".sociallink ul li a:hover, .main-navigation .current-menu-item a, .main-navigation a:hover, .ol-fullslider .ol-caption h2 a:hover, .ol-fullslider .ol-caption .entry-meta div:hover, .ol-fullslider .ol-caption .entry-meta.info div a:hover, .btn.btn-primary:hover, .article .title:hover a, .widget a:hover, .widget a:hover::before, .widget li:hover::before, .page-numbers.current, .page-numbers:hover, .footer-socials a:hover, .footer-copyright a:hover, .scrolltop:hover, .scrolltop, .breadcrumbs .trail-items li a, .wpcf7 input[type='submit']:hover, .wpcf7 input[type='button']:hover, .prevNextArticle a:hover, .logged-in-as a, button, input[type='button']:hover, input[type='reset']:hover, input[type='submit']:hover, .not-found .page-header h1, .footer-widgets .widget a:hover, .footer-widgets .widget a:hover::before, .footer-widgets .widget li:hover::before{ color: ". esc_attr( $ocelot_primary_theme_color ) ."}\n";
    
    $output_css .= ".sociallink ul li a, .sociallink ul li a:hover, .btn.btn-primary, .btn.btn-primary:hover, .wpcf7 input[type='submit'], .wpcf7 input[type='button'], .wpcf7 input[type='submit']:hover, .wpcf7 input[type='button']:hover, .aboutAuthor .infos .btns .btn.btn-color-full:hover, .prevNextArticle .hoverExtend.active span, button, input[type='button'], input[type='reset'], input[type='submit'], button, input[type='button']:hover, input[type='reset']:hover, input[type='submit']:hover, .footer-widgets .widget h2.widget-title:before{ border-color: ". esc_attr( $ocelot_primary_theme_color ) ."}\n";
                
    wp_add_inline_style( 'ocelot-style', $output_css );
    
}


/**
 * Enqueue scripts and styles for only admin
 *
 * @since 1.0.0
 */
function ocelot_admin_scripts( $hook ) {

    if( 'widgets.php' != $hook && 'customize.php' != $hook && 'edit.php' != $hook && 'post.php' != $hook && 'post-new.php' != $hook ) {
        return;
    }
    
    wp_enqueue_script( 'ocelot-admin-script', get_stylesheet_directory_uri() .'/js/ocelot-admin.js', array( 'jquery' ), true );

    wp_enqueue_style( 'ocelot-admin-style', get_stylesheet_directory_uri() . '/css/ocelot-admin.css' );
}
add_action( 'admin_enqueue_scripts', 'ocelot_admin_scripts' );


/**
 * Register different widgets
 *
 * @since 1.0.0
 */
if( !function_exists( 'ocelot_register_widgets' ) ) :

    function ocelot_register_widgets() {

        /**
         * Recent & Random Posts
        */
        register_widget( 'Ocelot_Recent_Random_Block_Posts' );

        /**
         * Popular / Tags / Comments Tabs Block Posts
        */
        register_widget( 'Ocelot_Tabbed_Block_Posts' );

        /**
         * About Us Block Posts
        */
        register_widget( 'Ocelot_About_Us' );

    }
    add_action( 'widgets_init', 'ocelot_register_widgets' );
    
endif;

/**
 * Un Register Parent Widget
*/
function Ocelot_unregister_a_widget() {

    // Remove Parent Widget
    unregister_widget('Craft_Blog_Recent_Random_Block_Posts');
    unregister_widget('Craft_Blog_Tabbed_Block_Posts');
    unregister_widget('Craft_Blog_About_Us');

}
add_action( 'widgets_init', 'Ocelot_unregister_a_widget', 99 );


/**
 * Load Widget function file
 */
require get_stylesheet_directory() .'/widgets/widget-fields.php';

/**
 * Load Custom Widget File
*/
require get_stylesheet_directory() . '/widgets/recent-random-posts.php';
require get_stylesheet_directory() . '/widgets/tabbed.php';
require get_stylesheet_directory() . '/widgets/aboutus-block.php';



