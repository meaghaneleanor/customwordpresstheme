<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="wrapper">
  <div class="newsContainer">


    <div class="newsContent">
    	
		<?php get_template_part( 'loop', 'copy' );	?>
    </div> <!--/.newsContent -->
	
	<div class="newsSidebar">
    	<?php dynamic_sidebar( 'news-widget-area') ?>
    </div>

  </div> <!-- /.newscontainer -->
</div> <!-- /.wrapper -->

<?php get_footer(); ?>