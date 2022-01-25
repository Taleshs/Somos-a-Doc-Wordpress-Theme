<?php


function acf_equipe_block() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
		// register a portfolio item block
		acf_register_block(array(
			'name'				=> 'equipe',
			'title'				=> __('Bloco Equipe'),
			'description'		=> __('Equipe + Conteúdo + Imagem'),
			'render_template'	=> 'template-part/blocks/block-equipe.php',
			'category'			=> 'layout',
			'icon'				=> 'excerpt-view',
			'keywords'			=> array( 'equipe' ),
		));
	}
}

add_action('acf/init', 'acf_equipe_block');

?>