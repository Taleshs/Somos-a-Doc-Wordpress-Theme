<?php
/**
 * Block template file: template-part/blocks/block-rodape-item.php
 *
 * Rodape Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'rodape-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-rodape';
if( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}
?>

<div class="footer">
    <div class="wrapper">
        <div class="logo-rodape">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" class="App-logo" alt="logo">
        </div>
		<div class="disclaimer">
			<?php the_field('informacoes_adicionais');?>
        </div>
        <div class="social-links">
            <ul>
                <li>
                    <a href="<?php the_field( 'facebook', 'option' ); ?>" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.png">
                    </a>
                </li>
                <li>
                    <a href="<?php the_field( 'instagram', 'option' ); ?>" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram.png">
                    </a>
                </li>
                <li>
                    <a href="<?php the_field( 'linkedin', 'option' ); ?>" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin.png">
                    </a>
                </li>
                <li>
                    <a href="<?php the_field( 'youtube', 'option' ); ?>" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/youtube.png">
                    </a>
                </li>
				<li>
                    <a href="<?php the_field( 'spotify', 'option' ); ?>" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/spotify.png">
                    </a>
                </li>
				


            </ul>
        </div>
    </div>

	 
</div>
        <div class="disclaimer_bottom">

<div class="wrapper">
			<?php the_field('texto_rodape');?>
        </div>
    </div>