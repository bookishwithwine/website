<?php
/**
 * Ocelot: Recent & Random Posts Block
 *
 * Widget show the Recent & Random posts all posts.
 *
 * @package Sparkle Themes
 * @subpackage Ocelot
 * @since 1.0.0
 */

class Ocelot_Recent_Random_Block_Posts extends WP_widget {

	/**
     * Register widget with WordPress.
     */
    public function __construct() {

        $widget_ops = array( 
            'classname' => 'ocelot_recent_block clearfix',
            'description' => esc_html__( 'Displays recent and random posts from all list posts.', 'ocelot' )
        );

        parent::__construct( 'ocelot_recent_block', esc_html__( 'Ocelot: Recent & Random Posts', 'ocelot' ), $widget_ops );
    }

    /**
     * Helper function that holds widget fields
     * Array is used in update and form functions
     */
    private function widget_fields() {
        
        $fields = array(

            'block_title' => array(
                'ocelot_widgets_name'         => 'block_title',
                'ocelot_widgets_title'        => esc_html__( 'Block Layout Title', 'ocelot' ),
                'ocelot_widgets_description'  => esc_html__( 'Enter your block title. (Optional - Leave blank to hide the title.)', 'ocelot' ),
                'ocelot_widgets_field_type'   => 'text'
            ),

            'block_posts_count' => array(
                'ocelot_widgets_name'         => 'block_posts_count',
                'ocelot_widgets_title'        => esc_html__( 'Number of Posts', 'ocelot' ),
                'ocelot_widgets_default'      => '5',
                'ocelot_widgets_field_type'   => 'number'
            ),

            'block_posts_type' => array(
                'ocelot_widgets_name'          => 'block_posts_type',
                'ocelot_widgets_title'         => esc_html__('Choose Posts Options', 'ocelot'),
                'ocelot_widgets_default'      => 'desc',
                'ocelot_widgets_field_type'   => 'select',
                'ocelot_widgets_field_options' => array('desc' => 'Latest Posts', 'rand' => 'Random Posts')
            )

        );

        return $fields;
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget( $args, $instance ) {

        extract( $args );
        if( empty( $instance ) ) {
            return ;
        }

        $ocelot_block_title    = apply_filters( 'widget_title', !empty( $instance['block_title'] ) ? $instance['block_title'] : '', $instance, $this->id_base );
        $ocelot_posts_count    = empty( $instance['block_posts_count'] ) ? 5 : $instance['block_posts_count'];
        $ocelot_posts_type     = empty( $instance['block_posts_type'] ) ? 'desc' : $instance['block_posts_type'];

        $ocelot_block_args = array(
            'orderby'        => $ocelot_posts_type,
            'posts_per_page' => absint( $ocelot_posts_count )
        );

        $ocelot_block_query = new WP_Query( $ocelot_block_args );

        echo $before_widget;

        if ( ! empty( $ocelot_block_title ) ) {
            echo $args['before_title'] . esc_html( $ocelot_block_title ) . $args['after_title'];
        }

        if( $ocelot_block_query->have_posts() ) {

        echo '<div class="ocelot_relatedpost_widget">';

        while( $ocelot_block_query->have_posts() ) { $ocelot_block_query->the_post();

    ?>
        
        <div class="boxes_holder ocelot-clearfix">
            <div class="left_box">
                <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
                    <?php
                        the_post_thumbnail('ocelot-list-post');
                    ?>
                </a>
            </div>

            <div class="right_box">

                <div class="post_title">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                </div>

                <div class="entry-meta info">
                    <?php
                        craft_blog_posted_on();
                        craft_blog_posted_by();
                        craft_blog_comments();
                    ?>
                </div><!-- .entry-meta -->

            </div>
        </div>

    <?php }

        echo '</div>';

    } wp_reset_postdata();

        echo $after_widget;
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param   array   $new_instance   Values just sent to be saved.
     * @param   array   $old_instance   Previously saved values from database.
     *
     * @uses    ocelot_widgets_updated_field_value()     defined in ocelot-widget-fields.php
     *
     * @return  array Updated safe values to be saved.
     */
    public function update( $new_instance, $old_instance ) {

        $instance = $old_instance;

        $widget_fields = $this->widget_fields();

        // Loop through fields
        foreach ( $widget_fields as $widget_field ) {

            extract( $widget_field );

            // Use helper function to get updated field values
            $instance[$ocelot_widgets_name] = ocelot_widgets_updated_field_value( $widget_field, $new_instance[$ocelot_widgets_name] );
        }

        return $instance;
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param   array $instance Previously saved values from database.
     *
     * @uses    ocelot_widgets_show_widget_field()       defined in ocelot-widget-fields.php
     */
    public function form( $instance ) {
        
        $widget_fields = $this->widget_fields();

        // Loop through fields
        foreach ( $widget_fields as $widget_field ) {

            // Make array elements available as variables
            extract( $widget_field );
            $ocelot_widgets_field_value = !empty( $instance[$ocelot_widgets_name] ) ? wp_kses_post( $instance[$ocelot_widgets_name] ) : '';
            ocelot_widgets_show_widget_field( $this, $widget_field, $ocelot_widgets_field_value );
        }
    }
}