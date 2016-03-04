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
					<li>Days</li>
					<li>Monday</li>
					<li>Tuesday</li>
					<li>Wednesday</li>
					<li>Thursday</li>
					<li>Friday</li>
					<li>Saturday</li>
					<li>Sunday</li>
				</ul>
			<div class="rightHours">
				<ul>
					<li>Open // Close</li>
					<li>12pm - 6pm</li>
					<li>12pm - 6pm</li>
					<li>12pm - 6pm</li>
					<li>4pm - 1am</li>
					<li>5pm - 2am</li>
					<li>CLOSED</li>
				</ul>
			</div>

			<div class="address">
				<h2>Address</h2>
				
			</div>
		</div>
	</div>

	<div class="contactForm">

		<?php the_content() ?>
	</div>
</div>

</div><!--/.wrapper -->

<?php get_footer(); ?>