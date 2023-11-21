<?php
/**
 * Text/image
 *
 * Title:       Text/Papper
 * Description: Text/Papper
 * Category:    palermo
 * Icon:        columns
 * Keywords:    Text Papper
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
$title = str_replace( ['[',']'], ['<span>','</span>'], empty($title) ? '' : $title);
$text = get_field('text');
$text = ( !empty($text) ) ? $text : '';

?>

<!-- Text Image -->
<section class="wrapper wrapper--grey">
    <section class="text-papper">
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
                        <h2 class="text">			
                            <?php echo wp_kses_post( $text );?>
                        </h2>
			        <?php } ?>
                </div> 

                <?php
                $text_pdf = get_field('text_pdf');
                $white_papper = get_field('white_papper');

                if ($white_papper) {
                    $pdf_url = esc_url($white_papper['url']);
                    $pdf_title = esc_html($white_papper['title']);

                    echo '<div class="content__link"><a href="' . $pdf_url . '" target="_blank">' . esc_html($text_pdf) . '</a></div>';
                } ?>

            </div>
        </div>
    </section>
</section>
