<?php
/**
 * Text/image
 *
 * Title:       Number Grid
 * Description: Grilla de numeros
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
<section class="number_grid">
    <div class="container">
        <div class="number_grid__cont">
            <?php if( $repeater_data = get_field('repeater_data')):
                foreach ($repeater_data as $item) : ?>
                    <div class="number_grid__item">
                        <div class="number_cont"><span class="number"><?php echo esc_html($item['number']); ?></span><span class="number_text"><?php echo esc_html($item['title']); ?></span></div>
                        <div class="number_content"><?php echo esc_html($item['content']); ?></div>
                    </div>
                <?php endforeach;
            endif; ?>
        </div>

        <?php
        if ($pdf_link = get_field('pdf_link')) {
            echo '<div class="number_grid__link">Mira nuestro <a href="' . esc_url($pdf_link) . '" target="_blank">Video Explicativo</a></div>';
        } ?>
    </div>
</section>

