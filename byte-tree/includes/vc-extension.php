<?php

/**
 *
 * Visual Composer Extension
 *
 * @package   ByteTree_Base
 * @author    Marina Sharun
 * @link      __
 * @since 1.0
 */
 
add_action( 'vc_before_init', 'vc_before_init_actions' );
 
function vc_before_init_actions() {

    require_once( get_template_directory().'/includes/vc-elements/vc-widgetname.php' );                  
    require_once( get_template_directory().'/includes/vc-elements/vc-textbox.php' );
    require_once( get_template_directory().'/includes/vc-elements/vc-list.php' );
    require_once( get_template_directory().'/includes/vc-elements/vc-pricebox.php' );
    require_once( get_template_directory().'/includes/vc-elements/vc-feature-image.php' );

}
