<section id="content" class="article-home">

	<?php if(has_posts()): ?>
			<?php while(posts()): ?>
				<article class="post">
					<a href="<?php echo article_url(); ?>#disqus_thread" title="<?php echo article_title(); ?>">
						<h1><?php echo article_title(); ?></h1>
					</a>
					<?php echo article_html(); ?>
				</article>
			<?php endwhile; ?>

		<p><?php echo posts_prev(); ?> <?php echo posts_next(); ?></p>

	<?php else: ?>
		<p>Looks like I have some writing to do!</p>
	<?php endif; ?>

</section>