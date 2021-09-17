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
         <div id="layerslider">
            <!-- Slide 1 -->
            <div class="ls-slide" data-ls="transition2d:104;timeshift:-2000;">
               <!-- Background image -->
               <img src="<?=get_template_directory_uri()?>/assets/img/slide1.jpg" class="ls-bg"  alt="Slide background"/>
               <!-- Parallax Image -->
               <img src="<?=get_template_directory_uri()?>/assets/img/sun.png" class="ls-l img-responsive hidden-xs hidden-sm parallax1" alt="" data-ls="delayin:1000;easingin:fadeIn;parallaxlevel:7;">
               <!-- Text -->
               <div class="ls-l header-text container" data-ls="offsetxin:0;durationin:2000;delayin:1500;easingin:easeOutElastic;rotatexin:-90;transformoriginin:50% top 0;offsetxout:-200;durationout:1000;parallaxlevel:2;">
                  <h1>Welcome to Alphabet</h1>
                  <p class="subtitle hidden-xs"> Alphabet is a Super Fun Daycare / Children HTML Theme including many Elements </p>
                  <!-- Button -->
                  <div class="page-scroll hidden-xs">
                     <a class="btn" href="#contact">Contact us</a>
                  </div>
               </div>
               <!-- Parallax Image -->
               <img src="<?=get_template_directory_uri()?>/assets/img/flower.png" class="ls-l img-responsive hidden-xs hidden-sm parallax2" alt="" data-ls="delayin:1500;easingin:fadeIn;parallaxlevel:6;">
            </div>
         
            <!-- Slide 2 -->
            <div class="ls-slide" data-ls="transition2d:104;timeshift:-2000;">
               <!-- Background image -->
               <img src="<?=get_template_directory_uri()?>/assets/img/slide2.jpg" class="ls-bg"  alt="Slide background"/>
               <!-- Parallax Image -->
               <img src="<?=get_template_directory_uri()?>/assets/img/bee.png" class="ls-l img-responsive hidden-xs hidden-sm parallax1" alt="" data-ls="delayin:1500;easingin:fadeIn;parallaxlevel:7;">
               <!-- Text -->
               <div class="ls-l header-text"  data-ls="offsetxin:0;durationin:2000;delayin:1500;easingin:easeOutElastic;rotatexin:-90;transformoriginin:50% top 0;offsetxout:-200;durationout:1000;parallaxlevel:2;">
                  <h1>Quality daycare</h1>
                  <p class="subtitle hidden-xs"> Alphabet is a Super Fun Daycare / Children HTML Theme including many Elements </p>
                  <!-- Button -->
                  <div class="page-scroll hidden-xs">
                     <a class="btn" href="#contact">Contact us</a>
                  </div>
               </div>
               <!-- Parallax Image -->
               <img src="<?=get_template_directory_uri()?>/assets/img/star.png" class="ls-l img-responsive hidden-xs hidden-sm parallax2" alt="" data-ls="delayin:1500;easingin:fadeIn;parallaxlevel:6;">
            </div>
         
            <!-- Slide 3 -->
            <div class="ls-slide" data-ls="transition2d:104;timeshift:-2000;">
               <!-- Background image -->
               <img src="<?=get_template_directory_uri()?>/assets/img/slide3.jpg" class="ls-bg"  alt="Slide background"/>
               <!-- Parallax Image -->
               <img src="<?=get_template_directory_uri()?>/assets/img/sun.png" class="ls-l img-responsive hidden-xs hidden-sm parallax1" alt="" data-ls="delayin:1000;easingin:fadeIn;parallaxlevel:7;">
               <!-- Text -->
               <div class="ls-l header-text"  data-ls="offsetxin:0;durationin:2000;delayin:1500;easingin:easeOutElastic;rotatexin:-90;transformoriginin:50% top 0;offsetxout:-200;durationout:1000;parallaxlevel:2;">
                  <h1>Welcome to Alphabet</h1>
                  <p class="subtitle hidden-xs"> Alphabet is a Super Fun Daycare / Children HTML Theme including many Elements </p>
                  <!-- Button -->
                  <div class="page-scroll hidden-xs">
                     <a class="btn" href="#contact">Contact us</a>
                  </div>
               </div>
               <!-- Parallax Image -->
               <img src="<?=get_template_directory_uri()?>/assets/img/flower.png" class="ls-l img-responsive hidden-xs hidden-sm parallax2" alt="" data-ls="delayin:1500;easingin:fadeIn;parallaxlevel:6;">
            </div>
         
            <!-- Slide 4 -->
            <div class="ls-slide" data-ls="transition2d:104;timeshift:-2000;">
               <!-- Background image -->
               <img src="<?=get_template_directory_uri()?>/assets/img/slide4.jpg" class="ls-bg"  alt="Slide background"/>
               <!-- Parallax Image -->
               <img src="<?=get_template_directory_uri()?>/assets/img/bee.png" class="ls-l img-responsive hidden-xs hidden-sm parallax1" alt="" data-ls="delayin:1500;easingin:fadeIn;parallaxlevel:7;">
               <!-- Text -->
               <div class="ls-l header-text" data-ls="offsetxin:0;durationin:2000;delayin:1500;easingin:easeOutElastic;rotatexin:-90;transformoriginin:50% top 0;offsetxout:-200;durationout:1000;parallaxlevel:2;">
                  <h1>Quality daycare</h1>
                  <p class="subtitle hidden-xs"> Alphabet is a Super Fun Daycare / Children HTML Theme including many Elements </p>
                  <!-- Button -->
                  <div class="page-scroll hidden-xs">
                     <a class="btn" href="#contact">Contact us</a>
                  </div>
               </div>
               <!-- Parallax Image -->
               <img src="<?=get_template_directory_uri()?>/assets/img/star.png" class="ls-l img-responsive hidden-xs hidden-sm parallax2" alt="" data-ls="delayin:1500;easingin:fadeIn;parallaxlevel:6;">
            </div>
         
         <!-- Slide 5 -->
            <div class="ls-slide" data-ls="transition2d:104;timeshift:-2000;">
               <!-- Background image -->
               <img src="<?=get_template_directory_uri()?>/assets/img/slide5.jpg" class="ls-bg"  alt="Slide background"/>
            <!-- Video -->
            <div class="ls-l video" data-ls="delayin:1500;easingin:fadeIn;">
               <iframe width="760" height="475" src="https://www.youtube.com/embed/e9p0xmsU3h0" allowfullscreen></iframe>
            </div>
               <!-- Parallax Image -->
               <img src="<?=get_template_directory_uri()?>/assets/img/bee.png" class="ls-l img-responsive hidden-xs hidden-sm parallax1" alt="" data-ls="delayin:1500;easingin:fadeIn;parallaxlevel:7;">
            <!-- Text -->
               <div class="ls-l header-text" data-ls="offsetxin:0;durationin:2000;delayin:1500;easingin:easeOutElastic;rotatexin:-90;transformoriginin:50% top 0;offsetxout:-200;durationout:1000;parallaxlevel:2;">
                  <h1>Video Layer</h1>
                  <p class="subtitle hidden-xs"> Alphabet is a Super Fun Daycare / Children HTML Theme including many Elements </p>
                  <!-- Button -->
                  <div class="page-scroll hidden-xs">
                     <a class="btn" href="#contact">Contact us</a>
                  </div>
               </div>
               <!-- Parallax Image -->
               <img src="<?=get_template_directory_uri()?>/assets/img/star.png" class="ls-l img-responsive hidden-xs hidden-sm parallax2" alt="" data-ls="delayin:1500;easingin:fadeIn;parallaxlevel:6;">
            </div>
         </div>
         <!-- /Layerslider ends-->
      
         <!-- Clouds SVG Divider -->
         <div class="hidden-xs container-fluid cloud-divider">
            <svg id="deco-clouds1" class="head" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
               <path d="M-5 100 Q 0 20 5 100 Z
                  M0 100 Q 5 0 10 100
                  M5 100 Q 10 30 15 100
                  M10 100 Q 15 10 20 100
                  M15 100 Q 20 30 25 100
                  M20 100 Q 25 -10 30 100
                  M25 100 Q 30 10 35 100
                  M30 100 Q 35 30 40 100
                  M35 100 Q 40 10 45 100
                  M40 100 Q 45 50 50 100
                  M45 100 Q 50 20 55 100
                  M50 100 Q 55 40 60 100
                  M55 100 Q 60 60 65 100
                  M60 100 Q 65 50 70 100
                  M65 100 Q 70 20 75 100
                  M70 100 Q 75 45 80 100
                  M75 100 Q 80 30 85 100
                  M80 100 Q 85 20 90 100
                  M85 100 Q 90 50 95 100
                  M90 100 Q 95 25 100 100
                  M95 100 Q 100 15 105 100 Z">
               </path>
            </svg>
         </div>
         <!-- / section ends-->
      
         <!-- Section Services -->
         <?php get_template_part( 'partials/services' ); ?>
         
         <!-- /Section ends -->
      
         <!-- Section Callout -->
         <section id="callout" class="small-section">
            <!-- Clouds background -->
            <div class="hidden-xs">
               <div class="cloud x1"></div>
               <div class="cloud x2"></div>
               <div class="cloud x3"></div>
               <div class="cloud x4"></div>
               <div class="cloud x5"></div>
               <div class="cloud x6"></div>
               <div class="cloud x7"></div>
            </div>
            <!-- /Clouds ends -->
            <div class="container">
               <!-- Animated Sun -->
               <div class="sun hidden-sm hidden-xs">
                  <div class="sun-face">
                     <div class="sun-hlight"></div>
                     <div class="sun-leye"></div>
                     <div class="sun-reye"></div>
                     <div class="sun-lred"></div>
                     <div class="sun-rred"></div>
                     <div class="sun-smile"></div>
                  </div>
                  <!-- Sun rays -->
                  <div class="sun-anime">
                     <div class="sun-ball"></div>
                     <div class="sun-light"><b></b><s></s>
                     </div>
                     <div class="sun-light"><b></b><s></s>
                     </div>
                     <div class="sun-light"><b></b><s></s>
                     </div>
                     <div class="sun-light"><b></b><s></s>
                     </div>
                     <div class="sun-light"><b></b><s></s>
                     </div>
                     <div class="sun-light"><b></b><s></s>
                     </div>
                     <div class="sun-light"><b></b><s></s>
                     </div>
                     <div class="sun-light"><b></b><s></s>
                     </div>
                     <div class="sun-light"><b></b><s></s>
                     </div>
                     <div class="sun-light"><b></b><s></s>
                     </div>
                     <div class="sun-light"><b></b><s></s>
                     </div>
                     <div class="sun-light"><b></b><s></s>
                     </div>
                  </div>
               </div>
               <!-- /Animated Sun -->
               <div class="col-md-6 col-sm-6 text-center">
            <div class="well">
                  <h3>Visit Our Daycare</h3>
                  <p>Lotam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi Suspendisse a elementum anteu imperdiet et maecenas eu eros non nibh aliquet iaculis..</p>
                  <div class="page-scroll">
                     <!-- Button-->
                     <a class="btn" href="#contact">Contact us</a>
                  </div>
               <!-- /page-scroll -->
            </div>
            <!-- /well -->
               </div>
               <!-- /col-md-6 -->
            </div>
            <!-- /container-->
         </section>
         <!-- Section Ends-->
      
         <!-- Section About -->
         <section id="about">
            <div class="container">
               <div class="col-lg-8 col-lg-offset-2">
                  <!-- Section heading -->
                  <div class="section-heading">
                     <h2>About us</h2>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-12 col-lg-5">
                     <!-- Carousel -->
                     <div id="owl-about" class="owl-carousel">
                        <div class="item">
                           <img class="img-responsive" src="<?=get_template_directory_uri()?>/assets/img/about1.jpg" alt="">
                        </div>
                        <div class="item">
                           <img class="img-responsive" src="<?=get_template_directory_uri()?>/assets/img/about2.jpg" alt="">
                        </div>
                        <div class="item">
                           <img class="img-responsive" src="<?=get_template_directory_uri()?>/assets/img/about3.jpg" alt="">
                        </div>
                     </div>
                  </div>
                  <!-- text -->
                  <div class="col-lg-7 col-sm-12">
                     <h3>Our Philosophy</h3>
                     <p>Ibu lum orci eget, viverra elit. Aliquam erat volut pat phas ellus ac
                        sodales felis tiam non Doloreiur qui commolu ptatemp dolupta orem retibusam 
                        andigen Ibu lum orci eget, viverra elit aliquam erat volut pat phas ellus ac sodales felis tiam non metus.
                        Placerat a ultricies a, posuere lorem ipseut lincas psuiem t volut pat phas ellus ac sodales Lorem ipsum dolor sit amet, consectetur adipisicing elit uasi quidem minus id omnis a nibh fusce mollis imperdie tlorem ipuset campas fincas interdum donec eget metus auguen unc vel mauris ultricies, vest ibulum orci eget usce mollis imperdiet interdum donec eget metus auguen unc vel lorem ispuet Ibu lum orci eget, viverra elit liquam erat volut pat phas ellus ac sodales Lorem ipsum dolor sit amet, consectetur adipisicing elit uasi quidem minus id omnis.
                     </p>
                     <p>Lorem ipsum dolor sit amet, lorem ipsuet lora consectetur adipisicing elit Illo itaque ipsum sit ha Bu lum orci eget, viverra elit aliquam erat volut pat phas ellus ac
                        dolupta orem retibusam qui commolu les felis tiam non metus ali quam eros Pellentesque turpis lectus, placerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum. 
                     </p>
                  </div>
                  <!-- /col-lg-8 -->
               </div>
               <!-- /row -->
               <div class="row features">
                  <!-- First Collumn -->
                  <div class="col-lg-12 col-sm-12">
                     <!-- item1 -->
                     <div class="col-md-4 media text-center">
                        <i class="flaticon-game"></i>
                        <div class="media-body">
                           <h5 class="media-heading">infrastructure</h5>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                        </div>
                     </div>
                     <!-- item2 -->
                     <div class="col-md-4 media text-center">
                        <i class="flaticon-fruit"></i>
                        <div class="media-body">
                           <h5 class="media-heading">Certified Tutors</h5>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                        </div>
                     </div>
               <!-- item3 -->
                     <div class="col-md-4 media text-center">
                        <i class="flaticon-two"></i>
                        <div class="media-body">
                           <h5 class="media-heading">Small Class Size</h5>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                        </div>
                     </div>
                  </div>
                  <!-- Second Collumn -->
                  <div class="col-lg-12 col-sm-12">                 
                     <!-- item4 -->
                     <div class="col-md-4 media text-center">
                        <i class="flaticon-person-1"></i>
                        <div class="media-body">
                           <h5 class="media-heading">Infant Care</h5>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                        </div>
                     </div>              
                     <!-- item5 -->
                     <div class="col-md-4 media text-center">
                        <i class="flaticon-school"></i>
                        <div class="media-body">
                           <h5 class="media-heading">Safety First</h5>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                        </div>
                     </div>
                     <!-- item6 -->
                     <div class="col-md-4 media text-center">
                        <i class="flaticon-music"></i>
                        <div class="media-body">
                           <h5 class="media-heading">Activities</h5>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- /row features -->
               <div class="col-lg-12 col-sm-12 paper_block">
                  <h3 class="text-center">What Parents Think</h3>
                  <div id="owl-testimonials" class="owl-carousel">
                     <!-- testimonial 1-->
                     <blockquote>
                        <div class="col-md-4 col-lg-4 col-centered">
                           <!-- testimonial image-->
                           <img src="<?=get_template_directory_uri()?>/assets/img/testimonial1.jpg" alt="" class="img-responsive img-circle">
                        </div>
                        <div class="col-md-10 col-md-offset-1 quote-test">
                           <!-- quote -->
                           <p>Suspendis Lotam tempore optio lorem ispuet doloremque laboriosam quas, quos eaque molestias odio aut eius animi Suspendisse a elementum anteu imperdiet et maecenas eu eros non nibh aliquet iaculis..</p>
                           <small><i class="fa fa-user"></i>Joanna Vilken, TV Star</small>
                        </div>
                     </blockquote>
                     <!-- testimonial 2-->
                     <blockquote>
                        <div class="col-md-4 col-lg-4 col-centered">
                           <!-- testimonial image-->
                           <img src="<?=get_template_directory_uri()?>/assets/img/testimonial2.jpg" alt="" class="img-responsive img-circle">
                        </div>
                        <div class="col-md-10 col-md-offset-1  quote-test">
                           <!-- quote -->
                           <p>Laudantium totam tempore optio lorem ispuet doloremque aut eius animi Suspendisse a elementum ante. Nunc aliquet tincidunt quam, non egestas arcu imperdiet et maecenas eu eros non nibh aliquet iaculis..</p>
                           <small><i class="fa fa-user"></i>John Cassady, Astronaut</small>
                        </div>
                     </blockquote>
                     <!-- testimonial 3-->
                     <blockquote>
                        <div class="col-md-4 col-lg-4 col-centered">
                           <!-- testimonial image-->
                           <img src="<?=get_template_directory_uri()?>/assets/img/testimonial3.jpg" alt="" class="img-responsive img-circle">
                        </div>
                        <div class="col-md-10 col-md-offset-1 quote-test">
                           <!-- quote -->
                           <p>Laboriosam quas, quos eaque lorem ispuet odio aut eius animi Suspendisse a elementum ante. Nunc aliquet tincidunt quam, non egestas arcu imperdiet et maecenas eu eros non nibh aliquet iaculis..</p>
                           <small><i class="fa fa-user"></i>Maria Silveira, Model</small>
                        </div>
                     </blockquote>
                  </div>
                  <!--owl testimonials-->
               </div>
               <!-- /col-lg-7 -->
            </div>
            <!--/container-->	  
         </section>
         <!--/ Section ends -->
      
         <!-- Parallax object -->
         <div class="parallax-object1 hidden-sm hidden-xs" data-0="opacity:1;"
            data-100="transform:translatey(40%);"
            data-center-center="transform:translatey(-180%);">
            <!-- Image -->
            <img src="<?=get_template_directory_uri()?>/assets/img/parallaxobject1.png" alt="">
         </div>
      
         <!-- Section Team -->
         <section id="team" class="color-section">
            <!-- svg triangle shape -->
            <svg class="triangleShadow" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
               <path class="trianglePath1" d="M0 0 L50 100 L100 0 Z" />
            </svg>
            <div class="container">
               <div class="col-lg-8 col-lg-offset-2">
                  <!-- Section heading -->
                  <div class="section-heading">
                     <h2>Our Team</h2>
                  </div>
               </div>
               <!-- Intro text -->
               <div class="row team">
                  <div class="col-lg-5 col-md-5 res-margin">
                     <!-- Intro image -->
                     <img src="<?=get_template_directory_uri()?>/assets/img/teammain.jpg" class="center-block img-responsive img-curved" alt=""/>
                  </div>
                  <div class="col-lg-7 col-md-7">
                     <h3>Meet our Qualified Staff</h3>
                     <p>Ibu lum orci eget, viverra elit. Aliquam erat volut pat phas ellus ac
                        sodales felis tiam non Doloreiur qui commolu ptatemp dolupta orem retibusam 
                        andigen Ibu lum orci eget, viverra elit aliquam erat volut pat phas ellus ac sodales felis tiam non metus.
                        Placerat a ultricies a, posuere a nibh fusce mollis imperdie tlorem ipuset campas fincas interdum donec eget metus auguen unc vel mauris ultricies, vest ibulum orci eget usce mollis imperdiet interdum donec eget metus auguen unc vel lorem ispuet Ibu lum orci eget, viverra elit liquam erat volut pat phas ellus ac sodales Lorem ipsum dolor sit amet, consectetur adipisicing elit uasi quidem minus id omnis.
                     </p>
                  </div>
               </div>
               <!-- Team Carousel-->
               <div id="owl-team" class="owl-carousel">
                  <div class="col-lg-12">
                     <!-- member 1-->
                     <div class="team-item">
                        <img src="<?=get_template_directory_uri()?>/assets/img/team1.jpg" alt=""/>
                        <div class="team-caption">
                           <h5 class="text-light">Jane Doe</h5>
                           <p>Founder</p>
                        </div>
                     </div>
                     <!-- /team-item-->
                  </div>
                  <!-- col-lg-12-->
                  <div class="col-lg-12">
                     <!-- member 2-->
                     <div class="team-item">
                        <img src="<?=get_template_directory_uri()?>/assets/img/team2.jpg" alt=""/>
                        <div class="team-caption">
                           <h5 class="text-light">Mario Salles</h5>
                           <p>Teacher</p>
                        </div>
                     </div>
                     <!-- /team-item-->
                  </div>
                  <!-- col-lg-12-->
                  <div class="col-lg-12">
                     <!-- member 3-->
                     <div class="team-item">
                        <img src="<?=get_template_directory_uri()?>/assets/img/team3.jpg" alt=""/>
                        <div class="team-caption">
                           <h5 class="text-light">Julia Stan</h5>
                           <p>Teacher</p>
                        </div>
                     </div>
                     <!-- /team-item-->
                  </div>
                  <!-- col-lg-12-->
                  <div class="col-lg-12">
                     <!-- member 3-->
                     <div class="team-item">
                        <img src="<?=get_template_directory_uri()?>/assets/img/team4.jpg" alt=""/>
                        <div class="team-caption">
                           <h5 class="text-light">Mary John</h5>
                           <p>Caretaker</p>
                        </div>
                     </div>
                     <!-- /team-item-->
                  </div>
                  <!-- col-lg-12-->
                  <div class="col-lg-12">
                     <!-- member 3-->
                     <div class="team-item">
                        <img src="<?=get_template_directory_uri()?>/assets/img/team5.jpg" alt=""/>
                        <div class="team-caption">
                           <h5 class="text-light">Marco Datella</h5>
                           <p>Psychologist</p>
                        </div>
                     </div>
                     <!-- /team-item-->
                  </div>
                  <!-- col-lg-12-->
                  <div class="col-lg-12">
                     <!-- member 3-->
                     <div class="team-item">
                        <img src="<?=get_template_directory_uri()?>/assets/img/team6.jpg" alt=""/>
                        <div class="team-caption">
                           <h5 class="text-light">Juditt Lind</h5>
                           <p>Expert</p>
                        </div>
                     </div>
                     <!-- /team-item-->
                  </div>
                  <!-- col-lg-12-->
               </div>
               <!--/owl-team -->	
            </div>
            <!--/container -->
         </section>
         <!-- Section ends -->
      
         <!-- Section activities -->
         <section id="activities">
            <div class="container">
               <!-- Section Heading -->
               <div class="section-heading">
                  <h2>Our Activities</h2>
               </div>
               <!--Navigation -->
               <ul class="nav nav-tabs" id="myTab">
                  <li class="active"><a href="#tab1" data-toggle="tab">Music</a></li>
                  <li><a href="#tab2" data-toggle="tab">Spanish</a></li>
                  <li><a href="#tab3" data-toggle="tab">Lunch</a></li>
                  <li><a href="#tab4" data-toggle="tab">Swimming</a></li>
                  <li><a href="#tab5" data-toggle="tab">Playground</a></li>
               </ul>
               <div class="tabbable">
                  <div class="tab-content col-md-12 col-centered">
                     <!--Tab Content 1 -->
                     <div class="tab-pane active in fade" id="tab1">
                        <div class="row">
                           <div class="col-md-5 col-lg-5 pull-left">
                              <!-- Activity image-->
                              <img src="<?=get_template_directory_uri()?>/assets/img/activity1.jpg" alt="" class="img-responsive img-circle">						
                           </div>
                           <div class="col-md-7 col-lg-7 pull-left">
                              <!-- Activity text-->
                              <h3>Music Classes</h3>
                              <!-- Accordion -->
                              <div class="panel-group" id="accordion">
                                 <!-- Question 1 -->
                                 <div class="panel">
                                    <div class="panel-heading">
                                       <h6 class="panel-title">
                                          <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1">Activity Description</a>
                                       </h6>
                                    </div>
                                    <div id="collapse1" class="panel-collapse collapse in">
                                       <div class="panel-body">
                                          <p>Patatemp dolupta orem retibusam qui commolu 
                                             les felis tiam non metus ali quam eros Pellentesque turpis lectus, placerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies. 
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                                 <!--/panel -->
                                 <!-- Question 2 -->
                                 <div class="panel">
                                    <div class="panel-heading">
                                       <h6 class="panel-title">
                                          <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse2">Age Group</a>
                                       </h6>
                                    </div>
                                    <div id="collapse2" class="panel-collapse collapse">
                                       <div class="panel-body">
                                          <p>Patatemp dolupta orem retibusam qui commolu 
                                             les felis tiam non metus ali quam eros Pellentesque turpis lectus, placerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies, vest ibulum orci eget, viverra elit. 
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                                 <!--/panel -->
                                 <!-- Question 3 -->
                                 <div class="panel">
                                    <div class="panel-heading">
                                       <h6 class="panel-title">
                                          <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse3">When?</a>
                                       </h6>
                                    </div>
                                    <div id="collapse3" class="panel-collapse collapse">
                                       <div class="panel-body">
                                          <p>Patatemp dolupta orem retibusam qui commolu 
                                             les felis tiam non metus ali quam eros Pellentesque turpis lectus, placerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies, vest ibulum orci eget, viverra elit. 
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                                 <!--/panel -->					 
                              </div>
                              <!-- /.accordion -->		  
                           </div>
                           <!-- /.col-md-7 -->
                        </div>
                        <!-- /.row -->
                     </div>
                     <!-- /#tab1 -->	
                     <!--Tab Content 2 -->
                     <div class="tab-pane fade" id="tab2">
                        <div class="row">
                           <div class="col-md-5 col-lg-5 pull-left">
                              <!-- Activity image-->
                              <img src="<?=get_template_directory_uri()?>/assets/img/activity2.jpg" alt="" class="img-responsive img-circle">						
                           </div>
                           <div class="col-md-7 col-lg-7 pull-left">
                              <!-- Activity text-->
                              <h3>Spanish Classes</h3>
                              <!-- Accordion -->
                              <div class="panel-group" id="accordion2">
                                 <!-- Question 1 -->
                                 <div class="panel">
                                    <div class="panel-heading">
                                       <h6 class="panel-title">
                                          <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse4">Activity Description</a>
                                       </h6>
                                    </div>
                                    <div id="collapse4" class="panel-collapse collapse in">
                                       <div class="panel-body">
                                          <p>Patatemp dolupta orem retibusam qui commolu 
                                             les felis tiam non metus ali quam eros Pellentesque turpis lectus, placerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies. 
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                                 <!--/panel -->
                                 <!-- Question 2 -->
                                 <div class="panel">
                                    <div class="panel-heading">
                                       <h6 class="panel-title">
                                          <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse5">Age Group</a>
                                       </h6>
                                    </div>
                                    <div id="collapse5" class="panel-collapse collapse">
                                       <div class="panel-body">
                                          <p>Patatemp dolupta orem retibusam qui commolu 
                                             les felis tiam non metus ali quam eros Pellentesque turpis lectus, placerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies, vest ibulum orci eget, viverra elit. 
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                                 <!--/panel -->
                                 <!-- Question 3 -->
                                 <div class="panel">
                                    <div class="panel-heading">
                                       <h6 class="panel-title">
                                          <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse6">When?</a>
                                       </h6>
                                    </div>
                                    <div id="collapse6" class="panel-collapse collapse">
                                       <div class="panel-body">
                                          <p>Patatemp dolupta orem retibusam qui commolu 
                                             les felis tiam non metus ali quam eros Pellentesque turpis lectus, placerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies, vest ibulum orci eget, viverra elit. 
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                                 <!--/panel -->					 
                              </div>
                              <!-- /.accordion -->		  
                           </div>
                           <!-- /.col-md-7 -->
                        </div>
                        <!-- /.row -->
                     </div>
                     <!-- /#tab2 -->	
                     <!--Tab Content 3 -->
                     <div class="tab-pane fade" id="tab3">
                        <div class="row">
                           <div class="col-md-5 col-lg-5 pull-left">
                              <!-- Activity image-->
                              <img src="<?=get_template_directory_uri()?>/assets/img/activity3.jpg" alt="" class="img-responsive img-circle">						
                           </div>
                           <div class="col-md-7 col-lg-7 pull-left">
                              <!-- Activity text-->
                              <h3>Lunch</h3>
                              <!-- Accordion -->
                              <div class="panel-group" id="accordion3">
                                 <!-- Question 1 -->
                                 <div class="panel">
                                    <div class="panel-heading">
                                       <h6 class="panel-title">
                                          <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapse7">Activity Description</a>
                                       </h6>
                                    </div>
                                    <div id="collapse7" class="panel-collapse collapse in">
                                       <div class="panel-body">
                                          <p>Patatemp dolupta orem retibusam qui commolu 
                                             les felis tiam non metus ali quam eros Pellentesque turpis lectus, placerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies. 
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                                 <!--/panel -->
                                 <!-- Question 2 -->
                                 <div class="panel">
                                    <div class="panel-heading">
                                       <h6 class="panel-title">
                                          <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse8">Age Group</a>
                                       </h6>
                                    </div>
                                    <div id="collapse8" class="panel-collapse collapse">
                                       <div class="panel-body">
                                          <p>Patatemp dolupta orem retibusam qui commolu 
                                             les felis tiam non metus ali quam eros Pellentesque turpis lectus, placerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies, vest ibulum orci eget, viverra elit. 
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                                 <!--/panel -->
                                 <!-- Question 3 -->
                                 <div class="panel">
                                    <div class="panel-heading">
                                       <h6 class="panel-title">
                                          <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse9">When?</a>
                                       </h6>
                                    </div>
                                    <div id="collapse9" class="panel-collapse collapse">
                                       <div class="panel-body">
                                          <p>Patatemp dolupta orem retibusam qui commolu 
                                             les felis tiam non metus ali quam eros Pellentesque turpis lectus, placerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies, vest ibulum orci eget, viverra elit. 
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                                 <!--/panel -->					 
                              </div>
                              <!-- /.accordion -->		  
                           </div>
                           <!-- /.col-md-7 -->
                        </div>
                        <!-- /.row -->
                     </div>
                     <!-- /#tab3 -->	
                     <!--Tab Content 4 -->
                     <div class="tab-pane fade" id="tab4">
                        <div class="row">
                           <div class="col-md-5 col-lg-5 pull-left">
                              <!-- Activity image-->
                              <img src="<?=get_template_directory_uri()?>/assets/img/activity4.jpg" alt="" class="img-responsive img-circle">						
                           </div>
                           <div class="col-md-7 col-lg-7 pull-left">
                              <!-- Activity text-->
                              <h3>Swimming</h3>
                              <!-- Accordion -->
                              <div class="panel-group" id="accordion4">
                                 <!-- Question 1 -->
                                 <div class="panel">
                                    <div class="panel-heading">
                                       <h6 class="panel-title">
                                          <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion4" href="#collapse10">Activity Description</a>
                                       </h6>
                                    </div>
                                    <div id="collapse10" class="panel-collapse collapse in">
                                       <div class="panel-body">
                                          <p>Patatemp dolupta orem retibusam qui commolu 
                                             les felis tiam non metus ali quam eros Pellentesque turpis lectus, placerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies. 
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                                 <!--/panel -->
                                 <!-- Question 2 -->
                                 <div class="panel">
                                    <div class="panel-heading">
                                       <h6 class="panel-title">
                                          <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion4" href="#collapse11">Age Group</a>
                                       </h6>
                                    </div>
                                    <div id="collapse11" class="panel-collapse collapse">
                                       <div class="panel-body">
                                          <p>Patatemp dolupta orem retibusam qui commolu 
                                             les felis tiam non metus ali quam eros Pellentesque turpis lectus, placerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies, vest ibulum orci eget, viverra elit. 
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                                 <!--/panel -->
                                 <!-- Question 3 -->
                                 <div class="panel">
                                    <div class="panel-heading">
                                       <h6 class="panel-title">
                                          <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion4" href="#collapse12">When?</a>
                                       </h6>
                                    </div>
                                    <div id="collapse12" class="panel-collapse collapse">
                                       <div class="panel-body">
                                          <p>Patatemp dolupta orem retibusam qui commolu 
                                             les felis tiam non metus ali quam eros Pellentesque turpis lectus, placerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies, vest ibulum orci eget, viverra elit. 
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                                 <!--/panel -->					 
                              </div>
                              <!-- /.accordion -->		  
                           </div>
                           <!-- /.col-md-7 -->
                        </div>
                        <!-- /.row -->
                     </div>
                     <!-- /#tab4 -->	
                     <!--Tab Content 5 -->
                     <div class="tab-pane fade" id="tab5">
                        <div class="row">
                           <div class="col-md-5 col-lg-5 pull-left">
                              <!-- Activity image-->
                              <img src="<?=get_template_directory_uri()?>/assets/img/activity5.jpg" alt="" class="img-responsive img-circle">						
                           </div>
                           <div class="col-md-7 col-lg-7 pull-left">
                              <!-- Activity text-->
                              <h3>Playground</h3>
                              <!-- Accordion -->
                              <div class="panel-group" id="accordion5">
                                 <!-- Question 1 -->
                                 <div class="panel">
                                    <div class="panel-heading">
                                       <h6 class="panel-title">
                                          <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion5" href="#collapse13">Activity Description</a>
                                       </h6>
                                    </div>
                                    <div id="collapse13" class="panel-collapse collapse in">
                                       <div class="panel-body">
                                          <p>Patatemp dolupta orem retibusam qui commolu 
                                             les felis tiam non metus ali quam eros Pellentesque turpis lectus, placerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies. 
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                                 <!--/panel -->
                                 <!-- Question 2 -->
                                 <div class="panel">
                                    <div class="panel-heading">
                                       <h6 class="panel-title">
                                          <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion5" href="#collapse14">Age Group</a>
                                       </h6>
                                    </div>
                                    <div id="collapse14" class="panel-collapse collapse">
                                       <div class="panel-body">
                                          <p>Patatemp dolupta orem retibusam qui commolu 
                                             les felis tiam non metus ali quam eros Pellentesque turpis lectus, placerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies, vest ibulum orci eget, viverra elit. 
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                                 <!--/panel -->
                                 <!-- Question 3 -->
                                 <div class="panel">
                                    <div class="panel-heading">
                                       <h6 class="panel-title">
                                          <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion5" href="#collapse16">When?</a>
                                       </h6>
                                    </div>
                                    <div id="collapse16" class="panel-collapse collapse">
                                       <div class="panel-body">
                                          <p>Patatemp dolupta orem retibusam qui commolu 
                                             les felis tiam non metus ali quam eros Pellentesque turpis lectus, placerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies, vest ibulum orci eget, viverra elit. 
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                                 <!--/panel -->					 
                              </div>
                              <!-- /.accordion -->		  
                           </div>
                           <!-- /.col-md-7 -->
                        </div>
                        <!-- /.row -->
                     </div>
                     <!-- /#tab5 -->					
                  </div>
                  <!--tab-content-->  
               </div>
               <!--tababble--> 
            </div>
            <!-- /container -->
         </section>
         <!-- /Section ends -->
      
         <!-- Parallax object -->
         <div class="parallax-object2 hidden-sm hidden-xs" data-0="opacity:1;"
            data-start="margin-top:40%"
            data-100="transform:translatey(0%);"
            data-center-center="transform:translatey(-180%);">
            <!-- Image -->
            <img src="<?=get_template_directory_uri()?>/assets/img/parallaxobject2.png" alt="">
         </div>
      
         <!-- Section Gallery -->
         <section id="gallery" class="color-section">
            <!-- svg triangle shape -->
            <svg class="triangleShadow" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
               <path class="trianglePath1" d="M0 0 L50 100 L100 0 Z" />
            </svg>
            <div class="container">
               <!-- Section heading -->
               <div class="section-heading">
                  <h2>Our Gallery</h2>
               </div>
               <!-- Navigation -->
               <div class="text-center col-md-12">
                  <ul class="nav nav-pills cat text-center" role="tablist" id="gallerytab">
                     <li class="active"><a href="#" data-toggle="tab" data-filter="*">All</a>
                     <li><a href="#" data-toggle="tab" data-filter=".events">Events</a></li>
                     <li><a href="#" data-toggle="tab" data-filter=".facilities">Our Facilities</a></li>
                  </ul>
               </div>
               <!-- Gallery -->
               <div class="row">
                  <div class="col-md-12">
                     <div id="lightbox">
                        <!-- Image 1 -->
                        <div class="col-sm-6 col-md-6 col-lg-4 events">
                           <div class="portfolio-item">
                              <div class="gallery-thumb">
                                 <img class="img-responsive" src="<?=get_template_directory_uri()?>/assets/img/gallery1.jpg" alt="">
                                 <span class="overlay-mask"></span>
                                 <a href="img/gallery1.jpg" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                 <i class="fa fa-expand"></i></a>
                              </div>
                           </div>
                        </div>
                        <!-- Image 2 -->
                        <div class="col-sm-6 col-md-6 col-lg-4 facilities">
                           <div class="portfolio-item">
                              <div class="gallery-thumb">
                                 <img class="img-responsive" src="<?=get_template_directory_uri()?>/assets/img/gallery2.jpg" alt="">
                                 <span class="overlay-mask"></span>
                                 <a href="img/gallery2.jpg" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                 <i class="fa fa-expand"></i></a>
                              </div>
                           </div>
                        </div>
                        <!-- Image 3 -->
                        <div class="col-sm-6 col-md-6 col-lg-4 facilities">
                           <div class="portfolio-item">
                              <div class="gallery-thumb">
                                 <img class="img-responsive" src="<?=get_template_directory_uri()?>/assets/img/gallery3.jpg" alt="">
                                 <span class="overlay-mask"></span>
                                 <a href="img/gallery3.jpg" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                 <i class="fa fa-expand"></i></a>
                              </div>
                           </div>
                        </div>
                        <!-- Image 4 -->
                        <div class="col-sm-6 col-md-6 col-lg-4 events">
                           <div class="portfolio-item">
                              <div class="gallery-thumb">
                                 <img class="img-responsive" src="<?=get_template_directory_uri()?>/assets/img/gallery4.jpg" alt="">
                                 <span class="overlay-mask"></span>
                                 <a href="img/gallery4.jpg" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                 <i class="fa fa-expand"></i></a>
                              </div>
                           </div>
                        </div>
                        <!-- Image 5 -->
                        <div class="col-sm-6 col-md-6 col-lg-4 facilities">
                           <div class="portfolio-item">
                              <div class="gallery-thumb">
                                 <img class="img-responsive" src="<?=get_template_directory_uri()?>/assets/img/gallery5.jpg" alt="">
                                 <span class="overlay-mask"></span>
                                 <a href="img/gallery5.jpg" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                 <i class="fa fa-expand"></i></a>
                              </div>
                           </div>
                        </div>
                        <!-- Image 6 -->
                        <div class="col-sm-6 col-md-6 col-lg-4 facilities">
                           <div class="portfolio-item">
                              <div class="gallery-thumb">
                                 <img class="img-responsive" src="<?=get_template_directory_uri()?>/assets/img/gallery6.jpg" alt="">
                                 <span class="overlay-mask"></span>
                                 <a href="img/gallery6.jpg" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                 <i class="fa fa-expand"></i></a>
                              </div>
                           </div>
                        </div>
                        <!-- Image 7 -->
                        <div class="col-sm-6 col-md-6 col-lg-4 events">
                           <div class="portfolio-item">
                              <div class="gallery-thumb">
                                 <img class="img-responsive" src="<?=get_template_directory_uri()?>/assets/img/gallery7.jpg" alt="">
                                 <span class="overlay-mask"></span>
                                 <a href="img/gallery7.jpg" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                 <i class="fa fa-expand"></i></a>
                              </div>
                           </div>
                        </div>
                        <!-- Image 8 -->
                        <div class="col-sm-6 col-md-6 col-lg-4 events">
                           <div class="portfolio-item">
                              <div class="gallery-thumb">
                                 <img class="img-responsive" src="<?=get_template_directory_uri()?>/assets/img/gallery8.jpg" alt="">
                                 <span class="overlay-mask"></span>
                                 <a href="img/gallery8.jpg" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                 <i class="fa fa-expand"></i></a>
                              </div>
                           </div>
                        </div>
                        <!-- Image 9 -->
                        <div class="col-sm-6 col-md-6 col-lg-4 facilities">
                           <div class="portfolio-item">
                              <div class="gallery-thumb">
                                 <img class="img-responsive" src="<?=get_template_directory_uri()?>/assets/img/gallery9.jpg" alt="">
                                 <span class="overlay-mask"></span>
                                 <a href="img/gallery9.jpg" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                 <i class="fa fa-expand"></i></a>
                              </div>
                           </div>
                        </div>
                        <!-- Image 10 -->
                        <div class="col-sm-6 col-md-6 col-lg-4 facilities">
                           <div class="portfolio-item">
                              <div class="gallery-thumb">
                                 <img class="img-responsive" src="<?=get_template_directory_uri()?>/assets/img/gallery10.jpg" alt="">
                                 <span class="overlay-mask"></span>
                                 <a href="img/gallery10.jpg" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                 <i class="fa fa-expand"></i></a>
                              </div>
                           </div>
                        </div>
                        <!-- Image 11 -->
                        <div class="col-sm-6 col-md-6 col-lg-4 facilities">
                           <div class="portfolio-item">
                              <div class="gallery-thumb">
                                 <img class="img-responsive" src="<?=get_template_directory_uri()?>/assets/img/gallery11.jpg" alt="">
                                 <span class="overlay-mask"></span>
                                 <a href="img/gallery11.jpg" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                 <i class="fa fa-expand"></i></a>
                              </div>
                           </div>
                        </div>
                        <!-- Image 12 -->
                        <div class="col-sm-6 col-md-6 col-lg-4 facilities">
                           <div class="portfolio-item">
                              <div class="gallery-thumb">
                                 <img class="img-responsive" src="<?=get_template_directory_uri()?>/assets/img/gallery12.jpg" alt="">
                                 <span class="overlay-mask"></span>
                                 <a href="img/gallery12.jpg" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                 <i class="fa fa-expand"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- /lightbox-->
                  </div>
                  <!-- /col-md-12-->
               </div>
               <!-- /row -->
            </div>
            <!-- /container -->
         </section>
         <!-- Section ends -->
      
         <!-- Section Latest Blog -->
         <section id="latestblog">
            <div class="container">
               <!-- Section Heading -->
               <div class="section-heading">
                  <h2>Our Blog</h2>
               </div>
            <!-- Carousel -->
               <div class="row color_block">
                  <div id="owl-blog" class="owl-carousel">
                     <!-- Blog item 1 -->
                     <div class="blog-preview col-md-12">
                        <!-- Blog image -->
                        <img src="<?=get_template_directory_uri()?>/assets/img/blogprev1.jpg" alt="" />
                        <div class="latest-caption text-center">
                           <a href="blog-post.html">
                              <h4>Mother's Day</h4>
                           </a>
                           <!-- Post Info -->
                           <div class="post-info">
                              <p><i class="fa fa-clock-o"></i>Aug 24, 2015 at 9:00 PM</p>
                              <p><i class="fa fa-user"></i>by <a href="#">Mary Jane</a></p>
                              <!-- Post Comments -->
                              <p><i class="fa fa-comment"></i><a href="#">81 Comments</a></p>
                           </div>
                           <p>Lorem av ipsum dolor sit amet, dorem ipsuem ore consectetur adipisicing elit. Lorem isuem amorem semprem Ratione, voluptatem lorem ipsuet alpacas dolorem animi nisi autem...</p>
                           <!-- Button-->
                           <a class="btn" href="blog-post.html">Read More</a>
                        </div>
                     </div>
                     <!-- /blog-preview -->
                     <!-- Blog item 2 -->
                     <div class="blog-preview col-md-12">
                        <!-- Blog image -->
                        <img src="<?=get_template_directory_uri()?>/assets/img/blogprev2.jpg" alt="" />
                        <div class="latest-caption text-center">
                           <a href="blog-post.html">
                              <h4>Activity Calendar</h4>
                           </a>
                           <!-- Post Info -->
                           <div class="post-info">
                              <p><i class="fa fa-clock-o"></i>Aug 24, 2015 at 9:00 PM</p>
                              <p><i class="fa fa-user"></i>by <a href="#">Mary Jane</a></p>
                              <!-- Post Comments -->
                              <p><i class="fa fa-comment"></i><a href="#">81 Comments</a></p>
                           </div>
                           <p>Lorem av ipsum dolor sit amet, dorem ipsuem ore consectetur adipisicing elit. Lorem isuem amorem semprem Ratione, voluptatem lorem ipsuet alpacas dolorem animi nisi autem...</p>
                           <!-- Button-->
                           <a class="btn" href="blog-post.html">Read More</a>
                        </div>
                     </div>
                     <!-- /blog-preview -->
                     <!-- Blog item 3 -->
                     <div class="blog-preview col-md-12">
                        <!-- Blog image -->
                        <img src="<?=get_template_directory_uri()?>/assets/img/blogprev3.jpg" alt="" />
                        <div class="latest-caption text-center">
                           <a href="blog-post.html">
                              <h4>Painting Class</h4>
                           </a>
                           <!-- Post Info -->
                           <div class="post-info">
                              <p><i class="fa fa-clock-o"></i>Aug 24, 2015 at 9:00 PM</p>
                              <p><i class="fa fa-user"></i>by <a href="#">Mary Jane</a></p>
                              <!-- Post Comments -->
                              <p><i class="fa fa-comment"></i><a href="#">81 Comments</a></p>
                           </div>
                           <p>Lorem av ipsum dolor sit amet, dorem ipsuem ore consectetur adipisicing elit. Lorem isuem amorem semprem Ratione, voluptatem lorem ipsuet alpacas dolorem animi nisi autem...</p>
                           <!-- Button-->
                           <a class="btn" href="blog-post.html">Read More</a>
                        </div>
                     </div>
                     <!-- /blog-preview -->
                     <!-- Blog item 4 -->
                     <div class="blog-preview col-md-12">
                        <!-- Blog image -->
                        <img src="<?=get_template_directory_uri()?>/assets/img/blogprev4.jpg" alt="" />
                        <div class="latest-caption text-center">
                           <a href="blog-post.html">
                              <h4>New Classroom</h4>
                           </a>
                           <!-- Post Info -->
                           <div class="post-info">
                              <p><i class="fa fa-clock-o"></i>Aug 24, 2015 at 9:00 PM</p>
                              <p><i class="fa fa-user"></i>by <a href="#">Mary Jane</a></p>
                              <!-- Post Comments -->
                              <p><i class="fa fa-comment"></i><a href="#">81 Comments</a></p>
                           </div>
                           <p>Lorem av ipsum dolor sit amet, dorem ipsuem ore consectetur adipisicing elit. Lorem isuem amorem semprem Ratione, voluptatem lorem ipsuet alpacas dolorem animi nisi autem...</p>
                           <!-- Button-->
                           <a class="btn" href="blog-post.html">Read More</a>
                        </div>
                     </div>
                     <!-- /blog-preview -->
                     <!-- Blog item 5 -->
                     <div class="blog-preview col-md-12">
                        <!-- Blog image -->
                        <img src="<?=get_template_directory_uri()?>/assets/img/blogprev5.jpg" alt="" />
                        <div class="latest-caption text-center">
                           <a href="blog-post.html">
                              <h4>Our New Teacher</h4>
                           </a>
                           <!-- Post Info -->
                           <div class="post-info">
                              <p><i class="fa fa-clock-o"></i>Aug 24, 2015 at 9:00 PM</p>
                              <p><i class="fa fa-user"></i>by <a href="#">Mary Jane</a></p>
                              <!-- Post Comments -->
                              <p><i class="fa fa-comment"></i><a href="#">81 Comments</a></p>
                           </div>
                           <p>Lorem av ipsum dolor sit amet, dorem ipsuem ore consectetur adipisicing elit. Lorem isuem amorem semprem Ratione, voluptatem lorem ipsuet alpacas dolorem animi nisi autem...</p>
                           <!-- Button-->
                           <a class="btn" href="blog-post.html">Read More</a>
                        </div>
                     </div>
                     <!-- /blog-preview -->
                     <!-- Blog item 6 -->
                     <div class="blog-preview col-md-12">
                        <!-- Blog image -->
                        <img src="<?=get_template_directory_uri()?>/assets/img/blogprev6.jpg" alt="" />
                        <div class="latest-caption text-center">
                           <a href="blog-post.html">
                              <h4>Toddler Care</h4>
                           </a>
                           <!-- Post Info -->
                           <div class="post-info">
                              <p><i class="fa fa-clock-o"></i>Aug 24, 2015 at 9:00 PM</p>
                              <p><i class="fa fa-user"></i>by <a href="#">Mary Jane</a></p>
                              <!-- Post Comments -->
                              <p><i class="fa fa-comment"></i><a href="#">81 Comments</a></p>
                           </div>
                           <p>Lorem av ipsum dolor sit amet, dorem ipsuem ore consectetur adipisicing elit. Lorem isuem amorem semprem Ratione, voluptatem lorem ipsuet alpacas dolorem animi nisi autem...</p>
                           <!-- Button-->
                           <a class="btn" href="blog-post.html">Read More</a>
                        </div>
                     </div>
                     <!-- /blog-preview -->
                  </div>
                  <!-- /owl-blog -->
               </div>
               <!-- /row -->
            </div>
            <!-- /container -->
         </section>
         <!-- Section ends -->
      
         <!-- Parallax object -->
         <div class="parallax-object3 hidden-sm hidden-xs" data-0="opacity:1;"
            data-100="transform:translatex(0%);"
            data-center-center="transform:translatex(380%);">
            <!-- Image -->
            <img src="<?=get_template_directory_uri()?>/assets/img/parallaxobject3.png" alt="">
         </div>
      
         <!-- Section Prices -->
         <section id="prices" class="color-section">
            <!-- svg triangle shape -->
            <svg id="triangleShadow" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
               <path class="trianglePath1" d="M0 0 L50 100 L100 0 Z" />
            </svg>
            <div class="container">
               <div class="col-lg-8 col-lg-offset-2">
                  <!-- Section heading -->
                  <div class="section-heading">
                     <h2>Our Prices</h2>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12 text-center">
               <!-- Price tables -->
                     <div class="pricing pricing-palden">
                        <div class="pricing-item col-lg-4 col-md-4 col-sm-12">
                           <div class="pricing-deco">
                              <svg class="pricing-deco-img" enable-background='new 0 0 300 100' height='100px' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
                                 <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729&#x000A;	c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
                                 <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729&#x000A;	c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
                                 <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716&#x000A;	H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
                                 <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428&#x000A;	c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
                              </svg>
                              <div class="pricing-price"><span class="pricing-currency">$</span>59
                                 <span class="pricing-period">/ day</span>
                              </div>
                              <h3 class="pricing-title">Daily</h3>
                           </div>
                     <!-- List -->
                           <ul class="pricing-feature-list">
                              <li>No Contracts</li>
                              <li>10h /day</li>
                              <li>Drop In</li>
                              <li>Facilities Included</li>
                           </ul>
                           <!-- Button-->
                           <div class="page-scroll">
                              <a class="btn" href="#contact">Contact us</a>
                           </div>
                           <!--/page-scroll-->
                        </div>
                        <div class="pricing-item pricing-item-featured col-lg-4 col-md-4 col-sm-12">
                           <div class="pricing-deco">
                              <svg class="pricing-deco-img" enable-background='new 0 0 300 100' height='100px' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
                                 <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729&#x000A;	c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
                                 <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729&#x000A;	c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
                                 <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716&#x000A;	H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
                                 <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428&#x000A;	c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
                              </svg>
                              <div class="pricing-price"><span class="pricing-currency">$</span>350
                                 <span class="pricing-period">/ week</span>
                              </div>
                              <h3 class="pricing-title">Weekly</h3>
                           </div>
                     <!-- List -->
                           <ul class="pricing-feature-list">
                              <li>Natural Enviroment Program</li>
                              <li>10h /day</li>
                              <li>Bonus Activities</li>
                              <li>Parent's Handbook</li>
                           </ul>
                           <!-- Button-->
                           <div class="page-scroll">
                              <a class="btn" href="#contact">Contact us</a>
                           </div>
                           <!--/page-scroll-->
                        </div>
                        <div class="pricing-item col-lg-4 col-md-4 col-sm-12">
                           <div class="pricing-deco">
                              <svg class="pricing-deco-img" enable-background='new 0 0 300 100' height='100px' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
                                 <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729&#x000A;	c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
                                 <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729&#x000A;	c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
                                 <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716&#x000A;	H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
                                 <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428&#x000A;	c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
                              </svg>
                              <div class="pricing-price"><span class="pricing-currency">$</span>999
                                 <span class="pricing-period">/ mo</span>
                              </div>
                              <h3 class="pricing-title">Monthly</h3>
                           </div>
                     <!-- List -->
                           <ul class="pricing-feature-list">
                              <li>Extra Savings</li>
                              <li>12h /day</li>
                              <li>Bonus Activities</li>
                              <li>Parent's Handbook</li>
                           </ul>
                           <!-- Button-->
                           <div class="page-scroll">
                              <a class="btn" href="#contact">Contact us</a>
                           </div>
                           <!--/page-scroll-->
                        </div>
                  <!--/pricing-item-->
                     </div>
                     <!-- /col-sm-12-->
                  </div>
                  <!-- /row -->			  
               </div>
               <!-- /container-->
            </div>
         </section>
         <!-- /Section ends -->
      
         <!-- Section Call to Action -->
         <section id="call-to-action" class="small-section">
            <div class="container text-center">
               <div class="col-lg-6 col-lg-offset-6 col-sm-6">
            <div class="well">
                  <!-- Section heading -->
                  <h3>Get more Information</h3>
                  <p>Lorem av ipsum dolor sit amet, dorem ipsuem ore consectetur adipisicing elit semprem Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et em explicabo tenetur lore apsuet!</p>
                  <!-- Button -->
                  <div class="page-scroll">
                  <a class="btn" href="#about">About Us</a>
                  </div>
               <!--/page-scroll -->
               </div>
               <!--/well -->
               </div>
               <!--/col-lg-6 -->
            </div>
            <!-- /container-->
         </section>
         <!-- Section ends -->
      
         <!-- Section Contact -->
         <section id="contact" class="color-section">
            <div class="container">
               <div class="col-lg-8 col-lg-offset-2">
                  <!-- Section heading -->
                  <div class="section-heading">
                     <h2>Contact us</h2>
                  </div>
               </div>
               <!-- Contact -->
               <div class="col-lg-4 text-center">
                  <h4>Information</h4>  
                  <!-- contact info -->			   
                  <div class="contact-info">
                  <p><i class="flaticon-back"></i><a href="mailto:youremailaddress">daycare@site.com</a></p>
                  <p><i class="fa fa-phone margin-icon"></i>Call us +1 456 7890</p>
               </div>
                     <!-- address info -->
                     <p>We are located at Imaginary Fun City, 304.</p>
                  <!-- Map -->
                  <div id="map-canvas"></div>
               </div>
               <!-- Contact Form -->
               <div class="col-lg-7 col-lg-offset-1">
                  <h4>Write us</h4>
               <!-- Form Starts -->
                  <div id="contact_form">
                     <div class="form-group">
                        <input type="text" name="name" class="form-control input-field" placeholder="Name" required="">                    
                        <input type="email" name="email" class="form-control input-field" placeholder="Email ID" required="">           
                        <input type="text" name="subject" class="form-control input-field" placeholder="Subject" required="">                     
                     </div>
                     <textarea name="message" id="message" class="textarea-field form-control" rows="4" placeholder="Enter your message" required=""></textarea>
                     <button type="submit" id="submit_btn" value="Submit" class="btn center-block">Send message</button>
                  </div>
               <!-- Contact results -->
                  <div id="contact_results"></div>
               </div>
               <!--/Contact form -->
            </div>
            <!-- /container-->
         </section>
         <!--Section ends -->
      
         <!-- Footer -->	
         <?php get_footer(); ?>
         <!-- /footer ends -->
      </div> <!-- /page width -->
         <!-- Core JavaScript Files -->
         <script src="<?=get_template_directory_uri()?>/assets/js/jquery.min.js"></script>
         <script src="<?=get_template_directory_uri()?>/assets/js/bootstrap.min.js"></script>
         <!-- Main Js -->
         <script src="<?=get_template_directory_uri()?>/assets/js/main.js"></script>
         <!-- Isotope -->	  
         <script src="<?=get_template_directory_uri()?>/assets/js/jquery.isotope.js"></script>
         <!--Mail Chimp validator -->
         <script src='<?=get_template_directory_uri()?>/assets/js/mc-validate.js'></script>
         <!--Other Plugins -->
         <script src="<?=get_template_directory_uri()?>/assets/js/plugins.js"></script>
      <!-- Contact -->
         <script src="<?=get_template_directory_uri()?>/assets/js/contact.js"></script>
         <!-- Prefix free CSS -->
         <script src="<?=get_template_directory_uri()?>/assets/js/prefixfree.js"></script>	  	  
         <!-- GreenSock -->
         <script src="<?=get_template_directory_uri()?>/assets/layerslider/js/greensock.js" ></script>
         <!-- LayerSlider script files -->
         <script src="<?=get_template_directory_uri()?>/assets/layerslider/js/layerslider.transitions.js" ></script>
         <script src="<?=get_template_directory_uri()?>/assets/layerslider/js/layerslider.kreaturamedia.jquery.js" ></script>
   </body>
</html>