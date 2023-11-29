<?php
/**
 * Text/image
 *
 * Title:       Slider Links
 * Description: Slider
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
<?php if( have_rows('repeater_field') ): ?>
    <section class="slider-links">
        <div class="swiper-container">
            <div class="swiper swiper-wrapper">
                <?php while( have_rows('repeater_field') ): the_row(); 
                    $logo = get_sub_field('logo');
                    $link = get_sub_field('link');
                    $texto = get_sub_field('texto'); ?>
                    
                    <div class="swiper-slide">
                        <?php echo '<a href="' . esc_url($link['url']) . '" target="' . esc_attr($link['target']) . '">';
                            if($logo) { ?>
                                <?php get_template_part('modules/components/image', null, ['image' => $logo]); ?>
                            <?php } 

                            echo '<p>' . esc_html($texto) . '</p>';
                        echo '</a>';?>
                    </div>
                <?php endwhile; ?>
            </div>
  <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>

                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
        </div>
    </section>
<?php endif; ?>

