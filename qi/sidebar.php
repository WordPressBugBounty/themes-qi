<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

if ( is_active_sidebar( qi_get_sidebar_name() ) ) {
	?>
	<aside id="qodef-page-sidebar">
		<?php dynamic_sidebar( qi_get_sidebar_name() ); ?>
	</aside>
<?php } ?>
