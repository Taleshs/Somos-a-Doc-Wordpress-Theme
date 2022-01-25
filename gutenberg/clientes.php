<?php


function acf_clientes_block() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
		// register a portfolio item block
		acf_register_block(array(
			'name'				=> 'clientes',
			'title'				=> __('Bloco Slide clientes'),
			'description'		=> __('clientes Em slide'),
			'render_template'	=> 'template-part/blocks/block-clientes.php',
			'category'			=> 'layout',
			'icon'				=> 'excerpt-view',
			'keywords'			=> array( 'Clientes' ),
		));
	}
}

add_action('acf/init', 'acf_clientes_block');

?>