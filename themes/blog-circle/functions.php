<?php
/**
 *Recommended way to include parent theme styles.
 *(Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
 */
/**
 * Loads the child theme textdomain.
 */
function blog_circle_load_language() {
    load_child_theme_textdomain( 'blog-circle' );
}
add_action( 'after_setup_theme', 'blog_circle_load_language' );

/**
* Enqueue Style
*/
function blog_circle_style() {
    global $gist_theme_options;
    $show_hide_carousel = absint($gist_theme_options['gist-enable-slider']);
       wp_enqueue_style( 'gist-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'blog-circle-style',get_stylesheet_directory_uri() . '/style.css',array('gist-style') );
    wp_enqueue_style('blog-circle-google-fonts', '//fonts.googleapis.com/css?family=Oswald');
    if( 1 == $show_hide_carousel) {
        wp_enqueue_style('slick-css', get_stylesheet_directory_uri() . '/assets/slick/slick.css');
        wp_enqueue_style('slick-theme-css', get_stylesheet_directory_uri() . '/assets/slick/slick-theme.css');
        wp_enqueue_script('slick', get_stylesheet_directory_uri() . '/assets/slick/slick.min.js', array('jquery'), '20151217', true);
        wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/assets/custom.js', array('jquery'), '20151217', true);
    }
}
add_action( 'wp_enqueue_scripts', 'blog_circle_style' );
/**
 * Gist Theme Customizer default value
 *
 * @package Gist
 */
if ( !function_exists('gist_default_theme_options') ) :
    function gist_default_theme_options() {

        $default_theme_options = array(
            'gist-enable-slider'=>0,
            'gist_primary_color' => '#d6002a',
            'gist-footer-copyright'=> esc_html__('All Right Reserved 2018','blog-circle'),
            'gist-footer-gototop' => 1,
            'gist-sticky-sidebar'=> 1,
            'gist-sidebar-options'=>'right-sidebar',
            'gist-font-url'=> esc_url('//fonts.googleapis.com/css?family=Merriweather', 'blog-circle'),
            'gist-font-family' => esc_html__('Merriweather','blog-circle'),
            'gist-font-size'=> 16,
            'gist-font-line-height'=> 2,
            'gist-letter-spacing'=> 0,
            'gist-blog-excerpt-options'=> 'excerpt',
            'gist-blog-excerpt-length'=> 25,
            'gist-blog-featured-image'=> 'full-image',
            'gist-blog-meta-options'=> 1,
            'gist-blog-read-more-options' => esc_html__('Read More','blog-circle'),
            'gist-blog-related-post-options'=> 1,
            'gist-blog-pagination-type-options'=>'numeric',
            'gist-related-post'=> 0,
            'gist-single-featured'=> 1,
            'gist-footer-social' => 0,
            'gist-extra-breadcrumb' => 1,
            'gist-breadcrumb-text' => esc_html__('You Are Here','blog-circle')
        );
        return apply_filters( 'gist_default_theme_options', $default_theme_options );
    }
endif;
/**
 * Add class in post list
 *
 * @since Blog Circle 1.0.0
 *
 */
add_filter('post_class', 'blog_circle_post_column_class');
function blog_circle_post_column_class($classes)
{
    if( !is_singular()){
            $classes[] = 'ct-col-2';
        }
    return $classes;
}

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function blog_circle_customize_register( $wp_customize ) {
    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

    if ( isset( $wp_customize->selective_refresh ) ) {
        $wp_customize->selective_refresh->add_partial( 'blogname', array(
            'selector'        => '.site-title a',
            'render_callback' => 'gist_customize_partial_blogname',
        ) );
        $wp_customize->selective_refresh->add_partial( 'blogdescription', array(
            'selector'        => '.site-description',
            'render_callback' => 'gist_customize_partial_blogdescription',
        ) );
    }

    $default = gist_default_theme_options();
    /*adding sections for footer options*/
        
/*Slider Options*/
        $wp_customize->add_section( 'gist_slider_section', array(
            'priority'       => 20,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => __( 'Slider Section Options', 'blog-circle' ),
            'panel'          => 'gist_panel',
        ) );
        $wp_customize->add_setting( 'gist_theme_options[gist-enable-slider]', array(
            'capability'        => 'edit_theme_options',
            'transport' => 'refresh',
            'default'           => $default['gist-enable-slider'],
            'sanitize_callback' => 'gist_sanitize_checkbox'
        ) );
        $wp_customize->add_control( 'gist_theme_options[gist-enable-slider]', array(
            'label'     => __( 'Enable Slider Section', 'blog-circle' ),
            'description' => __('Show/Hide Slider in Home Page. Latest Post Will display on slider. You can get more setting on Premium Version.', 'blog-circle'),
            'section'   => 'gist_slider_section',
            'settings'  => 'gist_theme_options[gist-enable-slider]',
            'type'      => 'checkbox',
            'priority'  => 15
        ) );     
}
add_action( 'customize_register', 'blog_circle_customize_register' );

/**
 * List categories
 */
if (!function_exists('gist_list_category')) :
    function gist_list_category($post_id = 0)
    {

        if (0 == $post_id) {
            global $post;
            if (isset($post->ID)) {
                $post_id = $post->ID;
            }
        }
        if (0 == $post_id) {
            return null;
        }
        $categories = get_the_category($post_id);
        $separator = '&nbsp;';
        $output = '';
        if ($categories) {
            $output .= '<span class="cat-name">';
            foreach ($categories as $category) {
                $output .= '<a href="' . esc_url(get_category_link($category->term_id)) . '"  rel="category tag">' . esc_html($category->cat_name) . '</a>' . $separator;
            }
            $output .= '</span>';
            echo trim($output, $separator);
        }

    }
endif;

/**
 * Carousel on front page
 */
function blog_circle_get_carousel()
{
        ?>
            <ul class="ct-carousel slider">
                <?php 
                $query_slider = new WP_Query( array( 'posts_per_page' => 6 ) );

                while ($query_slider->have_posts()) : $query_slider->the_post(); ?>
                    <li>
                        <div class="ct-carousel-inner">
                        <a href="<?php the_permalink(); ?>">
                            <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('gist-carousel-img');
                            }
                            ?>
                        </a>

                        <div class="slide-details">
                            <div class="slider-content-inner">
                                <div class="slider-content">
                                    <?php
                                        gist_list_category();
                                    ?>
                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                </div>
                            </div>
                        </div>
                            </div> <!-- .ct-carousel-inner -->
                        <div class="overly"></div>
                    </li>
                <?php endwhile;
                wp_reset_postdata(); ?>
            </ul>
    <?php
}