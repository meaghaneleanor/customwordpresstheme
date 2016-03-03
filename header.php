<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header><!--Start of Header-->
  <div class="wrapper"><!--Start of /.wrapper-->
      <a href="<?php echo home_url( '/' ); ?>">
      <div class="logo">
      </div>
      </a>
    
    <nav class="navHeader">
      <?php wp_nav_menu( array(
        'container' => false,
        'theme_location' => 'primary'
      )); ?>  
    </nav>

    <div class="headerBottom"></div>

  </div> <!-- /.wrapper -->
</header><!--/.header-->

