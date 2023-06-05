		<footer>
			<?php 
			$footerwidth = get_field('footer_content_width', 'options');
			switch ( $footerwidth ) {
				case 'narrow':
					$value = 'narrow';
					break;
				default:
					$value = '';
			} ?>
			<div class="light inner_container <?php echo $value ?>">
				<p><?php echo __('&copy '); echo date('Y '); echo __('Carson Proxy Advisors. All rights reserved.'); ?></p>
			</div>
		</footer>

		<?php
		$args = array(
			'post_type' => 'director',
			'posts_per_page' => -1
		);
		$loop = new WP_Query($args);
		$count = 0;
		if ($loop->have_posts()) {
			echo
			'
			<div class="modal-backdrop"></div>
			<div class="modal" style="display:none;">
				<div class="modal-inner">';
				while ($loop->have_posts()) {
					$loop->the_post();
					$content = get_the_content($loop->ID);
					$count = $count + 1;
					echo
					'<div data-id="bio-' . $count . '" class="bio-container">'
						. $content . 
					'</div>';
				}
				echo
				'</div>
			</div>';
		} wp_reset_query();
		?>
	    
	   	<?php wp_footer(); ?>
	</body>
</html>