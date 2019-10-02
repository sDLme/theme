<?php

class VC_List extends WPBakeryShortCode {
     
    function __construct() {

        /* Configuration */
        $this->unique_id = "cs_list";
        $this->widgetname = "Bullet List";
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

                    // params group
                    array(
                        'type' => 'param_group',
                        'value' => '',
                        'heading' =>  __( 'List Items', $this->language_path ),
                        'param_name' => 'list',
                        // Note params is mapped inside param-group:
                        'params' => array(
                            array(
                                'type' => 'textfield',
                                'value' => '',
                                'heading' => 'Enter your text (multiple field)',
                                'param_name' => 'item',
                            )
                        )
                    )

                    /* END - Elements */
                ),
            )
        );
        
    }
     
    public function shortcode( $atts ) {
         
        $attribute = shortcode_atts(
            array(
                'list' => '',

            ), 
            $atts
        );

        $items = vc_param_group_parse_atts($attribute['list']);

        ob_start();
        
        /* HTML SECTION */ ?>
        <ul class="list-widgetname">
            <?php
            foreach ($items as $item) {?>
                <li><?php echo $item['item'] ?></li>
                <?php
            }
            ?>
        </ul>
        <?php /* END - HTML SECTION */      

        $output = ob_get_clean();
         
        return $output;
    }
     
}

new VC_List();
