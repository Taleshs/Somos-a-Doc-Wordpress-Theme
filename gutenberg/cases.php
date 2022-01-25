<?php


function acf_cases_block() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
		// register a portfolio item block
		acf_register_block(array(
			'name'				=> 'cases',
			'title'				=> __('Bloco Slide Cases'),
			'description'		=> __('Cases Em slide'),
			'render_template'	=> 'template-part/blocks/block-cases.php',
			'category'			=> 'layout',
			'icon'				=> 'excerpt-view',
			'keywords'			=> array( 'Cases' ),
		));
	}
}

add_action('acf/init', 'acf_cases_block');

?>