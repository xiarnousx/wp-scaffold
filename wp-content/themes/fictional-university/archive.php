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
<h1 class="page-banner__title">
<?php
	echo wp_kses_post( get_the_archive_title() );

?>
</h1>
<div class="page-banner__intro">
<p><?php echo wp_kses_post( get_the_archive_description() ); ?></p>
</div>
</div>  
</div>

<div class="container container--narrow page-section">
<?php while ( have_posts() ) : ?>
	<?php the_post(); ?>
	<div class="post-item">
		<h2 class="headline headline--medium headline--post-title" ><a href="<?php echo esc_url( get_the_permalink() ); ?>"><?php echo esc_html( get_the_title() ); ?></a></h2>
		<div class="metabox">
			<p>posted by <?php echo esc_html( get_the_author_link() ); ?> on <?php echo esc_html( get_the_time( 'n.j.y' ) ); ?> in <?php echo wp_kses_post( get_the_category_list( ', ' ) ); ?> </p>
		</div>
		<div class="generic-content">
			<p>
				<?php echo esc_html( get_the_excerpt() ); ?>
			</p>
			<div>
				<p>
					<a class="btn btn--blue" href="<?php echo esc_url( get_the_permalink() ); ?>">Continue reading &raquo; </a>
				</p>
			</div>
		</div>
	</div>
<?php endwhile; ?>
<?php echo wp_kses_post( paginate_links() ); ?>
</div>



<?php get_footer(); ?>
