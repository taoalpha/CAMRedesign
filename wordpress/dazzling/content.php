<?php
/**
 * @package dazzling
 */
?>

<li class="content-row" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( has_post_thumbnail()) : ?>
	<div class="left">
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
			<?php the_post_thumbnail( 'dazzling-featured', array( 'class' => 'thumbnail col-sm-6' )); ?>
		</a>
  </div>
	<?php endif; ?>

	<div class="right">
		<header class="entry-header page-header">
			<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		</header><!-- .entry-header -->
		<div class="entry-summary">
			<?php the_excerpt(); ?>
			<!-- <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"></a> -->
			<?php
				wp_link_pages( array(
					'before'            => '<div class="page-links">'.__( 'Pages:', 'dazzling' ),
					'after'             => '</div>',
					'link_before'       => '<span>',
					'link_after'        => '</span>',
					'pagelink'          => '%',
					'echo'              => 1
	       		) );
	    	?>
		</div><!-- .entry-summary -->
		<?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta">
				<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
				<span class="comments-link"><i class="fa fa-comment-o"></i><?php comments_popup_link( __( 'Leave a comment', 'dazzling' ), __( '1 Comment', 'dazzling' ), __( '% Comments', 'dazzling' ) ); ?></span>
				<?php endif; ?>

				<?php edit_post_link( __( 'Edit', 'dazzling' ), '<i class="fa fa-pencil-square-o"></i><span class="edit-link">', '</span>' ); ?>
				<a class="btn btn-default read-more" href="<?php the_permalink(); ?>"><?php _e( 'Continue reading', 'dazzling' ); ?> <i class="fa fa-chevron-right"></i></a>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</div>
	<div class="clr"></div>
</li><!-- #post-## -->
