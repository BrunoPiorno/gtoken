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
<section class="wrapper wrapper--pink" data-waypoint=".5">
    <section class="number_grid">
        <div class="container">
            <div class="number_grid__cont">
                <?php $counter = 1;

                if ($repeater_data = get_field('repeater_data')):
                    foreach ($repeater_data as $item) : ?>
                        <div class="number_grid__item">
                            <div class="number_cont">
                                <span class="number"><?php echo esc_html($counter); ?></span>
                                <span class="number_text"><?php echo esc_html($item['title']); ?></span>
                            </div>
                            <div class="number_content"><?php echo esc_html($item['content']); ?></div>
                        </div>
                        <?php $counter++; 
                    endforeach;
                endif; ?>
            </div>


            <?php if ($video_youtube = get_field('video_youtube')) {
            $url = esc_url($video_youtube['url']);
            $target = esc_attr($video_youtube['target']);
            $title = esc_html($video_youtube['title']);
            
            echo '<div class="number_grid__link">Mira nuestro <a href="' . $url . '" target="' . $target . '">' . $title . '</a></div>';
        } ?>

        </div>
    </section>
</section>

