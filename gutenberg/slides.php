<?php


function acf_slide_item_block() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
		// register a portfolio item block
		acf_register_block(array(
			'name'				=> 'slide-item',
			'title'				=> __('Slide Header'),
			'description'		=> __('Sliders no header do site'),
			'render_template'	=> 'template-part/blocks/block-slide-item.php',
			'category'			=> 'layout',
			'icon'				=> 'excerpt-view',
			'keywords'			=> array( 'Slide' ),
		));
	}
}

add_action('acf/init', 'acf_slide_item_block');

?>