<?php


function acf_servicos_block() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
		// register a portfolio item block
		acf_register_block(array(
			'name'				=> 'servicos',
			'title'				=> __('Blocos de Serviços'),
			'description'		=> __('Serviços e icones'),
			'render_template'	=> 'template-part/blocks/block-servicos.php',
			'category'			=> 'layout',
			'icon'				=> 'excerpt-view',
			'keywords'			=> array( 'serviços' ),
		));
	}
}

add_action('acf/init', 'acf_servicos_block');

?>