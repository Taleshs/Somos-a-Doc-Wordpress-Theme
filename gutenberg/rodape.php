<?php


function acf_rodape_block() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
		// register a portfolio item block
		acf_register_block(array(
			'name'				=> 'rodape',
			'title'				=> __('Rodape'),
			'description'		=> __('Sliders no header do site'),
			'render_template'	=> 'template-part/blocks/block-rodape-item.php',
			'category'			=> 'layout',
			'icon'				=> 'excerpt-view',
			'keywords'			=> array( 'Rodape' ),
		));
	}
}

add_action('acf/init', 'acf_rodape_block');

?>