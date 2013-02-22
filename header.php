<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo page_title('Page can’t be found'); ?> - <?php echo site_name(); ?></title>

		<meta name="description" content="<?php echo site_description(); ?>">

		<link rel="stylesheet" href="<?php echo theme_url('/css/reset.css'); ?>">
		<link rel="stylesheet" href="<?php echo theme_url('/css/prettify.css'); ?>">
		<link rel="stylesheet" href="<?php echo theme_url('/css/style.css'); ?>">
		
		<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">
		<link rel="shortcut icon" href="<?php echo theme_url('img/favicon.png'); ?>">

		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<script>var base = '<?php echo theme_url(); ?>';</script>
		
		<meta name="viewport" content="width=device-width">
		
		<meta property="og:title" content="<?php echo site_name(); ?>">
		<meta property="og:type" content="website">
		<meta property="og:url" content="<?php echo full_url(); ?>">
		<meta property="og:image" content="<?php echo full_url(theme_url('img/og_image.gif')); ?>">
		<meta property="og:site_name" content="<?php echo site_name(); ?>">
		<meta property="og:description" content="<?php echo site_description(); ?>">
		
	<?php if(customised()): ?>
		<!-- Custom CSS -->
		<style><?php echo article_css(); ?></style>
		<!--  Custom Javascript -->
		<script><?php echo article_js(); ?></script>
	<?php endif; ?>

		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-7422463-10']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
	</head>
	
	<body onload="prettyPrint()">

		<header id="main-header">
			<hgroup>
				<a href="<?php echo base_url(); ?>">
					<h1 id="logo"><?php echo site_name(); ?></h1>
					<h2 id="description"><?php echo site_description(); ?></h2>
				</a>
				<div class="glyphs">
					<a href="http://twitter.com/joshkennedy" class="twitter" data-icon="&#x54;"></a>
					<a href="http://dribbble.com/joshkennedy" class="dribbble" data-icon="&#x44;"></a>
					<a href="http://github.com/joshkennedy" class="github" data-icon="&#x47;"></a>
					<a href="http://last.fm/user/joshkennedy" class="lastfm" data-icon="&#x4c;"></a>
					<a href="mailto:hello@joshkennedy.me" class="email" data-icon="&#x45;"></a>
				</div>

			</hgroup>
		<?php if(has_menu_items()): ?>
			<nav role="navigation">
				<ul>
					<?php while(menu_items()): ?>
					<li <?php echo (menu_active() ? 'class="active"' : ''); ?>>
						<a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>">
							<?php echo menu_name(); ?>
						</a>
					</li>
					<?php endwhile; ?>
				</ul>
			</nav>
		<?php endif; ?>

			<h3>Dribbble Shots <i class="dribbble" data-icon="&#x44;"></i></h3>
			<div id="dribbble"></div>
			<script type="text/javascript" src = "https://halfcourtshot.googlecode.com/svn/tags/101129.1100/js/half-court-shot.jsapp.mh.min.js"></script>
			<script type="text/javascript">var hcs = new HalfCourtShot({ jersey: "joshkennedy", shots: 4, goal: 'dribbble' });</script>

		</header>
