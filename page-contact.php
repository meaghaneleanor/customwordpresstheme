<?php 


/*
  Template Name: Contact Page
*/

get_header();  ?>

<div class="wrapper">
  <div class="hero">
  <img src="<?php echo hackeryou_get_thumbnail_url($post) ?> " alt="">
    <div class="aboutTop"></div>
  </div>



<div class="contactMain">

	<div class="hours">

		<h2>Opening Hours</h2>
		<div class="hoursContent">


			<div class="leftHours">
				<ul>
					<li>Monday</li>
					<li>Tuesday</li>
					<li>Wednesday</li>
					<li>Thursday</li>
					<li>Friday</li>
					<li>Saturday</li>
					<li>Sunday</li>
				</ul>
			</div>

			<div class="rightHours">
				<ul>
					<li>12pm  -  6pm</li>
					<li>12pm  -  6pm</li>
					<li>12pm  -  6pm</li>
					<li>12pm  -  8pm</li>
					<li>4pm  -  1am</li>
					<li>5pm  -  2am</li>
					<li>CLOSED</li>
				</ul>
			</div>

		</div><!--/.hoursContent -->

			<div class="contactAddress">
				<h2 class="h2address">Address</h2>
				<p class="address">483 Queen Street West</p>
				<p class="address2">Toronto, Ontario</p>
			</div>

	</div><!--/.hours-->
	
	<div class="contactForm">

		<div class="theForm">
			<?php the_content() ?>
		</div>3
	</div>
</div> <!--/.contactMain-->

</div><!--/.wrapper -->

<?php get_footer(); ?>