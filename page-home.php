<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>

<!-- Page Specific Styles -->
<link href="<?php bloginfo('template_directory' ); ?>/assets/css/areas/home.css" rel="stylesheet">

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header-home' ) ); ?>

<div id="hero" class="carousel slide">
    <ol class="carousel-indicators">
      <li data-target="#hero" data-slide-to="0" class="active"></li>
      <li data-target="#hero" data-slide-to="1" class=""></li>
      <li data-target="#hero" data-slide-to="2" class=""></li>
    </ol>
    <div class="carousel-inner">
      <!-- PANEL 1 -->	
      <div class="item panel-1 active">
      	<img src="<?php bloginfo('template_directory' ); ?>/assets/img/home/hero-logo-large.png" alt="">
      </div>
      <!-- PANEL 2 -->
      <div class="item panel-2">
        <div class="container">
      		<div class="row">
      			<div class="span12">
      				<div class="content">
        				<h3>Set a pace.</h3>
        				<h4>Subtitle goes here and it’s catchy.</h4>
        				<a href="#" class="video-thumb"><img src="<?php bloginfo('template_directory' ); ?>/assets/img/home/hero-video-panel-2.png" alt=""></a>
        				<img src="<?php bloginfo('template_directory' ); ?>/assets/img/home/hero-logo-small.png" alt="">
        			</div>
        		</div>
        	</div>
        </div>
      </div>
      <!-- PANEL 3 -->
      <div class="item panel-3">
      	<div class="container">
      		<div class="row">
      			<div class="span12">
      				<div class="content">
        				<img src="<?php bloginfo('template_directory' ); ?>/assets/img/home/hero-logo-small.png" alt="">
        				<h3>Find your strength.</h3>
        				<h4>Personalized endurance camps in Kona, Hawaii.</h4>
        			</div>
        		</div>
        		<div class="span4 offset7">
					<a href="#theCamps" class="btn btn-primary btn-large">Learn more about our camps</a>
				</div>
        	</div>
        </div>
      </div>
    </div>
    <a class="left carousel-control" href="#hero" data-slide="prev">‹</a>
    <a class="right carousel-control" href="#hero" data-slide="next">›</a>
</div>

<div class="primary-info">
	<div class="container">
		<div class="row">
			<div class="span12">
				<img src="<?php bloginfo('template_directory' ); ?>/assets/img/home/primary-info-chris.png" alt="">
				<p><em>Endurance Hawaii</em> specializes in Personalized VIP endurance camps and features hands-on expert training
				with professional triathletes such as Ironman champion, <strong><em>Chris Lieto</em></strong>.</p>
			</div>
		</div>
	</div>
</div>

<section id="about">
	<div class="container">
		<div class="row">
			<div class="span12">
				<h2>About Endurance Hawaii<sup>&reg;</sup></h2>

				<ul class="tab-toggles" id="aboutTab">
				  <li class="active"><a href="#vision" data-toggle="tab">Our Vision</a></li>
				  <li><a href="#offer" data-toggle="tab">What we offer</a></li>
				  <li><a href="#testimonials" data-toggle="tab">Testimonials</a></li>
				</ul>
				 
				<div class="tab-content">
					<!-- PANEL 1 -->	
					<div class="tab-pane active" id="vision">
						<div class="row">
							<a href="#" class="thumbnail span6"><img src="<?php bloginfo('template_directory' ); ?>/assets/img/home/our-vision-video.png" alt=""></a>
							<div class="span5">
								<h4>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</h4>
								<p>If you are coming to Hawaii for vacation and want to spend a day with world class ironman champion or if you want to plan a week long camp with your closest friends or your club we will make your time in Hawaii an unforgettable experience full of adventure, seeing areas of Hawaii you never knew where there, and learn skills from one of the worlds best ironman athletes. </p>
							</div>
						</div>
					</div>

				  <!-- PANEL 2 -->
				  <div class="tab-pane" id="offer">
				  	<div class="row">
							
							<div class="span5">
								<h4>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</h4>
								<p>If you are coming to Hawaii for vacation and want to spend a day with world class ironman champion or if you want to plan a week long camp with your closest friends or your club we will make your time in Hawaii an unforgettable experience full of adventure, seeing areas of Hawaii you never knew where there, and learn skills from one of the worlds best ironman athletes.</p>
							</div>
						</div>
				  </div>
				  
				  <!-- PANEL 3 -->
				  <div class="tab-pane" id="testimonials">
				  	<div class="row">
							<div class="span5">
								<h4>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</h4>
								<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi.</p>
							</div>
							<a href="#" class="thumbnail span6"><img src="<?php bloginfo('template_directory' ); ?>/assets/img/home/our-vision-video.png" alt=""></a>
						</div>
				  </div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="theCamps">
	<h2>The Camps</h2>
	<div class="container">
		<div class="row">
			<div class="span12">
				<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed posuere consectetur est at lobortis. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Nullam quis risus eget urna mollis ornare vel eu leo. Cras mattis consectetur purus sit amet fermentum.</p>
				<p>Nullam quis risus eget urna mollis ornare vel eu leo. Sed posuere consectetur est at lobortis. Maecenas faucibus mollis interdum. Vestibulum id ligula porta felis euismod semper.</p>
				<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Maecenas faucibus mollis interdum. Nullam quis risus eget urna mollis ornare vel eu leo. Maecenas faucibus mollis interdum.</p><p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed posuere consectetur est at lobortis. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Nullam quis risus eget urna mollis ornare vel eu leo. Cras mattis consectetur purus sit amet fermentum.</p>
				<p>Nullam quis risus eget urna mollis ornare vel eu leo. Sed posuere consectetur est at lobortis. Maecenas faucibus mollis interdum. Vestibulum id ligula porta felis euismod semper.</p>
			</div>
		</div>
	</div>
</section>

<section id="aboutChris">
	<div class="container">
		<div class="row">
			<div class="span12">
				<h2>About Chris Lieto</h2>
				<div class="row">
					<div class="span5">
						<h4>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</h4>
						<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi.</p>
					</div>
					<a class="thumbnail span6"><img src="<?php bloginfo('template_directory' ); ?>/assets/img/home/about-chris.png" alt=""></a>
				</div>
				<div class="row">
					<div class="span12 sponsors">
						<h4>Current Sponsors</h4>
						<hr />
						<div class="logos">
							<img src="<?php bloginfo('template_directory' ); ?>/assets/img/home/sponsor-base.png" alt="">
							<img src="<?php bloginfo('template_directory' ); ?>/assets/img/home/sponsor-morethansport.png" alt="">
							<img src="<?php bloginfo('template_directory' ); ?>/assets/img/home/sponsor-trek.png" alt="">
							<img src="<?php bloginfo('template_directory' ); ?>/assets/img/home/sponsor-powerbar.png" alt="">
							<img src="<?php bloginfo('template_directory' ); ?>/assets/img/home/sponsor-bontrager.png" alt="">
							<img src="<?php bloginfo('template_directory' ); ?>/assets/img/home/sponsor-giro.png" alt="">
							<img src="<?php bloginfo('template_directory' ); ?>/assets/img/home/sponsor-speedplay.png" alt="">
							<img src="<?php bloginfo('template_directory' ); ?>/assets/img/home/sponsor-xterra.png" alt="">
							<img src="<?php bloginfo('template_directory' ); ?>/assets/img/home/sponsor-fuelbelt.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



<!-- <div class="container">
	<div class="span12">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		
		<?php the_content(); ?>

		<?php endwhile; ?>
	</div>
</div> -->

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>