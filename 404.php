<?php
get_header(); ?>

<section class="section" style="background: url(<?php echo get_template_directory_uri(); ?>/assets/img/backgrounds/blob.svg) no-repeat center center scroll; background-size: cover;">
	<div class="inner_container light" style="padding-top: 6em;">
		
		<h2><?php esc_html_e('Page not found'); ?></h2>
	
		<p><?php esc_html_e('Sorry, this page does not exist. Click '); ?><a style="text-decoration: underline; color: #fff;" href="<?php echo home_url(); ?>">here</a><?php esc_html_e(' to go to the home page.'); ?></p>
		
	</div>
</section>

<?php get_footer();