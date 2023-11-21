<?php
/**
 * Hero
 *
 * Title:       Hero
 * Description: Hero
 * Category:    palermo_hero
 * Icon:        align-full-width
 * Keywords:    hero
 * Post Types:  all
 * Multiple:    true
 * Active:      true
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
$video = get_field('video');
$image = get_field('image');
$title = get_field('title');
$media_type = get_field('video_o_imagen');  ?>

<!-- Hero Home -->
<section class="wrapper wrapper--hero">
    <section class="hero hero--home">
        <?php if ($media_type && $video): ?>
            <div class="hero__video">
                <video autoplay muted loop>
                    <source src="<?php echo esc_url($video['url']); ?>" type="<?php echo esc_attr($video['mime_type']); ?>">
                </video>
            </div>
        <?php elseif (!$media_type && $image): ?>
           
                <div class="hero__image">
                    <div class="image-background">
                        <?php get_template_part('modules/components/image', null, ['image' => $image]); ?>
                    </div>
                </div>
           
        <?php endif; ?>
        <div class="hero__text">
            <div class="container">
                <?php echo empty($title) ? '' : '<h1 class="title">' . esc_html($title) . '</h1>'; ?>
            </div>
        </div> 
    </section>
</section>



