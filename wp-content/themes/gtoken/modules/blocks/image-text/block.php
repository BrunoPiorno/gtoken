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
 $title = get_field('title');
 $text = get_field('text');
?>

<section class="image-text" data-waypoint=".5">
    <div class="container">
        <div class="image-text__cont">
            <?php if($image = get_field('image')): ?>
                <div class="image-text__image">
                    <div class="image-text__image__logo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/cria.png" alt="Google Play"></div>
                    <div class="image-text__image__mobile">
                       <!--  <div class="image-background">  -->
                            <?php get_template_part('modules/components/image', null, ['image' => $image]); ?>
                       <!--  </div> -->
                    </div>
                </div>
            <?php endif; ?> 
            <div class="image-text__content">
                <?php echo empty($title)? '':'<div class="image-text__title">'.esc_html($title).'</div>'; ?>
                <?php echo empty($text)? '':'<div class="image-text__text">'.esc_html($text).'</div>'; ?>
                <div class="image-text__buttons">
                    <?php if ($link_google_play = get_field('link_google_play')) : ?>
                        <a href="<?php echo esc_url($link_google_play); ?>" target="_blank" class="google-play-link">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/google-play.png" alt="Google Play">
                        </a>
                    <?php endif; 
                    if ($link_app_store = get_field('link_app_store')) : ?>
                        <a href="<?php echo esc_url($link_app_store); ?>" target="_blank" class="app-store-link">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/app-store.svg" alt="App Store">
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>