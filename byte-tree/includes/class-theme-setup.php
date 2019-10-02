<?php

/**
 *
 * Theme Setup
 *
 * @package   ByteTree_Base
 * @author    Marina Sharun
 * @link      __
 * @since 1.0
 */
 
if (!class_exists('ByteTree_Base_Prepare_Theme_Setup')) {

    class ByteTree_Base_Prepare_Theme_Setup {

        function __construct() {
            add_action( 'after_setup_theme', array( &$this, 'theme_setup' ) );

            add_action( 'init', array( &$this, 'create_post_types' ) );
            add_action( 'init', array( &$this, 'register_taxonomies' ) );
            add_action( 'admin_menu', array( &$this, 'remove_admin_menus' ) );
            add_action( 'widgets_init', array( &$this, 'widgets_init' ) );
        }

        public function create_post_types(){
            /*
            register_post_type( 'notification',
                array(
                  'labels' => array(
                    'name' => __( 'Notifications', 'bytetree-base' ),
                    'singular_name' => __( 'Notification', 'bytetree-base' )
                  ),
                  'public' => true,
                  'has_archive' => false,
                  'menu_icon' => "dashicons-welcome-comments"
                )
            )
            */
        }

        public function register_taxonomies() {
            /*
            register_taxonomy( 
                'person_cat', 
                array(
                    "person"
                ),
                array(
                    'hierarchical' => true,
                    'label' => __( 'Personen-Kategorie', 'bytetree-base' ),
                    'rewrite' => array( 'slug' => 'pers-kat' )
                )
            );
            */
        }

        public function widgets_init() {
            /*
            register_sidebar( array(
                'name' => __( 'Footer Sidebar', 'bytetree-base' ),
                'id' => 'footer-sidebar',
                'before_widget' => '',
                'after_widget'  => '',
                'before_title'  => '',
                'after_title'   => '',
            ) );
            */
        }

        public function theme_setup() {

            load_theme_textdomain('bytetree-base' , get_template_directory() . '/languages');
            
            add_theme_support('automatic-feed-links');
            add_theme_support('title-tag');
            add_theme_support('post-thumbnails');

            register_nav_menus( array(
                'primary-menu'   	=> esc_html__('Header Main Menu' , 'bytetree-base') ,
                'footer-menu' 		=> esc_html__('Footer Menu' , 'bytetree-base') ,
            ));

            add_theme_support('html5' , array (
                'search-form' ,
                'comment-form' ,
                'comment-list' ,
                'gallery' ,
                'caption'
            ));

            /*
            add_image_size( "content", 1170 );
            add_image_size( "jumbotron", 2560, 1150, true );
            */

            add_theme_support('post-formats' , array (
                ''
            ));
			
      			if (!current_user_can('administrator') && !is_admin()) {
      		      show_admin_bar(false);
      			}
        }

        public function remove_admin_menus(){
            remove_menu_page( 'edit-comments.php' );          //Comments
        }
    }

    new ByteTree_Base_Prepare_Theme_Setup();
}
