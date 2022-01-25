<?php


function acf_quem_somos_block() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
		// register a portfolio item block
		acf_register_block(array(
			'name'				=> 'quem-somos',
			'title'				=> __('Bloco Quem somos'),
			'description'		=> __('Youtube + Conteúdo'),
			'render_template'	=> 'template-part/blocks/block-quem-somos.php',
			'category'			=> 'layout',
			'icon'				=> 'excerpt-view',
			'keywords'			=> array( 'quem somos' ),
		));
	}
}

add_action('acf/init', 'acf_quem_somos_block');

?>