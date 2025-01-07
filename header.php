<?php
/** 
 * Contiene header
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
   <title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
   <meta charset="<?php bloginfo( 'charset' ); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
   <?php wp_head(); ?>
 </head>
 <body <?php body_class(); ?>>
    <header>
      <div class="header-top">
        <div class="container-header-top">
          <div class="content-header-top">
            <span>info@ircongas.com</span>
          </div>
          <div class="content-header-top t-right">
            <span>C/De la Tecnología, 5 P. I Los Olivos (Madrid)</span>
          </div>
        </div>
      </div>
      <div class="header-bottom">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="f-left">
          <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo" class="img-responsive">
        </a>
        <?php wp_nav_menu( array( 'header-menu' => 'header-menu' ) ); ?>
        <img src="<?php echo get_template_directory_uri(); ?>/images/user.png" alt="Icono usuario" class="img-responsive f-right">
        <a href="#" class="f-right btn-estimate">Solicitar Presupuesto</a>
      </div>
    </header>