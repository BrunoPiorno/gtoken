<?php
/**
 * Text/image
 *
 * Title:       Faqs
 * Description: Faqs
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
<section class="wrapper wrapper--light-black">
    <section class="accordion accordion--faqs" id="faqs">
        <div class="container">
            <div class="accordion__cont">
                <?php while (have_rows('faqs')): the_row();
                    if ($question = get_sub_field('question')): ?>
                        <div class="accordion__item">
                            <h3 class="accordion__question h3 js-accordion-open" tabindex="0"><?php echo $question; ?></h3>
                            <?php echo ($answer = get_sub_field('answer')) ? '<div class="accordion__answer">' . $answer . '</div>' : ''; ?>
                        </div>
                    <?php endif;
                endwhile; ?>
            </div>
        </div>
    </section>
</section>