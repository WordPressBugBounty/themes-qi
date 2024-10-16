<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

$title_tag = isset( $title_tag ) && ! empty( $title_tag ) ? $title_tag : 'h1';
?>
<<?php echo sanitize_key( $title_tag ); ?> itemprop="name" class="qodef-e-title entry-title" <?php qode_essential_addons_framework_inline_style( $this_shortcode->get_title_styles( $params ) ); ?>>
	<a itemprop="url" class="qodef-e-title-link" href="<?php the_permalink(); ?>">
		<?php the_title(); ?>
	</a>
</<?php echo sanitize_key( $title_tag ); ?>>
