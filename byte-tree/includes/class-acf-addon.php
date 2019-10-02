<?php

/**
 *
 * Advanced Custom Fields Addon
 *
 * @package   ByteTree_Base
 * @author    Marina Sharun
 * @link      __
 * @since 1.0
 */
 
if (!class_exists('ByteTree_Base_ACF_Addon')) {

    class ByteTree_Base_ACF_Addon {

        function __construct() {

            $this->acf_add_options_page();

            $this->acf_add_fields();
        }

        private function acf_add_options_page() {

            if( function_exists('acf_add_options_page') ) {

                $args = array(
                    'page_title' => __( 'ByteTree_Base - Theme Optionen', 'bytetree-base' ),
                    'menu_title' => __( 'Theme Optionen', 'bytetree-base' )
                );

                acf_add_options_page( $args );
            }
        }

        private function acf_add_fields(){

            if( function_exists('acf_add_local_field_group') ):


			endif;
        }

    }

    new ByteTree_Base_ACF_Addon();
}
