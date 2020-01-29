<?php
/**
 * Event archive pages
 *
 * @package fictional_university
 */

get_header();
?>

<div class="page-banner">
<div class="page-banner__bg-image" style="background-image: url(<?php echo esc_url( get_theme_file_uri( '/images/ocean.jpg' ) ); ?>);"></div>
<div class="page-banner__content container container--narrow">
<h1 class="page-banner__title">All Events</h1>
<div class="page-banner__intro">
<p>Now & Then</p>
</div>
</div>  
</div>

<div class="container container--narrow page-section">
<?php while ( have_posts() ) : ?>
	<?php the_post(); ?>
	<?php $event_link = get_the_permalink(); ?>
<div class="event-summary">
	<a class="event-summary__date t-center" href="<?php echo esc_url( $event_link ); ?>">
		<span class="event-summary__month">Mar</span>
		<span class="event-summary__day">25</span>  
	</a>
	<div class="event-summary__content">
		<h5 class="event-summary__title headline headline--tiny"><a href="<?php echo esc_url( $event_link ); ?>"><?php echo wp_kses_post( get_the_title() ); ?></a></h5>
		<p><?php echo wp_kses_post( wp_trim_words( get_the_content(), 18 ) ); ?><a href="<?php echo esc_url( $event_link ); ?>" class="nu gray">Learn more</a></p>
	</div>
</div>
<?php endwhile; ?>
<?php echo wp_kses_post( paginate_links() ); ?>
</div>



<?php get_footer(); ?>
