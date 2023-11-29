

		</main><!-- #content -->

	<footer class="site-footer wrapper wrapper--light-black">
		<div class="container">
			<div class="site-footer-top">
				<div class="site-footer__logo-column">
					<?php get_template_part('modules/components/site-logo',null, ['footer' => true] ); ?>
				</div>

			
				<div class="site-footer__logo-column__two">
					<?php get_template_part('modules/components/copyright',null, ['footer' => true] ); ?>
					<?php echo ($direccion = get_field('direccion','option'))? '<div class="direccion">'.$direccion.'</div>':''; ?>
					<?php if ($email = get_field('email', 'option')) {
						echo '<div class="email"><a href="mailto:' . esc_html($email) . '">' . esc_html($email) . '</a></div>';
					} 		

					if ($white_papper = get_field('white_papper', 'option')) {
						$pdf_url = esc_url($white_papper['url']);
						$pdf_title = esc_html($white_papper['title']);

						echo '<div class="content__link"><a href="' . $pdf_url . '" target="_blank">' . esc_html($pdf_title) . '</a></div>';
					} ?>
				</div>
				<div class="site-footer__logo-column__three">
					<?php get_template_part('modules/components/socials',null, ['footer' => true] ); ?>
				</dov>

			</div>
			
		</div>

	</footer><!-- #colophon -->

</div><!-- #page -->
<?php if($whatsapp = get_field('whatsapp','option')): ?>
	<a class="btn-whatsapp" href="https://api.whatsapp.com/send?phone=<?php echo $whatsapp; ?>&amp;text=Hola%20me%20estoy%20contactando%20desde%20el%20sitio%20web.&amp;source=&amp;data=" target="_blank"><i class="fab fa-whatsapp"></i></a>
<?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>