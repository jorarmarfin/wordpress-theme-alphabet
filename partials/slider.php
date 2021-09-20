<?php
$args = [
   'post_type' => 'post_type_slider'
];
$query = new WP_Query( $args );

?>
<div id="layerslider">
   <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
   <!-- Slide 1 -->
   <div class="ls-slide" data-ls="transition2d:104;timeshift:-2000;">
      <!-- Background image -->
      <?php 
         $thumbID = get_post_thumbnail_id( $post->ID );
         $imgDestacada = wp_get_attachment_image_src( $thumbID, 'full' );
      ?>
      <img src="<?=$imgDestacada[0]?>" class="ls-bg"  alt="Slide background"/>
      <!-- Parallax Image -->
      <img src="<?=get_template_directory_uri()?>/assets/img/sun.png" class="ls-l img-responsive hidden-xs hidden-sm parallax1" alt="" data-ls="delayin:1000;easingin:fadeIn;parallaxlevel:7;">
      <!-- Text -->
      <div class="ls-l header-text container" data-ls="offsetxin:0;durationin:2000;delayin:1500;easingin:easeOutElastic;rotatexin:-90;transformoriginin:50% top 0;offsetxout:-200;durationout:1000;parallaxlevel:2;">
         <h1><?=the_title()?></h1>
         <p class="subtitle hidden-xs"> <?=the_content()?> </p>
         <!-- Button -->
         <div class="page-scroll hidden-xs">
            <a class="btn" href="#contact">Contact us</a>
         </div>
      </div>
      <!-- Parallax Image -->
      <img src="<?=get_template_directory_uri()?>/assets/img/flower.png" class="ls-l img-responsive hidden-xs hidden-sm parallax2" alt="" data-ls="delayin:1500;easingin:fadeIn;parallaxlevel:6;">
   </div>
   <?php endwhile; else : endif; ?>
</div>
