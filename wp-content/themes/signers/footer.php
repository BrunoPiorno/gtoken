<?php

$number = get_field('number', 'options');
$number = ( !empty($number) ) ? $number : '';

$text = get_field('text', 'options');
$text = ( !empty($text) ) ? $text : '';

?>

		</main><!-- #content -->

	<footer class="site-footer">
		<div class="container">
			<div class="site-footer-top">
				<div class="site-footer__logo-column">
					<?php get_template_part('modules/components/site-logo',null, ['footer' => true] ); ?>
				</div>

				<div class="site-footer__content-column">
					<?php get_template_part('modules/components/menu'); ?>
				</div>
			</div>
			<div class="site-footer-bottom">
				<?php if (!empty($text)) {?>
					<p>
						<?php echo wp_kses_post($text); ?>
					</p>
				<?php } ?>

				<?php if (!empty($number)) {?>
					<p>
						<?php echo wp_kses_post($number); ?>
					</p>
				<?php } ?>
			</div>
		</div>

	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>