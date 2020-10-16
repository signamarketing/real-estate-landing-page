<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
	<div id="footer" class="container-fluid" style="background-color: #151515; text-align: center;">
        <div class="container">
        <div class="row">
        <div class="col-12 text-center">
        <p class="footer-logo"><a href="/"><img src="/wp-content/themes/twentytwenty/landing-page-folder/img/logo-min.png" alt="Signa Marketing Logo" /></a></p>
        <p class="contact">Contact: <a href="tel:[PHONE]">[PHONE]</a></p>
        <p class="email"><a href="mailto:info@signamarketing.com" target="_blank">[EMAIL]</a></p>
        <p class="address">[1201 E Jefferson St #4, Phoenix, AZ 85034]</p>
        <P class="contact">*Broker co-op may apply</p>
        <!-- <p class="footer-img"><img style="height: 57px; width: 300px;" src="/wp-content/themes/twentytwenty/landing-page-folder/img/14c8981f.png" alt="" /></p> -->
        
        </div>
        </div>
        </div>
        </div>
        <div id="copyright" class="container-fluid" style="text-align: center;">
        <div class="row">
        <div class="col-12">[BUSINESS NAME] © Copyright <?php echo date("Y"); ?></div>
        </div>
        </div>
	</footer><!-- #colophon -->


<?php wp_footer(); ?>

</body>
</html>
