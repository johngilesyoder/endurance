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

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<div id="hero" class="carousel slide">
    <ol class="carousel-indicators">
      <li data-target="#hero" data-slide-to="0" class="active"></li>
      <li data-target="#hero" data-slide-to="1" class=""></li>
      <li data-target="#hero" data-slide-to="2" class=""></li>
    </ol>
    <div class="carousel-inner">
      <div class="item panel-1 active">
      	<img src="<?php bloginfo('template_directory' ); ?>/assets/img/home/hero-logo-large.png" alt="">
        
      </div>
      <div class="item panel-2">
        
        
      </div>
      <div class="item panel-3">
        
        
      </div>
    </div>
    <a class="left carousel-control" href="#hero" data-slide="prev">‹</a>
    <a class="right carousel-control" href="#hero" data-slide="next">›</a>
</div>

<div class="primary-info">
	<div class="container">
		<div class="span12">
			<img src="<?php bloginfo('template_directory' ); ?>/assets/img/home/primary-info-chris.png" alt="">
			<p><em>Endurance Hawaii</em> specializes in Personalized VIP endurance camps and features hands-on expert training
			with professional triathlete and three time Ironman champion, <strong><em>Chris Lieto</em></strong>.</p>
		</div>
	</div>
</div>

<section class="about">
	<div class="container">
		<div class="span12">
			<h2>About Endurance Hawaii<sup>&reg;</sup></h2>
		</div>
	</div>
</section>

<div class="container">
	<div class="span12">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>

		<?php endwhile; ?>
	</div>
</div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>