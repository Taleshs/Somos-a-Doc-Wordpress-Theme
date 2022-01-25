<?php
/**
 * Block template file: template-part/blocks/block-cases.php
 *
 * Cases Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'cases-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-cases';
if( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}
?>


<div id="cases" class="section section-carousel section-cases">
	<div class="wrapper">
		<h1><?php the_field( 'titulo_cases' ); ?></h1>
	</div>
	<div class="wrapper-slick slick-cases">

		<?php if ( have_rows( 'cases_repeater' ) ) : ?>
			<?php while ( have_rows( 'cases_repeater' ) ) : the_row(); ?>
			<?php if ( get_sub_field( 'link_case' ) ):?>
				<a href="<?php the_sub_field( 'link_case' ); ?>" target="_Blank">
					<div class="slider-item" style="background-image: url('<?php the_sub_field( 'imagem_case' ); ?>'); background-position: center center; background-size: cover; background-repeat: no-repeat;">
					</div>
				</a>
			<?php else: ?>	
				<div class="slider-item" style="background-image: url('<?php the_sub_field( 'imagem_case' ); ?>'); background-position: center center; background-size: cover; background-repeat: no-repeat;">
				</div>
			<?php endif; ?>

			<?php endwhile; ?>
		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>
	</div>
</div>	