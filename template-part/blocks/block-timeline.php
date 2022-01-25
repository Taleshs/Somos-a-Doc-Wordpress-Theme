<?php
/**
 * Block template file: template-part/blocks/block-timeline.php
 *
 * Timeline Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'timeline-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-timeline';
if( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}
?>

<div class="section bg_timeline" id="nossa-historia">
	<div class="wrapper section-content ">
		<h1><?php the_field( 'titulo_timeline' ); ?></h1>
	</div>
	<div class="section-content-timeline ">
		<div class="timeline">
			<?php if ( have_rows( 'itens_timeline_repeater' ) ) : ?>
			<?php while ( have_rows( 'itens_timeline_repeater' ) ) : the_row(); ?>
			<div class="timeline-item-wrapper">
				<div class="timeline--itens">
					<?php $imagem_timeline = get_sub_field( 'imagem_timeline' ); ?>
					<?php if ( $imagem_timeline ) { ?>
					<div class="timeline--imagem">
						<img src="<?php echo $imagem_timeline['url']; ?>"
							alt="<?php echo $imagem_timeline['alt']; ?>" />
					</div>
					<?php } ?>
					<div class="timeline--ano"><?php the_sub_field( 'ano_timeline' ); ?></div>
					<div class="timeline--content">
						<?php the_sub_field( 'conteudo_timeline' ); ?>
					</div>
				</div>
			</div>
			
			
			<?php endwhile; ?>
			<?php else : ?>
			<?php // no rows found ?>
			<?php endif; ?>

		</div>
	</div>
</div>