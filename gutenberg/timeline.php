<?php


function acf_timeline_block() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
		// register a portfolio item block
		acf_register_block(array(
			'name'				=> 'timeline',
			'title'				=> __('Bloco Timeline'),
			'description'		=> __('Cases Em slide'),
			'render_template'	=> 'template-part/blocks/block-timeline.php',
			'category'			=> 'layout',
			'icon'				=> 'excerpt-view',
			'keywords'			=> array( 'Timeline' ),
		));
	}
}

add_action('acf/init', 'acf_timeline_block');

?>