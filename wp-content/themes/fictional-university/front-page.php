<?php
/**
 *  Main entry point for fictional university theme
 *
 * @package fictional_university
 */

?>
<?php get_header(); ?>
<div class="page-banner">
<div class="page-banner__bg-image" style="background-image: url(<?php echo esc_attr( get_theme_file_uri( '/images/library-hero.jpg' ) ); ?>);"></div>
<div class="page-banner__content container t-center c-white">
<h1 class="headline headline--large">Welcome!</h1>
<h2 class="headline headline--medium">We think you&rsquo;ll like it here.</h2>
<h3 class="headline headline--small">Why don&rsquo;t you check out the <strong>major</strong> you&rsquo;re interested in?</h3>
<a href="#" class="btn btn--large btn--blue">Find Your Major</a>
</div>
</div>

<div class="full-width-split group">
<div class="full-width-split__one">
<div class="full-width-split__inner">
<h2 class="headline headline--small-plus t-center">Upcoming Events</h2>
<?php
	$home_page_events = new WP_Query(
		array(
			'posts_per_page' => -1,
			'post_type'      => 'event',
			'orderby'        => 'title',

		)
	);
	?>
<?php while ( $home_page_events->have_posts() ) : ?>
	<?php $home_page_events->the_post(); ?>
	<?php
	$event_date = new DateTime( get_field( 'event_date' ) );
	$month      = $event_date->format( 'M' );
	$day        = $event_date->format( 'd' );
	?>
	<?php $event_link = get_the_permalink(); ?>
<div class="event-summary">
<a class="event-summary__date t-center" href="<?php echo esc_url( $event_link ); ?>">
<span class="event-summary__month"><?php echo esc_html( $month ); ?></span>
<span class="event-summary__day"><?php echo esc_html( $day ); ?></span>  
</a>
<div class="event-summary__content">
<h5 class="event-summary__title headline headline--tiny"><a href="<?php echo esc_url( $event_link ); ?>"><?php echo wp_kses_post( get_the_title() ); ?></a></h5>
<p>
	<?php
	if ( has_excerpt() ) {
		echo wp_kses_post( get_the_excerpt() );
	} else {
		echo wp_kses_post( wp_trim_words( get_the_content(), 18 ) );
	}
	?>
	<a href="<?php echo esc_url( $event_link ); ?>" class="nu gray">Learn more</a></p>
</div>
</div>
<?php endwhile; ?>

<p class="t-center no-margin"><a href="<?php echo esc_url( get_post_type_archive_link( 'event' ) ); ?>" class="btn btn--blue">View All Events</a></p>

</div>
</div>
<div class="full-width-split__two">
<div class="full-width-split__inner">
<h2 class="headline headline--small-plus t-center">From Our Blogs</h2>
<?php
	$home_page_posts = new WP_Query(
		array(
			'posts_per_page' => 2,
			'sort_order'     => 'desc',
		)
	);
	?>
<?php while ( $home_page_posts->have_posts() ) : ?>
	<?php $home_page_posts->the_post(); ?>
<div class="event-summary">
	<a class="event-summary__date event-summary__date--beige t-center" href="<?php echo esc_url( get_the_permalink() ); ?>">
		<span class="event-summary__month"><?php echo esc_html( get_the_time( 'M' ) ); ?></span>
		<span class="event-summary__day"><?php echo esc_html( get_the_time( 'd' ) ); ?></span>  
	</a>
	<div class="event-summary__content">
		<h5 class="event-summary__title headline headline--tiny"><a href="<?php esc_url( get_the_permalink() ); ?>"><?php echo esc_html( get_the_title() ); ?></a></h5>
		<p>
		<?php
		if ( has_excerpt() ) {
			echo wp_kses_post( get_the_excerpt() );
		} else {
			echo wp_kses_post( wp_trim_words( get_the_content(), 18 ) );
		}
		?>
		<a href="<?php esc_url( get_the_permalink() ); ?>" class="nu gray">Read more</a></p>
	</div>
</div>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>

<p class="t-center no-margin"><a href="<?php echo esc_url( site_url( '/blog' ) ); ?>" class="btn btn--yellow">View All Blog Posts</a></p>
</div>
</div>
</div>

<div class="hero-slider">
<div class="hero-slider__slide" style="background-image: url(<?php echo esc_attr( get_theme_file_uri( '/images/bus.jpg' ) ); ?>);">
<div class="hero-slider__interior container">
<div class="hero-slider__overlay">
<h2 class="headline headline--medium t-center">Free Transportation</h2>
<p class="t-center">All students have free unlimited bus fare.</p>
<p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
</div>
</div>
</div>
<div class="hero-slider__slide" style="background-image: url(<?php echo esc_attr( get_theme_file_uri( '/images/apples.jpg' ) ); ?>);">
<div class="hero-slider__interior container">
<div class="hero-slider__overlay">
<h2 class="headline headline--medium t-center">An Apple a Day</h2>
<p class="t-center">Our dentistry program recommends eating apples.</p>
<p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
</div>
</div>
</div>
<div class="hero-slider__slide" style="background-image: url(<?php echo esc_attr( get_theme_file_uri( '/images/bread.jpg' ) ); ?>);">
<div class="hero-slider__interior container">
<div class="hero-slider__overlay">
<h2 class="headline headline--medium t-center">Free Food</h2>
<p class="t-center">Fictional University offers lunch plans for those in need.</p>
<p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
</div>
</div>
</div>
</div>

<?php get_footer(); ?>
