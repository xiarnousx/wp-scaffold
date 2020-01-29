<?php
/**
 * Blog pages
 *
 * @package fictional_university
 */

get_header();
?>

<div class="page-banner">
<div class="page-banner__bg-image" style="background-image: url(<?php echo esc_url( get_theme_file_uri( '/images/ocean.jpg' ) ); ?>);"></div>
<div class="page-banner__content container container--narrow">
<h1 class="page-banner__title">Past Events</h1>
<div class="page-banner__intro">
<p>Recap of our past events</p>
</div>
</div>  
</div>

<div class="container container--narrow page-section">
	<?php
		$today       = gmdate( 'Y-m-d H:i:s' );
		$past_events = new WP_Query(
			array(
				'posts_per_page' => 10,
				'paged'          => get_query_var( 'paged', 1 ),
				'post_type'      => 'event',
				'post_type'      => 'event',
				'meta_key'       => 'event_date',
				'orderby'        => 'meta_value_num', // 'rand'
				'order'          => 'ASC',
				'meta_query'     => array(
					array(
						'key'     => 'event_date',
						'compare' => '<',
						'value'   => $today,
					),
				),

			)
		);
		?>
<?php while ( $past_events->have_posts() ) : ?>
	<?php $past_events->the_post(); ?>
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
<?php
echo wp_kses_post(
	paginate_links(
		array(
			'total' => $past_events->max_num_pages,
		)
	)
);
?>
</div>



<?php get_footer(); ?>
