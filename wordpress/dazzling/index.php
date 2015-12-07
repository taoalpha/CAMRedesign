<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package dazzling
 */

get_header(); ?>

        <div id="primary" class="content-area col-sm-12 col-md-8">
              <div class="home-widget-area row">
            		<?php if ( is_active_sidebar( 'home-widget-1' ) ) : ?>
            		<div class="row home-widget" role="complementary">
            			<?php dynamic_sidebar( 'home-widget-1' ); ?>
            		</div><!-- .widget-area .first -->
            		<?php endif; ?>

            		<?php if ( is_active_sidebar( 'home-widget-2' ) ) : ?>
            		<div class="row home-widget" role="complementary">
            			<?php dynamic_sidebar( 'home-widget-2' ); ?>
            		</div><!-- .widget-area .second -->
            		<?php endif; ?>

            		<?php if ( is_active_sidebar( 'home-widget-3' ) ) : ?>
            		<div class="row home-widget" role="complementary">
            			<?php dynamic_sidebar( 'home-widget-3' ); ?>
            		</div><!-- .widget-area .third -->
            		<?php endif; ?>
            	</div>
                <main id="main" class="site-main" role="main">

                <div class="tab-panels tabbed">
                    <?php
                      $currentIssue = of_get_option('current_issue');
                      if(!isset($_GET['cid'])){
                        $catID = $currentIssue;
                      }else{
                        $catID = $_GET['cid'];
                      }
                      $cat = array($catID);
                      $categories = get_categories('child_of='.$catID.'&hide_empty=1');
                      echo '<div class="tabs-wrapper"><ul class="tabs-head">';
                      foreach ($categories as $category) {
                        if($category->name == "Currents"){
                          echo '<li class="active"><a href="#'.$category->slug.'" data-toggle="tab" aria-expanded="true">'.$category->name.'</a></li>';
                        }else{
                          echo '<li><a href="#'.$category->slug.'" data-toggle="tab" aria-expanded="true">'.$category->name.'</a></li>';
                        }
                      }
                      echo '</ul></div><div id="tabs" class="tab-content">';
                      $count = 0;
                      foreach ($categories as $category) {
                        query_posts(array('category__in' => $cat,'category_name' => $category->slug,'posts_per_page'=>5,'order'=>DESC));
                        if($count == 0){
                          echo '<ul id="'.$category->slug.'" class="tab-pane active">';
                        }else{
                          echo '<ul id="'.$category->slug.'" class="tab-pane">';
                        }
                        $count = $count + 1;
                        if ( have_posts() ) : ?>

                          <?php /* Start the Loop */ ?>
                          <?php while ( have_posts() ) : the_post(); ?>

                                  <?php
                                          /* Include the Post-Format-specific template for the content.
                                           * If you want to override this in a child theme, then include a file
                                           * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                           */
                                          get_template_part( 'content', get_post_format() );
                                  ?>

                          <?php endwhile; ?>

                        <?php else : ?>

                                <?php get_template_part( 'content', 'none' ); ?>

                        <?php endif; ?>
                        </ul>
                      <?php } ?>
              </div>
            </div>
                </main><!-- #main -->
        </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
