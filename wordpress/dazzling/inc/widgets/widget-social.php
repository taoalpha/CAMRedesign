<?php

/**
 * Social  Widget
 * Dazzling Theme
 */
class dazzling_social_widget extends WP_Widget
{
    function dazzling_social_widget(){

       $widget_ops = array('classname' => 'dazzling-social','description' => esc_html__( "Issue Selecor" ,'dazzling') );
       parent::__construct('dazzling-social', esc_html__('Issue Selecor','dazzling'), $widget_ops);
    }

    function widget($args , $instance) {
    	extract($args);
        // $title = isset($instance['title']) ? $instance['title'] : esc_html__('Follow us' , 'dazzling');

        echo $before_widget;
        // echo $before_title;
        // echo $title;
        echo $after_title;

        /**
         * Widget Content
         */ ?>

        <!-- social icons -->
        <div class="social-icons sticky-sidebar-social">
            <!-- <?php dazzling_social_icons(); ?> -->
                <div class="content">
                    <ul>
                      <?php

                      $args = array(
                      	'type'                     => 'post',
                      	'child_of'                 => 128,
                      	'orderby'                  => 'id',
                      	'order'                    => 'desc',
                      	'hide_empty'               => 1,
                      	'hierarchical'             => 1,
                      	'taxonomy'                 => 'category',
                      	'pad_counts'               => false

                      );

                      $currentIssue = of_get_option('current_issue');
                      if(!isset($_GET['cid'])){
                        $current_cid = $currentIssue;
                      }else{
                        $current_cid = $_GET['cid'];
                      }
                      $categories = get_categories( $args );
                      foreach ($categories as $category) {
                        /** All old issues should have a larger id than current and also stop the unpublished new issue show up on this list**/
                        //  && $category ->cat_ID <= $currentIssue
                        if($category -> parent == 128){
                          if($category ->cat_ID == $current_cid){
                            echo '<li class="active"><a id='.$category ->cat_ID.' href="?cid='.$category ->cat_ID.'">'.$category->name.'</a></li>';
                          }else{
                            echo '<li><a id='.$category ->cat_ID.' href="?cid='.$category ->cat_ID.'">'.$category->name.'</a></li>';
                          }
                        };
                      }
                     ?>
                    </ul>
            </div>
              <?php
              foreach ($categories as $category) {
                if($category -> cat_ID == $current_cid){
                  $ar = explode("\n", $category->description);
                  $imgUrl = $ar[0];
                  $pdfUrl = $ar[1];
                  echo '<div class="ads-panel"><img src="'.$imgUrl.'" alt=""></div>';
                  echo '<button class="button"><a href="'.$pdfUrl.'" target="_blank">Download the PDF</a></button>';
                }
              }
              ?>

        </div><!-- end social icons --><?php

        echo $after_widget;
    }

    function form($instance) {
      if(!isset($instance['title'])) $instance['title'] = esc_html__('Follow us' , 'dazzling'); ?>

      <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php esc_html_e('Title ','dazzling') ?></label>

      <input type="text" value="<?php echo esc_attr($instance['title']); ?>"
                          name="<?php echo $this->get_field_name('title'); ?>"
                          id="<?php $this->get_field_id('title'); ?>"
                          class="widefat" />
      </p><?php
    }

}
?>
