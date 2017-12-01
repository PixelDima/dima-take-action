<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://pixeldima.com
 * @since      1.0.0
 *
 * @package    Dima_Take_Action
 * @subpackage Dima_Take_Action/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Dima_Take_Action
 * @subpackage Dima_Take_Action/public
 * @author     Your Name <email@example.com>
 */
class Dima_Take_Action_Public extends PixelDima_Base {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;


	/**
	 * Markup Loaded variable
	 * 
	 * @since    1.0.0
	 * @access   private
	 * @var [type]
	 */
	private $markupLoaded;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
	
		add_action('wp_head', array(&$this, 'write_markup'));

		$this->markupLoaded = FALSE;
		
	}

	/**
	 * writes the html and script for the bar
	 *
	 * @since  1.0.0
	 * @return void
	 */
	public function write_markup() {		
		if ($this->markupLoaded) {
			return;
		}

		include($this->pluginDIRRoot . 'partials/dima-take-action-public-display.php');

		 $this->markupLoaded = TRUE;
		 
		 
	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Dima_Take_Action_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Dima_Take_Action_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/dima-take-action-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Dima_Take_Action_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Dima_Take_Action_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/dima-take-action-public.js', array( 'jquery' ), $this->version, false );

	}

}
