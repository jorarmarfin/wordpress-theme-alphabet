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
         <?php get_template_part( 'partials/preloader' ); ?>	   
         <!-- Navbar -->
         <?php get_template_part( 'partials/navbar' ); ?>
         <!-- /navbar ends -->
         <!-- /jumbotron -->
         <?php get_template_part( 'partials/jumbotron' ); ?>
         <!-- /jumbotron -->
	      <!-- Clouds SVG Divider -->
         <?php get_template_part( 'partials/svg-cloud' ); ?>
         <!-- Parallax objects -->
         <?php get_template_part( 'partials/svg-bird' ); ?>
         <?php get_template_part( 'partials/svg-ballon' ); ?>
	  
      
         <!-- Page Content -->
         <div id="blog-page" class="container">
            <!-- Blog Home -->
            <div class="col-md-9 blog-home">
               <?php
                  if ( have_posts() ) :
                     while ( have_posts() ) : the_post();
                        // Your loop code
               ?>
                     <!-- Blog Post Row -->
                     <div class="blog-post row">
                        <div class="img-date">
                           <!-- date and category -->
                           <div class="col-md-1 text-center date-category">
                              <i class="fa fa-camera fa-4x"></i>            
                              <p><?=the_time('M j, Y')?></p>
                           </div>
                           <!-- blog image -->
                           <div class="img-effect">
                              <?php if ( has_post_thumbnail() ) { ?>
                                    <a href="<?=the_permalink()?>">
                                    <?=the_post_thumbnail('post-thumbnails', array( 'class' => 'img-responsive' ) )?>
                                    </a>
                                 <?php } else{?>
                                    <img class="img-responsive" src="<?=get_template_directory_uri()?>/assets/img/blog1.jpg" alt="">
                                 <?php }?>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <!-- Post header -->
                           <h3>
                              <a href="<?=the_permalink()?>"><?=the_title()?></a>
                           </h3>
                           <div class="post-info">
                              <!-- Post Author -->
                              <p><i class="fa fa-user"></i>Escritor por <a href="#"><?=the_author()?></a></p>
                              <!-- Post Comments -->
                              <p><i class="fa fa-comment"></i><?=the_category(' ')?></p>
                           </div>
                           <!-- Post Excerpt -->
                           <?=the_content()?>
                           <a class="btn" href="<?=the_permalink()?>">Leer más <i class="fa fa-angle-right"></i></a>
                        </div>
                     </div>
               <?php
                     endwhile;
                  else :
                        _e( 'Sorry, no posts were found.', 'textdomain' );
                  endif;
               ?>
               <!-- /.row -->
            </div>
            <!-- /blog-home -->
         
            <!-- Sidebar -->
            <div class="sidebar col-md-3">
               <?=get_sidebar()?>
            </div>
            <!-- /sidebar col-md-3 --> 
            <!-- Pagination -->
            <?php get_template_part( 'partials/pagination' ); ?>
            <!-- /text-center --> 
         </div>      
         <!-- Footer -->	
         <?=get_footer()?>
         <!-- /footer ends -->
      </div> 
      <!-- /page width -->
         <!-- Core JavaScript Files -->
         <?php get_template_part( 'partials/core-javascript' ); ?>	
   </body>
</html>