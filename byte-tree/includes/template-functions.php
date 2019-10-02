<?php

/**
 *
 * Template Functions
 *
 * @package   ByteTree_Base
 * @author    Marina Sharun
 * @link      __
 * @since 1.0
 */
 
// File Security Check
if ( ! defined( 'ABSPATH' ) ) { exit; }

/*
if( ! function_exists( 'bytetree-base_pagination' ) ) {
    function bytetree-base_pagination( $query ){

        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

        $GLOBALS['wp_query']->max_num_pages = $query->max_num_pages;

        $next_link = get_next_posts_page_link( $query->max_num_pages );
        $prev_link = get_previous_posts_page_link();

        $html = '<nav>';
            $html .= '<ul class="pagination">';
           
                $html .= '<li class="page-item"><a class="page-link" href="' . $prev_link . '"><i class="icon-Left_Arrow_Icon"></i></a></li>';

                for ( $i=1; $i <= $query->max_num_pages; $i++ ) { 
                    if( $i == $paged ){
                        $class = " active";
                        $link = "javascript:void(0);";
                    }else{
                        $class = "";
                        $link = get_pagenum_link( $i );
                    }
                    $html .= '<li class="page-item' . $class . '"><a class="page-link" href="' . $link . '">' . $i . '</a></li>';
                }

                $html .= '<li class="page-item"><a class="page-link" href="' . $next_link . '"><i class="icon-Right_Arrow_Icon"></i></a></li>';
                    
            $html .= '</ul>';
        $html .= '</nav>';

        return $html;
    }
}
*/
