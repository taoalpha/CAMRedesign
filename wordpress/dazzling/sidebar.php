<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package dazzling
 */
?>
	</div><!-- close .container -->
	</div><!-- close .left-panel"> -->
	<div id="secondary" class="right-panel" role="complementary">
		<?php do_action( 'before_sidebar' ); ?>
		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

			<aside id="search" class="widget widget_search">
				<?php get_search_form(); ?>
			</aside>

			<aside id="archives" class="widget">
				<h1 class="widget-title"><?php _e( 'Archives', 'dazzling' ); ?></h1>
				<ul>
					<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
				</ul>
			</aside>

			<aside id="meta" class="widget">
				<h1 class="widget-title"><?php _e( 'Meta', 'dazzling' ); ?></h1>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</aside>

		<?php endif; // end sidebar widget area ?>
		<div class="socialshare">
			<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/fb.png" alt=""></a>
	    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/google.png" alt=""></a>
	    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" alt=""></a>
	    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/pintrest.png" alt=""></a>
		</div>
	</div><!-- #secondary -->
