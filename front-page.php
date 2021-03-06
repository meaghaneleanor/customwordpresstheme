<?php get_header();  ?>

<div class="wrapper">
  <div class="hero">
  <img src="<?php echo hackeryou_get_thumbnail_url($post) ?> " alt="">
    <div class="aboutTop"></div>
  </div>



  <div class="main">
      <h2><?php 
        $title = get_the_title(); 
        echo $title
        ?></h2>

  <div class="mainContent">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
  </div> <!-- /.mainContent end-->
  </div> <!-- /.content -->

  <div class="aboutImages">
   <?php //starting the loop 

    $args = array(
      'post_type' => 'post',
      'posts_per_page' => -1
      );

    $postImageQuery = new WP_Query($args);

    if ($postImageQuery->have_posts()) while ($postImageQuery->have_posts()) :
      $postImageQuery->the_post(); 

      $postImage = hackeryou_get_thumbnail_url($post);

      if ($postImage != '') {

   ?>
        <img src="<?php echo hackeryou_get_thumbnail_url($post) ?> " alt=""> 


    <?php 

      }
      endwhile; //end the loop ?>

  </div>

  </div>
</div><!-- /.wrapper -->




<?php get_footer(); ?>