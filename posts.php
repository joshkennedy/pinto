<?php theme_include('header'); ?>

<section id="content" class="article-home">

	<?php if(has_posts()): ?>
			<?php while(posts()): ?>
				<article class="post">
					<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>">
						<h1><?php echo article_title(); ?></h1>
					</a>
					<?php echo article_html(); ?>
					<h2><a href="<?php echo article_url(); ?>#disqus_thread">Leave a comment &raquo;</a></h2>
				</article>
			<?php endwhile; ?>

		<p><?php echo posts_prev(); ?> <?php echo posts_next(); ?></p>

	<?php else: ?>
		<p>Looks like I have some writing to do!</p>
	<?php endif; ?>

</section>

<?php theme_include('footer'); ?>
