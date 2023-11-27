<?php
/**
 * Text/image
 *
 * Title:       Foma Parte
 * Description: Forma parte, bloque con imagen y texto
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

<section class="image-text">
    <div class="container">
        <div class="image-text__cont">
            <div class="image-text__image"></div>
            <div class="image-text__content">
                <div class="image-text__title"></div>
                <div class="image-text__text"></div>
                <div class="image-text__buttons"></div>
            </div>
        </div>
    </div>
</section>