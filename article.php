<?php theme_include('header'); ?>

<section id="content" class="article-<?php echo article_id(); ?>">

	<header>
		<time datetime="<?php echo date(DATE_W3C, article_time()); ?>">Written <?php echo relative_time(article_time()); ?></time>
	</header>

	<article class="post">

		<header>
			<hgroup>
				<h1><?php echo article_title(); ?></h1>
			</hgroup>
		</header>

		<?php echo article_html(); ?>

	</article>
	
	<article class="post">
		<?php include 'comment_form.php'; ?>
	</article>

</section>

<?php theme_include('footer'); ?>