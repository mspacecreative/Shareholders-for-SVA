<?php
get_header();

$pagetitle = get_field('hide_page_title');
if ( !$pagetitle ) {
	echo '<h1>' . the_title() . '</h1>';
} ?>

<div class="content-wrapper">	
<?php 
if ( have_posts() ):
while ( have_posts() ): the_post();
	
the_content();
	
endwhile;
	
else : ?>
<p>no posts found.</p>
	
<?php endif; ?>

</div>

<?php get_footer();