<?php

class VC_Text extends WPBakeryShortCode {

    function __construct() {

        /* Configuration */
        $this->unique_id = "cs_textbox";
        $this->widgetname = "Text Box";
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
                'name' => __($this->widgetname, $this->language_path),
                'base' => $this->unique_id,
                'icon' => $this->icon,
                "class" => "bt-vc-element",
                "custom_markup" => "",
                'category' => __($this->category, $this->language_path),
                'params' => array(

                    /* Elements */

                    array(
                        'type' => 'textfield',
                        'heading' => __( 'Überschrift', $this->language_path),
                        'param_name' => 'title',
                        'admin_label' => false,
                        'weight' => 0,
                    ),

                    array(
                        'type' => 'textarea',
                        'heading' => __( 'Text', $this->language_path ),
                        'param_name' => 'text',
                        'admin_label' => false,
                        'weight' => 0,
                    ),


                    /* END - Elements */
                ),
            )
        );

    }

    public function shortcode( $atts ) {

        $attribute = shortcode_atts(
            array(
                'title'   => '',
                'text'   => '',
            ),
            $atts
        );

        ob_start();

        /* HTML SECTION */ ?>
        <div class="my-widgetname">
           <h2><?php echo $attribute["title"]; ?></h2>
           <p><?php echo $attribute["text"]; ?></p>
        </div>

        <?php /* END - HTML SECTION */

        $output = ob_get_clean();

        return $output;
    }

}

new VC_Text();
