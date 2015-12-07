<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package dazzling
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<!--  ^ header -->
	<div class="header">
	  <div class="container">
			<?php if( get_header_image() != '' ) : ?>
	    <div class="logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>" alt="<?php bloginfo( 'name' ); ?>"/></a>
	    </div>
		<?php endif; // header image was removed ?>

		<?php if( !get_header_image() ) : ?>
			<div id="logo">
				<span class="site-title"><a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
			</div><!-- end of #logo -->
		<?php endif; // header image was removed (again) ?>

	    <div class="donate">
	      <div class="subscrib-icon"> <a href="#">Subscribe</a> </div>
	      <div class="donate-icon"> <a href="#">Donate</a> </div>
	    </div>
	    <button id="menu"><span></span><span></span><span></span></button>
	  </div>
	  <div class="clr"></div>
	  <div class="nav">
	    <div class="container">
				<?php dazzling_header_menu(); ?>
				<form method="get" class="search-bar" action="<?php echo esc_url( home_url( '/' ) ); ?>">
					<div class="form-group">
						<div class="input-group">
					  		<span class="screen-reader-text"><?php _ex( 'Search for:', 'label', 'dazzling' ); ?></span>
					    	<input type="text" class="form-control search-query" placeholder="<?php _e( 'Search...', 'dazzling' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s">
					    	<!-- <span class="input-group-btn">
					      		<button type="submit" class="btn btn-default" name="submit" id="searchsubmit" value="Search"></button>
					    	</span> -->
					    </div>
					</div>
				</form>
	    </div>
	  </div>
	</div>
	<!-- $ header -->
        <!-- <div class="top-section">
        </div> -->
        <div id="content" class="site-content">
        	<div class="left-panel">
					<?php dazzling_featured_slider(); ?>
					<?php dazzling_call_for_action(); ?>

            <div class="container main-content-area"><?php

                global $post;
                if( get_post_meta($post->ID, 'site_layout', true) ){
                        $layout_class = get_post_meta($post->ID, 'site_layout', true);
                }
                else{
                        $layout_class = of_get_option( 'site_layout' );
                }
                if( is_home() && is_sticky( $post->ID ) ){
                        $layout_class = of_get_option( 'site_layout' );
                }
                ?>
