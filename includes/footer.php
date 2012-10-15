			<footer>
				<p>Powered by <a href="http://anchorcms.com" target="_blank">AnchorCMS</a><br>
				Hosted by <a href="http://www.mediatemple.net#a_aid=5077c70cd4b95" target="_blank">MediaTemple (mt)</a></p>
				<?php if(twitter_account()): ?>
				<a href="<?php echo twitter_url(); ?>">@<?php echo twitter_account(); ?></a>
			<?php endif; ?>
				<a href="<?php echo rss_url(); ?>">RSS</a>

			<?php if(is_debug()): ?>
				<a id="debug_toggle" href="#debug">Show database profile</a>
			<?php endif; ?>
					
			</footer>

			<?php if(is_debug()): ?>
			<?php echo db_profile(); ?>
			<script>
					(function() {
							var g = function(i) {
									var e = document.getElementById(i);
									e.s = function(p, v) {
											this.style[p] = v;
									};
									e.g = function(p) {
											return this.style[p];
									};

									return e;
							};

							var a = g('debug_toggle'), t = g('debug_table');

							var b = function(e) {
									var d = (t.g('display') == '' || t.g('display') == 'none') ? 'block' : 'none';
									t.s('display', d);
									e.preventDefault();
									e.stopPropagation();
							};

							a.addEventListener('click', b, false);
					}());
			</script>
			<?php endif; ?>

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
		<script src="http://twitterjs.googlecode.com/svn/trunk/src/twitter.min.js" type="text/javascript"></script>
		<script src="<?php echo theme_url('/js/main.js'); ?>"></script>
		<script src="<?php echo theme_url('/js/prettify.js'); ?>"></script>
	</body>
</html>
