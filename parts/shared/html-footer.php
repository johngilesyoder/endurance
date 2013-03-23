	<!-- Footer
	================================================== -->
	<?php wp_footer(); ?>

		<!-- javascript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.0/js/bootstrap.min.js"></script>
		<script src="<?php bloginfo('template_directory' ); ?>/assets/js/global/holder.js"></script>

		<script type="text/javascript">
			$(document).ready(
				$('#hero').carousel({
				  interval: 6000
				})
			);
		</script>

	</body>
</html>