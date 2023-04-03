<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' : '; } ?><?php bloginfo( 'name' ); ?></title>
        <link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />
		
		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo( 'description' ); ?>">

		<?php wp_head(); ?>
		
    </head>
    <body <?php body_class(); ?>>
		<!--[if lt IE 7]>
		<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
	
		<!-- menu -->
		<?php get_template_part('templates/menu'); ?>
		<!-- / menu -->
		
		<header>
			<div class="row between-lg between-md" style="margin-right: auto; margin-left: auto;">
				<div class="inner_container">
					<div class="top-header" style="flex-basis: 100%;">
						<div class="row middle-lg middle-md middle-sm between-lg between-md end-xs">
							
							<div class="col col-lg-9 col-md-9 col-sm-9 col-xs-12">
								<?php
								// CONTACT VARIABLES
								$local_number = get_field('local_phone_number', 'options');
								$tollfree_number = get_field('tollfree_number', 'options');
								$email_address = get_field('email_address', 'options');
								?>
								<div class="row gutter_space_2 contact-info">
									<div class="col flex-basis-auto">
										<a style="font-size: 13px;" href="mailto:<?php echo $email_address ?>"><i class="fa fa-envelope"></i><?php echo $email_address ?></a>
									</div>
									<div class="col flex-basis-auto">
										<i class="fa fa-phone"></i><?php echo $tollfree_number ?>
									</div>
									<div class="col flex-basis-auto">
										<i class="fa fa-phone"></i><?php echo $local_number ?>
									</div>
								</div>
							</div>

							<div class="row end-lg end-md end-sm col col-lg-3 col-md-3 col-sm-4 col-xs-12">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<a class="btn mailing-list" href="<?php echo home_url() ?>/#mailing-list">Join Mailing List</a>
								</div>
							</div>

						</div>
					</div>
				</div>

				<div class="main-header">

					<div class="inner_container">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="display: flex; align-items: center;">
								<div class="logo">
									<a href="<?php echo home_url(); ?>">
										<?php include 'assets/img/branding/shareholders_for_SVA.svg'; ?>
									</a>
								</div>
							</div>
							
							<div class="row end-lg end-md end-sm end-xs col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right: 0;">
							
								<!-- SOCIAL MEDIA -->
								<!-- <?php echo do_shortcode('[social_media]'); ?> -->
								<!-- / SOCIAL MEDIA -->

								<nav >
									<?php echo fsd_nav(); ?>
								</nav>
								
								<!-- MENU TOGGLE -->
								<button class="hamburger hamburger--spin" type="button">
									<span class="hamburger-box">
										<span class="hamburger-inner"></span>
									</span>
								</button>
								<!-- / MENU TOGGLE -->
								
							</div>
						</div>
					</div>
				
				</div>
			</div>
		</header>