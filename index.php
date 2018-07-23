<?php
get_header();
?>

	<div class="post-list">
		<?php if ( have_posts() ): ?>
			<?php while ( have_posts() ): ?>
				<?php the_post(); ?>
				<article>
					<time>
						<?php the_time('Y-m-d'); ?>
					</time>
					<a class="post-link" href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
					</a>
				</article>
			<?php endwhile; ?>

		<?php endif; ?>
	</div>

<?php
get_footer();

