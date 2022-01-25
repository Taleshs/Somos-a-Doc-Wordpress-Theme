<?php
/**
 * Block template file: template-part/blocks/block-quem-somos.php
 *
 * Quem Somos Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'quem-somos-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-quem-somos';
if( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}
?>

<div class="section  somos-a-doc" id="somos-a-doc">
    <div class="wrapper section-content">
      <div class="side-video">
        <div class=" player-wrapper">
          <div class="react-player" style="width: 100%; height: 100%;">
            <div style="width: 100%; height: 100%;"><iframe frameborder="0" allowfullscreen="1"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                title="YouTube video player" width="100%" height="100%"
                src="https://www.youtube.com/embed/<?php the_field( 'youtube_embed' ); ?>?autoplay=0&amp;mute=0&amp;controls=0&amp;origin=https%3A%2F%2Fsomosadoc.com.br&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;iv_load_policy=3&amp;modestbranding=1&amp;enablejsapi=1&amp;widgetid=1"
                id="widget2"></iframe></div>
          </div>
        </div>
      </div>
      <div class="block-content">
        <h1><?php the_field( 'titulo' ); ?></h1>
        <div class="content">
			<?php the_field( 'conteudo_somos_a_doc' ); ?>
        </div>
      </div>
    </div>
  </div>