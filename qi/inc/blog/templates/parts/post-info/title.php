<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

$title_tag = isset( $title_tag ) && ! empty( $title_tag ) ? $title_tag : 'h1';
?>
<<?php echo sanitize_key( $title_tag ); ?> itemprop="name" class="qodef-e-post-title entry-title">
	<?php if ( ! is_single() ) { ?>
		<a itemprop="url" class="qodef-e-title-link" href="<?php the_permalink(); ?>">
	<?php } ?>
		<?php the_title(); ?>
	<?php if ( ! is_single() ) { ?>
		</a>
	<?php } ?>
</<?php echo sanitize_key( $title_tag ); ?>>
