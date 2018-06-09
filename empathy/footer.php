				<?php
					if (is_active_sidebar( 'pixelwars__sidebar_4' ) ||
						is_active_sidebar( 'pixelwars__sidebar_5' ) ||
						is_active_sidebar( 'pixelwars__sidebar_6' ) )
					{
						?>
							<footer class="site-footer" role="contentinfo">
								<div class="layout-medium">
									<div class="footer-sidebar widget-area" role="complementary"> 
										<?php
											dynamic_sidebar( 'pixelwars__sidebar_4' );
											
											dynamic_sidebar( 'pixelwars__sidebar_5' );
											
											dynamic_sidebar( 'pixelwars__sidebar_6' );
										?>
									</div>
								</div>
							</footer>
						<?php
					}
				?>
            </div>
		</div>
	</div>
	
	<?php
		wp_footer();
	?>
	
	<script>
		(function($) { "use strict"; 
			$.extend($.validator.messages, {
				required: "<?php esc_html_e('This field is required.', 'read'); ?>",
				remote: "<?php esc_html_e('Please fix this field.', 'read'); ?>",
				email: "<?php esc_html_e('Please enter a valid email address.', 'read'); ?>",
				url: "<?php esc_html_e('Please enter a valid URL.', 'read'); ?>",
				date: "<?php esc_html_e('Please enter a valid date.', 'read'); ?>",
				dateISO: "<?php esc_html_e('Please enter a valid date ( ISO ).', 'read'); ?>",
				number: "<?php esc_html_e('Please enter a valid number.', 'read'); ?>",
				digits: "<?php esc_html_e('Please enter only digits.', 'read'); ?>",
				equalTo: "<?php esc_html_e('Please enter the same value again.', 'read'); ?>",
				maxlength: $.validator.format("<?php esc_html_e('Please enter no more than {0} characters.', 'read'); ?>"),
				minlength: $.validator.format("<?php esc_html_e('Please enter at least {0} characters.', 'read'); ?>"),
				rangelength: $.validator.format("<?php esc_html_e('Please enter a value between {0} and {1} characters long.', 'read'); ?>"),
				range: $.validator.format("<?php esc_html_e('Please enter a value between {0} and {1}.', 'read'); ?>"),
				max: $.validator.format("<?php esc_html_e('Please enter a value less than or equal to {0}.', 'read'); ?>"),
				min: $.validator.format("<?php esc_html_e('Please enter a value greater than or equal to {0}.', 'read'); ?>"),
				step: $.validator.format("<?php esc_html_e('Please enter a multiple of {0}.', 'read'); ?>")
			});
		})(jQuery);
	</script>
</body>
</html>