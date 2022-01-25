<?php
/**
 * Block template file: template-part/blocks/block-clientes.php
 *
 * Clientes Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'clientes-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-clientes';
if( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}
?>



<div id="clientes" class="section section-carousel section-clientes">
	<div class="wrapper">
		<h1><?php the_field( 'titulo_clientes' ); ?></h1>
	</div>
		<div class="wrapper-slick slick-clientes">
			
			<?php if ( have_rows( 'clientes_repeater' ) ) : ?>
				<?php while ( have_rows( 'clientes_repeater' ) ) : the_row(); ?>
					<div class="slider-item" style="background-image: url('<?php the_sub_field( 'imagem_clientes' ); ?>'); background-position: center center; background-size: cover; background-repeat: no-repeat;">
					</div>

				<?php endwhile; ?>
			<?php else : ?>
				<?php // no rows found ?>
			<?php endif; ?>
		
	</div>
</div>	