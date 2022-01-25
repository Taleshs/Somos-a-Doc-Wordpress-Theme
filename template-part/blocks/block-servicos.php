<?php
/**
 * Block template file: template-part/blocks/block-servicos.php
 *
 * Servicos Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'servicos-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-servicos';
if( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}
?>


<div class="section gb_gradient desktop-only" id="servicos">
	<div class="wrapper section-content servicos">
		<h1><?php the_field( 'titulo_servicos' ); ?></h1>
		<div class="slide-servico wrapper-slick">
			<div class="servicos-wrapper">
				<?php if ( have_rows( 'itens_servicos_repeater' ) ) :?>
				<?php while ( have_rows( 'itens_servicos_repeater' ) ) : the_row(); $blocos = get_row_index();  ?>
				<div class="servico-box ">
					<?php if ( get_sub_field( 'icone_servicos' ) ) { ?>
					<div class="icon">
						<img src="<?php the_sub_field( 'icone_servicos' ); ?>"
							title="<?php the_sub_field( 'titulo_servico' ); ?>" />
					</div>
					<?php } ?>
					<div class="title">
						<h3><?php the_sub_field( 'titulo_servico' ); ?></h3>
					</div>

					<div class="content">
						<?php the_sub_field( 'conteudo_servicos' ); ?>
					</div>
				</div>
				<?php $count++;
					if ($blocos == 6){break;} 
					endwhile;
					?>
				<?php else : ?>
				<?php // no rows found ?>
				<?php endif; ?>
			</div> <!-- servicos-wrapper -->
			<div class="servicos-wrapper ">
				<?php if ( have_rows( 'itens_servicos_repeater' ) ) :?>
				<?php while ( have_rows( 'itens_servicos_repeater' ) ) : the_row(); $blocos = get_row_index(6);  ?>
				<div class="servico-box ">
					<?php if ( get_sub_field( 'icone_servicos' ) ) { ?>
					<div class="icon">
						<img src="<?php the_sub_field( 'icone_servicos' ); ?>"
							title="<?php the_sub_field( 'titulo_servico' ); ?>" />
					</div>
					<?php } ?>
					<div class="title">
						<h3><?php the_sub_field( 'titulo_servico' ); ?></h3>
					</div>

					<div class="content">
						<?php the_sub_field( 'conteudo_servicos' ); ?>
					</div>
				</div>
				<?php $count++;
					if ($blocos == 6){break;} 
					endwhile;
					?>
				<?php else : ?>
				<?php // no rows found ?>
				<?php endif; ?>
			</div> <!-- servicos-wrapper -->
		</div> <!-- slide-servico -->
	</div>
</div>

<div class="section gb_gradient mobile-only" id="servicos">
	<div class="wrapper section-content servicos">
		<h1><?php the_field( 'titulo_servicos' ); ?></h1>
		<div class="slide-servico-mobile wrapper-slick">
			<div class="slide-servico-mobile-itens">
				<?php if ( have_rows( 'itens_servicos_repeater' ) ) :?>
				<?php while ( have_rows( 'itens_servicos_repeater' ) ) : the_row(); ?>
				<div class="servico-box ">
					<?php if ( get_sub_field( 'icone_servicos' ) ) { ?>
					<div class="icon">
						<img src="<?php the_sub_field( 'icone_servicos' ); ?>"
							title="<?php the_sub_field( 'titulo_servico' ); ?>" />
					</div>
					<?php } ?>
					<div class="title">
						<h3><?php the_sub_field( 'titulo_servico' ); ?></h3>
					</div>

					<div class="content">
						<?php the_sub_field( 'conteudo_servicos' ); ?>
					</div>
				</div>
				<?php 
					endwhile;
					?>
				<?php else : ?>
				<?php // no rows found ?>
				<?php endif; ?>
			</div> <!-- servicos-wrapper -->
		</div> <!-- slide-servico -->
	</div>
</div>