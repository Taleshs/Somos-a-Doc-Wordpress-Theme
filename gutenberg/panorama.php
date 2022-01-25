<?php


function acf_panorama_block() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
		// register a portfolio item block
		acf_register_block(array(
			'name'				=> 'panorama',
			'title'				=> __('Bloco Panorama'),
			'description'		=> __('Numeros + texto'),
			'render_template'	=> 'template-part/blocks/block-panorama.php',
			'category'			=> 'layout',
			'icon'				=> 'excerpt-view',
			'keywords'			=> array( 'Panorama' ),
		));
	}
}

add_action('acf/init', 'acf_panorama_block');

?>