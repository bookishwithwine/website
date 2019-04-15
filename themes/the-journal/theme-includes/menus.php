<?php if ( ! defined( 'ABSPATH' ) ) {
	die( 'Direct access forbidden.' );
}
/**
 * Register menus
 */
$menu_locations = array(
	'primary' => esc_html__( 'Top Primary Menu', 'the-journal' ),
);

/**
 * This theme uses wp_nav_menu() in 3 locations.
 */
register_nav_menus( $menu_locations );

global $the_journal_menus;
$the_journal_menus = array(
	'primary' => array(
		'depth'           => 4,
		'container'       => 'nav',
		'container_id'    => 'fw-menu-primary',
		'container_class' => 'fw-site-navigation primary-navigation',
		'menu_class'      => 'fw-nav-menu',
		'theme_location'  => 'primary',
		/*'fallback_cb'     => 'the_journal_select_menu_message',*/
		'fallback_cb'     => '',
		'link_before'     => '<span>',
		'link_after'      => '</span>'
	)
);


if ( ! function_exists( 'the_journal_nav_menu' ) ) :
	/**
	 * Display the nav menu
	 */
	function the_journal_nav_menu( $menu_type ) {
		global $the_journal_menus;
		if ( isset( $the_journal_menus[ $menu_type ] ) ) {
			wp_nav_menu( $the_journal_menus[ $menu_type ] );
		}
	}
endif;


if ( ! function_exists( 'the_journal_select_menu_message' ) ) :
	/**
	 * Display the select menu message
	 */
	function the_journal_select_menu_message() {
		echo '<div class="topmenu"><p class="fw-primary-menu-message">' . esc_html__( 'Please go to the', 'the-journal' ) . ' <a href="' . esc_url( admin_url( 'nav-menus.php' ) ) . '" target="_blanck">' . esc_html__( 'Menu', 'the-journal' ) . '</a> ' . esc_html__( 'section, create a  menu and then select the newly created menu from the Theme Locations box from the left.', 'the-journal' ) . '</p></div>';
	}
endif;