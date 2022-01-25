<?php
    // FORCE DEBUG
    if ( isset( $_GET['debug'] ) && 'debug' == $_GET['debug'] ) {
        define( 'WP_DEBUG', true );
    }
    if (!session_id()) {
        session_start();
    }

    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    add_filter('show_admin_bar', '__return_false');

    // SCRIPTS E JS WORDPRESS
    function site_scripts() {
        wp_enqueue_style( 'Style', get_template_directory_uri() .'/style.css' );
        wp_enqueue_style( 'Slick', get_template_directory_uri() .'/assets/css/slick.css' );
        wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.js', array(), '1.0.0', false );
        wp_enqueue_script('Slick', get_template_directory_uri() . '/assets/js/slick.min.js', array(), '1.0.2', true );
        wp_enqueue_script('cloudflare', get_template_directory_uri() . '/assets/js/waypoints.min.js' , array(), '1.0.2', true );
        wp_enqueue_script('Counter-up', get_template_directory_uri() . '/assets/js/counter-up.js', array(), '1.0.2', true );
        wp_enqueue_script('Scripts', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.2', true );
    }
    add_action( 'wp_enqueue_scripts', 'site_scripts' );


    // TITULO ESTRUTURADO PARA SEO WORDPRESS
    add_filter( 'wp_title', 'site_title' );
    
    function site_title( $title ) {
      global $page, $paged;
      if ( is_feed() )
        return $title;
      $site_description = get_bloginfo( 'description' );
      $filtered_title = $title . get_bloginfo( 'name' );
      $filtered_title .= ( ! empty( $site_description ) && ( is_home() || is_front_page() ) ) ? ' | ' . $site_description: '';
      $filtered_title .= ( 2 <= $paged || 2 <= $page ) ? ' | ' . sprintf( __( 'Page %s' ), max( $paged, $page ) ) : '';

      return $filtered_title;
    }
    
    function wpdocs_after_setup_theme() {
        add_theme_support( 'html5', array( 'search-form' ) );
    }
    add_action( 'after_setup_theme', 'wpdocs_after_setup_theme' );

    // REGISTRO DE MENU WORDPRESS
    register_nav_menus( array(
        'menu_principal' => 'Menu Principal',
    ) );



    if( function_exists('acf_add_options_page') ) {
        
        acf_add_options_page(array(
            'page_title'    => 'Informações gerais',
            'menu_title'    => 'Informações gerais',
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));

        

    }

// SUPORTE DE IMAGEM DESTACADA WORDPRESS
    add_theme_support( 'post-thumbnails' );


    include_once('gutenberg/slides.php');

    include_once('gutenberg/quem-somos.php');

    include_once('gutenberg/servicos.php');

    include_once('gutenberg/equipe.php');

    include_once('gutenberg/panorama.php');

    include_once('gutenberg/cases.php');

    include_once('gutenberg/clientes.php');

    include_once('gutenberg/timeline.php');

    include_once('gutenberg/rodape.php');

    

?>