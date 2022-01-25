<?php
/**
 * Block template file: template-part/blocks/block-equipe.php
 *
 * Equipe Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'equipe-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-equipe';
if( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}
?>


<div class="section" id="equipe">
    <div class="wrapper section-content equipe">
      <h1><?php the_field( 'titulo_equipe' ); ?></h1>
	  <?php if ( get_field( 'imagem' ) ) { ?>
		<div class="block-content"><img src="<?php the_field( 'imagem' ); ?>" /></div>
		<?php } ?>
      
      <div class="block-content">
        <div class="content">
		<?php the_field( 'conteudo_equipe' ); ?>
        </div>
      </div>
    </div>
  </div>