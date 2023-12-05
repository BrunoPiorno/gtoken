<?php
/**
 * Instagram
 *
 * Title:       Instagram
 * Description: Block Instagram Feed
 * Category:    palermo
 * Icon:        columns
 * Keywords:    Instagram
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

$title = get_field('title');
$text = get_field('text');
$text = ( !empty($text) ) ? $text : '';
?>

<section class="wrapper wrapper--pink" data-waypoint=".25">
    <section class="instagram" id="instagram">
        <div class="container">
            <div class="content">
                <div class="content__text">
                    <?php if (!empty($title)) {?>
                        <h2 class="title">			
                            <?php echo wp_kses_post( $title );?>
                        </h2>
			        <?php } ?>
                </div> 

                <div class="content__description">
                    <?php if (!empty($text)) {?>
                        <div class="text">			
                            <?php echo wp_kses_post( $text );?>
                        </div>
			        <?php } ?>
                </div>
            </div>
        </div>
    </section>
</section>
