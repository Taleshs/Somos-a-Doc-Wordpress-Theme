<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#1967FA">
  <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/favicon//ms-icon-144x144.png">
  <meta name="theme-color" content="#1967FA">
	
	
	
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <?php wp_head();?>
</head>

<body>
  <header class="doc__header">
    <div class="wrapper">
      <div class="header__content">
        <div class="doc__logo">
          <a href="<?php echo get_site_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" class="App-logo" alt="logo">
          </a>
        </div>
        <div class="menu-mobile"></div>

        <div class="nav__main">
          <div class="mobile-only">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" class="App-logo" alt="logo">
          </div>
          <?php
              wp_nav_menu( array(
                  'theme_location' => 'menu_principal',
              ) );
          ?>
			<?php if ( get_field( 'habilitar_botao', 'option' ) == 1 ) { 

          if ( !is_page( '142' )):?>
          <div class="en-link">
            <div>
              <a href="<?php echo get_site_url(); ?>/en">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/us.png" class="en-ico" alt="logo">
                <span>EN</span>
              </a>
            </div>
          </div>
          <?php else: ?>
          <div class="en-link">
            <div>
              <a href="<?php echo get_site_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/br.png" class="en-ico" alt="logo">
                <span>PT</span>
              </a>
            </div>
          </div>
          <?php endif;
} else { 
 // echo 'false'; 
} ?>
         
        </div>

      </div>
    </div>
  </header>