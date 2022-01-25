<?php
/**
 * Block template file: template-parts/blocks/block-slide-item.php
 *
 * Slide Item Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'slide-item-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-slide-item';
if( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}
?>

<div id="<?php echo esc_attr( $id ); ?>" class="section section-carousel section-slide-head">
	<div class="wrapper-slick slick-header">
		<?php if ( have_rows( 'slides_header_repeater' ) ) : ?>
			<?php while ( have_rows( 'slides_header_repeater' ) ) : the_row(); ?>
			<div class="slider-item" style="background-image: url('<?php the_sub_field( 'imagem_slider_header' ); ?>'); background-position: center center; background-size: cover; background-repeat: no-repeat;">
				<div class="wrapper carousel__content">
					<div class="slider-box">
						<div class="slider--title"><?php the_sub_field( 'chamada_principal_header' ); ?></div>
						<div class="slider--text">
							<?php the_sub_field( 'linha_fina_header' ); ?>
							<?php if ( get_sub_field( 'link_leia_mais_header' ) ) { ?>
								<a href="<?php the_sub_field( 'link_leia_mais_header' ); ?>" class="btn read-more" target="_Blank"><?php the_sub_field( 'texto_botao_header' ); ?></a>
							<?php } ?>

						</div>
					</div>
				</div>
			</div>
			<?php endwhile; ?>
		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>
	</div>
</div>	


<div id="<?php echo esc_attr( $id ); ?>" class="section section-carousel section-slide-head-mobile">
	<div class="wrapper-slick slick-header-mobile">
		<?php if ( have_rows( 'slides_header_repeater_mobile' ) ) : ?>
			<?php while ( have_rows( 'slides_header_repeater_mobile' ) ) : the_row(); ?>
			<div class="slider-item" style="background-image: url('<?php the_sub_field( 'imagem_slider_header_mobile' ); ?>'); background-position: center center; background-size: cover; background-repeat: no-repeat;">
				<div class="wrapper carousel__content">
					<div class="slider-box">
						<div class="slider--title"><?php the_sub_field( 'chamada_principal_header_mobile' ); ?></div>
						<div class="slider--text">
							<?php the_sub_field( 'linha_fina_header_mobile' ); ?>
							<?php if ( get_sub_field( 'link_leia_mais_header_mobile' ) ) { ?>
								<a href="<?php the_sub_field( 'link_leia_mais_header_mobile' ); ?>" class="btn read-more" target="_Blank"><?php the_sub_field( 'texto_botao_header_mobile' ); ?></a>
							<?php } ?>

						</div>
					</div>
				</div>
			</div>
			<?php endwhile; ?>
		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>
	</div>
</div>	

