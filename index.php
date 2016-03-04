<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="wrapper">
  <div class="newsContainer">


    <div class="newsContent">
    	 <?php // Start the loop ?>
      		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

       		 <h3><?php echo get_the_title(); ?></h3>
       		 <h5><?php echo get_the_date(); ?></h5>
       		 <img src="<?php echo hackeryou_get_thumbnail_url($post) ?> " alt="">
       		 <?php the_content(); ?>

     	 <?php endwhile; // end the loop?>

    </div> <!--/.newsContent -->
	
	<div class="newsSidebar">
    	<?php dynamic_sidebar( 'news-widget-area') ?>
    </div>

  </div> <!-- /.newscontainer -->
</div> <!-- /.wrapper -->

<?php get_footer(); ?>