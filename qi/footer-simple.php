<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}
?>
			</div><!-- close #qodef-page-inner div from header.php -->
		</div><!-- close #qodef-page-outer div from header.php -->
		<?php
		// Hook to include additional content before wrapper close tag.
		do_action( 'qi_action_before_wrapper_close_tag' );
		?>
	</div><!-- close #qodef-page-wrapper div from header.php -->
	<?php
	// Hook to include additional content before body tag closed.
	do_action( 'qi_action_before_body_tag_close' );
	?>
<?php wp_footer(); ?>
</body>
</html>
