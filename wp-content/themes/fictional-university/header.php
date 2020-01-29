<?php
/**
 * Header Page for fictional university theme
 *
 * @package fictional_university
 */

?>
<!DOCTYPE html <?php language_attributes(); ?>>
<html>
<head>
<meta charset="<?php echo esc_attr( bloginfo( 'charset' ) ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<?php wp_head(); ?>
</head>
<body <?php echo esc_attr( body_class() ); ?>>
<header class="site-header">
<div class="container">
<h1 class="school-logo-text float-left"><a href="<?php echo esc_url( site_url() ); ?>"><strong>Fictional</strong> University</a></h1>
<span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
<i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
<div class="site-header__menu group">
<nav class="main-navigation">
<ul class="min-list group">
<li <?php echo ( is_page( 'about-us' ) || wp_get_post_parent_id( 0 ) ) ? 'class="current-menu-item"' : ''; ?> ><a href="<?php echo esc_url( site_url( '/about-us' ) ); ?>">About Us</a></li>
<li <?php echo ( is_page( 'programs' ) ) ? 'class="current-menu-item"' : ''; ?> ><a href="#">Programs</a></li>
<li <?php echo ( get_post_type() === 'event' || is_page( 'past-events' ) ) ? 'class="current-menu-item"' : ''; ?> ><a href="<?php echo esc_url( get_post_type_archive_link( 'event' ) ); ?>">Events</a></li>
<li <?php echo ( is_page( 'campuses' ) ) ? 'class="current-menu-item"' : ''; ?> ><a href="#">Campuses</a></li>
<li <?php echo ( 'post' === get_post_type() ) ? 'class="current-menu-item"' : ''; ?>  ><a href="<?php echo esc_url( site_url( '/blog' ) ); ?>">Blog</a></li>
</ul>
</nav>
<div class="site-header__util">
<a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
<a href="#" class="btn btn--small  btn--dark-orange float-left">Sign Up</a>
<span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
</div>
</div>
</div>
</header>
