<?php
/**
 * Single post Page for fictional university theme.
 *
 * @package fictional_university
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
<p><a class="metabox__blog-home-link" href="<?php echo esc_url( site_url( '/blog' ) ); ?>">
<i class="fa fa-home" aria-hidden="true"></i> Blog Home</a> 
<span class="metabox__main">posted by <?php echo esc_html( get_the_author_link() ); ?> on <?php echo esc_html( get_the_time( 'n.j.y' ) ); ?> in <?php echo wp_kses_post( get_the_category_list( ', ' ) ); ?> </span>
</div>
<div class="generic-content">
	<?php echo wp_kses_post( get_the_content() ); ?>
</div>
</div>


	<?php
endwhile;

get_footer();
