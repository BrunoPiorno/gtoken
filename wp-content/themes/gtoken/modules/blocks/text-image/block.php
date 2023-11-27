<?php
/**
 * Text/image
 *
 * Title:       Text/image
 * Description: Text/image
 * Category:    palermo
 * Icon:        columns
 * Keywords:    facts
 * Post Types:  all
 * Multiple:    true
 * Active:      true
 * Styles:      
 * CSS Deps:
 * JS Deps:
 *
 * @package Palermo
 * @subpackage defaultTheme
 * @since defaultTheme  1.0
 */

 do_action( 'palermo_pre_render_block', $block );
?>

<?php 
$image = get_field('image');
$title = get_field('title');
$list = get_field('list');
?>

<!-- Text Image -->

