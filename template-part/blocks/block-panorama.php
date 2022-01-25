<?php
/**
 * Block template file: template-part/blocks/block-panorama.php
 *
 * Panorama Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'panorama-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-panorama';
if( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}
?>

<div class="section numeros" id="Numeros">
    <div class="wrapper section-content ">
      <h1><?php the_field( 'titulo_panorama' ); ?></h1>
      <div class="numeros-wrapper">
	  	<?php if ( have_rows( 'blocos_panorama_repeater' ) ) : ?>
			<?php while ( have_rows( 'blocos_panorama_repeater' ) ) : the_row(); $blocos = get_row_index(); ?>
			<div class="content">
					<span><?php the_sub_field( 'texto_antes_dos_numeros' ); ?>
						<span class="number number-<?php echo $blocos;?>"><?php the_sub_field( 'numeros' ); ?></span>
					</span>
					<?php the_sub_field( 'texto_pos_numeros' ); ?>
			</div>
			<?php endwhile; ?>
		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>
      </div>
    </div>
  </div>