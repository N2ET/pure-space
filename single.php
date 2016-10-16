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


	<nav class="post-nav">
		<?php
		previous_post_link('%link', 'Older');
		next_post_link('%link', 'Newer');
		?>
	</nav>

<?php
get_footer();
