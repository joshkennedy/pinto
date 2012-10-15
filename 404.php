<section id="content">
	<article class="post">
    <h1>Oh no, this page can&rsquo;t be found.</h1>
    <p>Unfortunately, the page at <code><?php echo current_url(); ?></code> seems to have packed its bags and hit the road... probably with a smarmy php code.</p>
    <p>Perhaps you might be interested in one of my other posts:</p>
    <?php if(has_posts()): ?>
			<?php while(posts()): ?>
				<ul>
					<li><a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a></li>
				</ul>
			<?php endwhile; ?>
			<p><?php echo posts_prev(); ?> <?php echo posts_next(); ?></p>
	<?php else: ?>
		<p>Looks like I have some writing to do!</p>
	<?php endif; ?>
  </article>
</section>

