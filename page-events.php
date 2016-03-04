<?php 


/*
  Template Name: Events Page
*/

get_header();  ?>

<div class="wrapper">
      <div class="content">

        <div class="eventsSidebar">
          <?php get_sidebar('primary-widget-area'); ?>
        </div>

        <div class="eventsMain">
        <h2><?php 
        $title = get_the_title(); 
        echo $title
        ?></h2>
          <div class="events">
            <?php // Start the loop ?>
            <?php 
            //Set of arguments or options for a new query(loop)
            $eventArgs = array(
              'category_name' => 'event' 
            );
            //Create the new query(loop)
            $eventLoop = new WP_Query($eventArgs);


            while($eventLoop->have_posts()) {
              $eventLoop->the_post();          
            ?>     
              <img src="<?php echo hackeryou_get_thumbnail_url($post) ?>">
              <div class="eventsInfo">
                <h3><?php the_title(); ?></h3>
                <?php the_content(); ?>
              </div>

            <?php } ?>  
          </div><!--/.events-?-->
        </div><!--/.eventsMain -->
    </div> <!-- /,content -->



</div><!--/.wrapper -->

<?php get_footer(); ?>