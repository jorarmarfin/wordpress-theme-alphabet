<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://google.com
 *
 * @package WordPress
 * 
 * @since PreSchool 1.0
 */
get_header(); ?>

   <body id="page-top" data-spy="scroll" data-target=".navbar-custom">
      <!-- Page width 'Boxed' of 'Full' -->
      <div class="full">
         <!-- Preloader -->
         <div id="preloader">
            <div class="preloader">
               <span></span>
               <span></span>
               <span></span>
               <span></span>
               <span></span>
            </div>
         </div>
         <!-- Navbar -->
         <?php get_template_part( 'partials/navbar' ); ?>
         <!-- /navbar ends -->

         <!-- Slider -->
         <?php get_template_part( 'partials/slider' ); ?>
         <!-- Widgets Home Content -->
         <?php if ( is_active_sidebar( 'home-content' ) ) : ?>
               <?php dynamic_sidebar( 'home-content' ); ?>
         <?php endif; ?>	   
         <!-- /Layerslider ends-->
      
         <!-- Clouds SVG Divider -->
         <?php get_template_part( 'partials/svg-divider-1' ); ?>
         <!-- / section ends-->
      
         <!-- Section Services -->
         <?php get_template_part( 'partials/sections-home/services' ); ?>
         
         <!-- /Section ends -->
         
         <!-- Section Callout -->
         <?php get_template_part( 'partials/sections-home/callout' ); ?>
         <!-- Section Ends-->
         
         <!-- Section About -->
         <?php get_template_part( 'partials/sections-home/about' ); ?>
         <!--/ Section ends -->
         
         <!-- Parallax object -->
         <?php get_template_part( 'partials/sections-home/parallax-1' ); ?>
         
         <!-- Section Team -->
         <?php get_template_part( 'partials/sections-home/team' ); ?>
         <!-- Section ends -->
         
         <!-- Section activities -->
         <?php get_template_part( 'partials/sections-home/activities' ); ?>
         <!-- /Section ends -->
         
         <!-- Parallax object -->
         <?php get_template_part( 'partials/sections-home/parallax-2' ); ?>
         
         <!-- Section Gallery -->
         <?php get_template_part( 'partials/sections-home/gallery' ); ?>
         <!-- Section ends -->
         
         <!-- Section Latest Blog -->
         <?php get_template_part( 'partials/sections-home/latest-blog' ); ?>
         <!-- Section ends -->
         
         <!-- Parallax object -->
         <?php get_template_part( 'partials/sections-home/parallax-3' ); ?>
         
         <!-- Section Prices -->
         <?php get_template_part( 'partials/sections-home/prices' ); ?>
         <!-- /Section ends -->
         
         <!-- Section Call to Action -->
         <?php get_template_part( 'partials/sections-home/call-to-action' ); ?>
         <!-- Section ends -->
         <?php get_template_part( 'partials/services' ); ?>
         <!-- Section Contact -->
         <!--Section ends -->
      
         <!-- Footer -->	
         <?php get_footer(); ?>
         <!-- /footer ends -->
      </div> <!-- /page width -->
         <!-- Core JavaScript Files -->
         <?php get_template_part( 'partials/core-javascript' ); ?>	
   </body>
</html>