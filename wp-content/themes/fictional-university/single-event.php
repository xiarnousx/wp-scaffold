<?php
/**
 * Single page for event post types.
 *
 * @package fictional_university
 * @version 1.0.0
 */

get_header();

while ( have_posts() ) : ?>

	<?php the_post(); ?>
<div class="page-banner">
<div class="page-banner__bg-image" style="background-image: url(<?php echo esc_url( get_theme_file_uri( '/images/ocean.jpg' ) ); ?>);"></div>
<div class="page-banner__content container container--narrow">
<h1 class="page-banner__title"><?php the_title(); ?></h1>
<div class="page-banner__intro">
<p>DONT FORGET TO REPLACE ME LATER</p>
</div>
</div>  
</div>

<div class="container container--narrow page-section">
<div class="metabox metabox--position-up metabox--with-home-link">
<p><a class="metabox__blog-home-link" href="<?php echo esc_url( get_post_type_archive_link( 'event' ) ); ?>">
<i class="fa fa-home" aria-hidden="true"></i> Events</a> 
<span class="metabox__main"><?php echo wp_kses_post( get_the_title() ); ?></span>
</div>
<div class="generic-content">
	<?php echo wp_kses_post( get_the_content() ); ?>
</div>
</div>


	<?php
endwhile;

get_footer();
