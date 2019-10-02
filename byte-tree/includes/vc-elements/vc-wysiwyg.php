<?php

class VC_Wysiwyg extends WPBakeryShortCode {
     
    function __construct() {

        /* Configuration */
        $this->unique_id = "ls_widgetname";
        $this->widgetname = "Widget Name";
        $this->icon = "";

        $this->language_path = "bytetree-base";
        $this->category = "ByteTree_Base";
        /* END - Configuration */

        add_action( 'init', array( $this, 'mapping' ) );
        add_shortcode( $this->unique_id, array( $this, 'shortcode' ) );
    }
     
    public function mapping() {
         
        if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
        }
         
        vc_map(
            array(
                'type' => 'textarea_html',
                'heading' => __( 'Wysiwyg', $this->language_path),
                'param_name' => 'wysiwyg',
                'admin_label' => false,
                'weight' => 0,
            )
        );
        
    }
     
    public function shortcode( $atts ) {
         
        $attribute = shortcode_atts(
            array(
                'wysiwyg'   => '',

            ), 
            $atts
        );

        ob_start();
        
        /* HTML SECTION */ ?>
        <div class="widgetname">
            <?php echo $attribute["wysiwyg"]; ?>
        </div>
        <?php /* END - HTML SECTION */      

        $output = ob_get_clean();
         
        return $output;
    }
     
}

new VC_Wysiwyg();
