<?php
/**
 * Single page view
 *
 * @package fictional_university
 */

get_header();

while ( have_posts() ) {
	the_post(); ?>
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

	<?php $the_parent_id = wp_get_post_parent_id( get_the_ID() ); ?>
	<?php if ( 0 !== $the_parent_id ) : ?>
<div class="metabox metabox--position-up metabox--with-home-link">
<p><a class="metabox__blog-home-link" href="<?php echo esc_url( get_permalink( $the_parent_id ) ); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo esc_html( get_the_title( $the_parent_id ) ); ?></a> 
<span><?php the_title(); ?></span>
</div>
	<?php endif; ?>
	<?php
	$has_sub_pages = get_pages(
		array(
			'child_of' => get_the_ID(),
		)
	);
	?>
	<?php if ( 0 !== $the_parent_id || count( $has_sub_pages ) > 0 ) : ?>
<div class="page-links">
<h2 class="page-links__title"><a href="<?php echo esc_url( get_the_permalink( $the_parent_id ) ); ?>"><?php echo esc_html( get_the_title( $the_parent_id ) ); ?></a></h2>
<ul class="min-list">
		<?php
		wp_list_pages(
			array(
				'title_li'    => null,
				'child_of'    => 0 === $the_parent_id ? get_the_ID() : $the_parent_id,
				'sort_column' => 'menu_order',
			)
		);
		?>
</ul>
</div>
<?php endif; ?>
   

<div class="generic-content">
	<?php the_content(); ?>
</div>

</div>

<?php }

get_footer();

?>
