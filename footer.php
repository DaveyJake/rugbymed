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
					<?php echo 'Website designed by <a href="http://usarugby.org">USA Rugby Football Union, Ltd.</a><br>Copyright <i class="fa fa-copyright"></i> 2014. All rights reserved.'; ?>
				</div>
			</center>
		</footer>
		<?php wp_footer(); ?>

	</div>
	<script>
		window.addEventListener('load', function() {
    		new FastClick(document.body);
		}, false);
		$(document).foundation();
	</script>
</body>
</html>