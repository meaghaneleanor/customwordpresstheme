<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header><!--Start of Header-->
  <div class="wrapper"><!--Start of /.wrapper-->
      <a href="<?php echo home_url( '/' ); ?>">
      </a>
      
    
    <nav class="navHeader">
     <h1><?php bloginfo('name'); ?></h1>
      <div class="logo">
        <i class="fa fa-bars"></i>
      </div>
      <div class="logo2">
        <i class="fa fa-times"></i>
      </div>
      <?php wp_nav_menu( array(
        'container' => false,
        'theme_location' => 'primary'
      )); ?>  
    </nav>

    <div class="mobileNav">
      <?php wp_nav_menu( array(
        'container' => false,
        'theme_location' => 'primary'
      )); ?>  
    </div>

    <div class="headerBottom"></div>

  </div> <!-- /.wrapper -->
</header><!--/.header-->

