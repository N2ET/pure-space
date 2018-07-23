<article <?php post_class( 'post' ) ?>>

	<header class="post-header">
		<time class="post-time">
			<?php the_time( 'Y-m-d' ) ?>
		</time>
		<h1 class="post-title">
			<?php the_title(); ?>
		</h1>
	</header>

	<div class="post-content">
		<?php the_content(); ?>
	</div>

	<nav class="post-nav">
		<?php
		previous_post_link('%link', '< OLDER');
		next_post_link('%link', 'NEWER >');
		?>
	</nav>

</article>