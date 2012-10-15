<section id="content" class="article-<?php echo article_id(); ?>">

	<header>
		<time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time>
	</header>

	<article class="post">

		<header>
			<hgroup>
				<h1><?php echo article_title(); ?></h1>
			</hgroup>
		</header>

		<?php echo article_html(); ?>

<!-- 		<footer class="footnote">
			<small>This article is my <?php echo numeral(article_id()); ?> oldest. It is <?php echo count_words(article_html()); ?> words long. <?php echo article_custom_field('attribution'); ?></small>
		</footer> -->

	</article>
	
</section>

<?php include 'includes/comment_form.php'; ?>