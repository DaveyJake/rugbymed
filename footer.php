<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package USA Rugby Medical Symposium
 */
?>

			</div>

		</div>

	</div>
	
	<div id="footer-wrapper">
		<footer id="footer" class="site-footer" role="contentinfo">
			<center>
				<div class="site-info">
					<?php echo 'Website designed by <a href="http://usarugby.org">USA Rugby Football Union, Ltd.</a>'; ?>
				</div>
			</center>
		</footer>
		<?php wp_footer(); ?>

	</div>
	<script src="/usarmedsymposium/wp-content/themes/rugbymed/js/foundation.min.js"></script>
	<script>
		window.addEventListener('load', function() {
    		new FastClick(document.body);
		}, false);
		$(document).foundation();
	</script>
	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</body>
</html>
