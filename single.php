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
        <div id="blog-page" class="single-page container">	   
            <!-- Blog Post -->
            <div class="col-md-9 blog-home">
            <!-- Content Row -->
            <div class="row">
                <div class="blog-post post-main">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <h3><?=the_title()?></h3>
                        <!-- Post Info -->
                        <div class="post-info">
                            <p><i class="fa fa-clock-o"></i>Escrito el <?=the_time('M j, Y')?></p>
                            <p><i class="fa fa-user"></i>by <a href="#"><?=the_author()?></a></p>
                            <!-- Post Comments -->
                            <p><i class="fa fa-comment"></i>3 Comments</p>
                        </div>
                        <!-- Image -->
                        <?=the_post_thumbnail('post-thumbnails', array( 'class' => 'img-responsive' ) )?>
                        <!-- Post Content -->
                        <?=the_content()?>
                    <?php endwhile; endif; ?>
                
                    <div class="post-info">					
                        <!-- Tags -->
                        <div class="blog-tags">
                            <p><i class="fa fa-tags"></i>Tags:</p>
                            <?=the_tags('',' ')?>
                        </div>
                    </div>
                    <!-- /post-info -->				  
                    </div>
                    <!-- /blog-post -->	
                    <!-- Comments Form -->
                    <!-- Posted Comments -->
                    <!-- /comments block -->
                </div>
            <!-- /row -->
            </div>
        <!-- /blog-home -->

            <!-- Sidebar -->
            <div class="sidebar col-md-3">
                <?=get_sidebar()?>
            </div>
            <!-- /sidebar col-md-3 --> 
        </div>
        <!-- /blog-page -->
        <!-- Footer -->	
        <?php get_footer(); ?>
        <!-- /footer ends -->
    </div>
    <!-- Core JavaScript Files -->
    <?php get_template_part( 'partials/core-javascript' ); ?>	
</body>