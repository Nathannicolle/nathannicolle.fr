<?php
/**
 * Admin Class
 *
 * Handles the Admin side functionality of plugin
 *
 * @package WP Slick Slider and Image Carousel
 * @since 1.0.0
 */

if ( !defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class Wpsisac_Admin {

	function __construct() {

		// Action to add admin menu
		add_action( 'admin_menu', array($this, 'wpsisac_register_menu'), 12 );

		// Admin init process
		add_action( 'admin_init', array($this, 'wpsisac_admin_init_process') );

		// Admin for the Solutions & Features
		add_action( 'admin_init', array($this, 'wpsisac_admin_init_sf_process') );

		// Action to add metabox
		add_action( 'add_meta_boxes', array($this, 'wpsisac_post_sett_metabox') );

		// Action to save metabox
		add_action( 'save_post_'.WPSISAC_POST_TYPE, array($this, 'wpsisac_save_metabox_value') );

		// Action to add custom column to slide listing
		add_filter( "manage_edit-wpsisac_slider-category_columns", array( $this, 'wpsisac_slider_category_manage_columns') );

		// Action to add custom column data to slide listing
		add_filter( "manage_wpsisac_slider-category_custom_column", array( $this, 'wpsisac_slider_category_columns' ), 10, 3);

		//add_action( 'admin_footer', array( $this, 'wpsisac_upgrade_page_link_blank' ) );

	}

	/**
	 * Function to add menu
	 * 
	 * @package WP Slick Slider and Image Carousel
	 * @since 1.0.0
	 */
	function wpsisac_register_menu() {

		add_submenu_page( 'edit.php?post_type='.WPSISAC_POST_TYPE, __('How it works, our plugins and offers', 'wp-slick-slider-and-image-carousel'), __('How It Works', 'wp-slick-slider-and-image-carousel'), 'manage_options', 'wpsisacm-designs', array($this, 'wpsisacm_designs_page') );

		// Setting page
		add_submenu_page( 'edit.php?post_type='.WPSISAC_POST_TYPE, __('Solutions & Features - WP Slick Slider and Image Carousel', 'wp-slick-slider-and-image-carousel'), '<span style="color:#2ECC71">'. __('Solutions & Features', 'wp-slick-slider-and-image-carousel').'</span>', 'manage_options', 'wpsisac-solutions-features', array($this, 'wpsisac_solutions_features_page') );

		// Register plugin premium page
		add_submenu_page( 'edit.php?post_type='.WPSISAC_POST_TYPE, __('Upgrade To PRO - WP Slick Slider and Image Carousel', 'wp-slick-slider-and-image-carousel'), '<span style="color:#ff2700">'.__('Upgrade To PRO', 'wp-slick-slider-and-image-carousel').'</span>', 'manage_options', 'wpsisac-premium', array($this, 'wpsisac_premium_page') );
		//add_submenu_page( 'edit.php?post_type='.WPSISAC_POST_TYPE, __('Upgrade To PRO - WP Slick Slider and Image Carousel', 'wp-slick-slider-and-image-carousel'), '<span class="wpos-upgrade-pro" style="color:#ff2700">' . __('Upgrade To Premium ', 'wp-slick-slider-and-image-carousel') . '</span>', 'manage_options', 'wpsisac-upgrade-pro', array($this, 'wpsisac_redirect_page') );
		//add_submenu_page( 'edit.php?post_type='.WPSISAC_POST_TYPE, __('Bundle Deal - WP Slick Slider and Image Carousel', 'wp-slick-slider-and-image-carousel'), '<span class="wpos-upgrade-pro" style="color:#ff2700">' . __('Bundle Deal', 'wp-slick-slider-and-image-carousel') . '</span>', 'manage_options', 'wpsisac-bundle-deal', array($this, 'wpsisac_redirect_page') );
	}

	/**
	 * Getting Started Page Html
	 * 
	 * @package WP Slick Slider and Image Carousel
	 * @since 1.0.0
	 */
	function wpsisac_premium_page() {
		include_once( WPSISAC_DIR . '/includes/admin/settings/premium.php' );
	}

	/**
	 * Getting Started Page Html
	 * 
	 * @package WP Slick Slider and Image Carousel
	 * @since 1.0.0
	 */
	function wpsisac_solutions_features_page(){
		include_once( WPSISAC_DIR . '/includes/admin/settings/solutions-features.php' );
	}

	/**
	 * How It Work Page Html
	 * 
	 * @since 1.0
	 */
	// function wpsisac_redirect_page() {
	// }

	/**
	 * How It Work Page Html
	 * 
	 * @since 1.0
	 */
	function wpsisacm_designs_page() {
		include_once( WPSISAC_DIR . '/includes/admin/wpsisac-how-it-work.php' );
	}

	/**
	 * Function to notification transient
	 * 
	 * @package WP Slick Slider and Image Carousel
	 * @since 1.5
	 */
	function wpsisac_admin_init_process() {

		// global $typenow, $pagenow;

		// $current_page = isset( $_REQUEST['page'] ) ? $_REQUEST['page'] : '';

		// If plugin notice is dismissed
	    if( isset($_GET['message']) && $_GET['message'] == 'wpsisac-plugin-notice' ) {
	    	set_transient( 'wpsisac_install_notice', true, 604800 );
	    }

	    // Redirect to external page for upgrade to menu
		// if( $typenow == WPSISAC_POST_TYPE ) {

		// 	if( $current_page == 'wpsisac-upgrade-pro' ) {

		// 		wp_redirect( WPSISAC_PLUGIN_LINK_UPGRADE );
		// 		exit;
		// 	}

		// 	if( $current_page == 'wpsisac-bundle-deal' ) {

		// 		wp_redirect( WPSISAC_PLUGIN_BUNDLE_LINK );
		// 		exit;
		// 	}
		// }
	}

	/**
	 * Admin Prior Process for Solutions & Features Page Redirect
	 * 
	 * @package WP Slick Slider and Image Carousel
	 * @since 2.0.11
	 */
	function wpsisac_admin_init_sf_process() {

		if ( get_option( 'wpsisac_sf_optin', false ) ) {

			delete_option( 'wpsisac_sf_optin' );

			$redirect_link = add_query_arg( array( 'post_type' => WPSISAC_POST_TYPE, 'page' => 'wpsisac-solutions-features' ), admin_url( 'edit.php' ) );

			wp_safe_redirect( $redirect_link );

			exit;
		}
	}

	/**
	 * Post Settings Metabox
	 * 
	 * @package WP Slick Slider and Image Carousel
	 * @since 1.0.0
	 */
	function wpsisac_post_sett_metabox() {
		add_meta_box( 'custom-metabox', __( 'WP Slick Slider and Image Carousel - Settings', 'wp-slick-slider-and-image-carousel' ), array($this, 'wpsisac_post_sett_mb_content'), WPSISAC_POST_TYPE, 'normal', 'high' );

		add_meta_box( 'wpsisac-post-metabox-pro', __('More Premium - Settings', 'wp-slick-slider-and-image-carousel'), array($this, 'wpsisac_post_sett_box_callback_pro'), WPSISAC_POST_TYPE, 'normal', 'high' );
	}

	/**
	 * Post Settings Metabox HTML
	 * 
	 * @package WP Slick Slider and Image Carousel
	 * @since 1.2.5
	 */
	function wpsisac_post_sett_mb_content( $post ) {
		include_once( WPSISAC_DIR .'/includes/admin/metabox/wpsisac-post-metabox.php');
	}

	/**
	 * Function to handle 'premium ' metabox HTML
	 * 
	 * @package WP Slick Slider and Image Carousel
	 * @since 2.4.2
	 */
	function wpsisac_post_sett_box_callback_pro( $post ) {		
		include_once( WPSISAC_DIR .'/includes/admin/metabox/wpsisac-post-setting-metabox-pro.php');
	}

	/**
	 * Function to save metabox values
	 * 
	 * @package WP Slick Slider and Image Carousel
	 * @since 1.2.5
	 */
	function wpsisac_save_metabox_value( $post_id ) {

		global $post_type;

		if ( ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )					// Check Autosave
		|| ( ! isset( $_POST['post_ID'] ) || $post_id != $_POST['post_ID'] )	// Check Revision
		|| ( $post_type !=  WPSISAC_POST_TYPE ) )							// Check if current post type is supported.
		{
			return $post_id;
		}

		// Taking variables
		$read_more_link = isset($_POST['wpsisac_slide_link']) ? wpsisac_get_clean_url( $_POST['wpsisac_slide_link'] )  : '';

		update_post_meta($post_id, 'wpsisac_slide_link', $read_more_link);
	}

	/**
	 * Add custom column to slide listing page
	 * 
	 * @package WP Slick Slider and Image Carousel
	 * @since 1.0
	 */
	function wpsisac_slider_category_manage_columns($theme_columns) {
		$new_columns = array(
			'cb' => '<input type="checkbox" />',
			'name' => __('Name'),
			'slider_shortcode' => __( 'Slider Category Shortcode', 'wp-slick-slider-and-image-carousel' ),
			'slug' => __('Slug'),
			'posts' => __('Posts')
		);

		return $new_columns;
	}

	/**
	 * Add custom column data to slide listing page
	 * 
	 * @package WP Slick Slider and Image Carousel
	 * @since 1.0
	 */
	function wpsisac_slider_category_columns($out, $column_name, $theme_id) {
		$theme = get_term($theme_id, 'wpsisac_slider-category');
		switch ($column_name) {
			case 'title':
				echo get_the_title();
			break;
			case 'slider_shortcode':
				echo '[slick-slider category="' . $theme_id. '"]<br />';
				echo '[slick-carousel-slider category="' . $theme_id. '"]';
			break;
			default:
			break;
		}
		return $out;
	}

	/**
	 * Add JS snippet to admin footer to add target _blank in upgrade link
	 * 
	 * @package WP Slick Slider and Image Carousel
	 * @since 2.0.5
	 */
	/*function wpsisac_upgrade_page_link_blank() {

		global $wpos_upgrade_link_snippet;

		// Redirect to external page
		if( empty( $wpos_upgrade_link_snippet ) ) {

			$wpos_upgrade_link_snippet = 1;
	?>
		<script type="text/javascript">
			(function ($) {
				$('.wpos-upgrade-pro').parent().attr( { target: '_blank', rel: 'noopener noreferrer' } );
			})(jQuery);
		</script>
	<?php }
	} */
}

$wpsisac_admin = new Wpsisac_Admin();