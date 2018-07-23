<?php
get_header();
?>

	<div class="post-container">
		<?php
		while ( have_posts() ):
			the_post();
			get_template_part( 'content', get_post_format() );
		endwhile;
		?>
	</div>

<?php
get_footer();
