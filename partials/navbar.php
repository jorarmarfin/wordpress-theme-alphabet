<nav class="navbar navbar-custom navbar-fixed-top">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand-centered">
        <i class="fa fa-bars"></i>
        </button>
        <div class="navbar-brand-centered page-scroll">
            <a href="/"><img src="<?=get_template_directory_uri()?>/assets/img/logo.png"  alt=""></a>
        </div>
    </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar-brand-centered">
        <div class="container">
            <?php 
                if(has_nav_menu( 'mainmenu-left' )){
                    wp_nav_menu( array(
                            'theme_location'=>'mainmenu-left',
                            'menu_class'=>'nav navbar-nav page-scroll navbar-left',
                            'items_warp'=>'<ul class="nav navbar-nav page-scroll navbar-left">%3$s<ul>'
                    )) ;
                }
            ?>
            <?php 
                if(has_nav_menu( 'mainmenu-right' )){
                    wp_nav_menu( array(
                            'theme_location'=>'mainmenu-right',
                            'menu_class'=>'nav navbar-nav page-scroll navbar-right',
                            'items_warp'=>'<ul class="nav navbar-nav page-scroll navbar-left">%3$s<ul>'
                    )) ;
                }
            ?>
                
        </div>
    </div>
    <!-- /.navbar-collapse -->
</nav>
