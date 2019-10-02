<?php
/**
 *
 *  Template Name: Front Page
 *
 * @package   ByteTree_Base
 * @author    Marina Sharun
 * @link      __
 * @since 1.0
 */

// File Security Check
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>

<?php get_header(); ?>

    <?php get_template_part( 'partials/header/intro' ); ?>

    <?php get_template_part( 'partials/content/editor' ); ?>
	
<?php get_footer();
