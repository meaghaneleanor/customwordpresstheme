<?php get_header();  ?>

<div class="wrapper">
  <div class="hero">
    <img><?php  ?>
    <h2><?php bloginfo('description'); ?></h2> 
    <div class="aboutTop"></div>
  </div>



  <div class="main">
      <h2><?php 
        $title = get_the_title(); 
        echo $title
        ?></h2>

      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

</div>

 <!--    <?php get_sidebar(); ?> -->


<?php get_footer(); ?>