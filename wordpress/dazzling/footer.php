<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package dazzling
 */
?>
        </div><!-- close .site-content -->

  <div class="footer">
    <div class="container footer-inner">
			<?php get_sidebar( 'footer' ); ?>
		</div>
    <div class="container">
    	<div class="footer-col">
      	<h4>More CAM</h4>
          <ul>
          	<li><a href="#">Letter to the editor</a></li>
              <li><a href="#">About CAM</a></li>
              <li><a href="#">Cornell Authors</a></li>
              <li><a href="#">Ivy League Magazine Network</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Archives</a></li>
              <li><a href="#">Staff Directory</a></li>
              <li><a href="#">Internships</a></li>
              <li><a href="#">Advertise</a></li>
          </ul>
      </div>
      <div class="footer-col">
      	<h4>Get Involved</h4>
          <ul>
          	<li><a href="#">Subscribe</a></li>
              <li><a href="#">Donate</a></li>
              <li><a href="#">Submit Class Notes</a></li>
              <li><a href="#">Pay Class Dues</a></li>
              <li><a href="#">Update your address</a></li>
              <li><a href="#">Join the Reader Panel </a></li>
              <li><a href="#">Alumni Photo Gallery</a></li>
              <li><a href="#">Facebook</a></li>
              <li><a href="#">Twitter</a></li>
          </ul>
      </div>
      <div class="footer-col">
      	<h4>More Cornell</h4>
          <ul>
          	<li><a href="#">Cornell Alumni Association</a></li>
              <li><a href="#">Cornell University</a></li>
              <li><a href="#">Reunion</a></li>
              <li><a href="#">Homecoming</a></li>
          </ul>
      </div>
      <div class="footer-col last">
      	<h4>Advertising</h4>
        <li><a href="#">Advertise</a></li>
        <li><a href="#">Ivy League Magazine Network</a></li>

      </div>
      <div class="clr"></div>

    </div>
    <div class="copyrights">
      Cornell Alumni Magazine is owned and published by the Cornell Alumni Association<br />
    Editorially independent of Cornell University since 1899
    </div>
    <div class="scroll-to-top"><i class="fa fa-angle-up"></i></div><!-- .scroll-to-top -->
  </div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
