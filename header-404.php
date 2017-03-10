<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/vendor.min.css">
    
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    
    <?php wp_head(); ?>
</head>
<body>
   <header>
       <div class="head-contacts">
           <div class="container">
               <div class="row">
                   <div class="col-lg-4 col-lg-offset-4 col-md-5 col-md-offset-3 col-sm-6 col-sm-offset-1 col-xs-12 col-xs-offset-0">
                      <div class="head-phone">
                          <i class="fa fa-phone" aria-hidden="true"></i>
                          <p>(063) 650-12-24</p>
                          <p>(095) 741-00-45</p>
                      </div>
                   </div>
                   <div class="col-lg-3 col-md-4 col-sm-5">
                       <div class="head-envelope">
                          <i class="fa fa-envelope-o" aria-hidden="true"></i>
                          <p>veselo-tamada@ukr.net</p>
                      </div>
                   </div>
               </div>
           </div>
       </div>
       <div class="head-title-wrapper">
           <div class="container">
                <div class="head-title">
                   <img src="<?php bloginfo('template_url'); ?>/img/heart.png" alt="">
                   <h1>Тамада на свадьбу, корпоратив, юбилей</h1>
                </div>
           </div>
       </div>
       <div class="cover">
            <img src="<?php bloginfo('template_url'); ?>/img/404-bg.jpg" alt="">
       </div>
       <div class="navbar-wrapper">
           <div class="container navbar-container">
                <nav>
                    <div class="navbar-header">
                        <button class="navbar-toggle collapsed menu-bars" data-toggle="collapse" data-target="#top-menu"><i class="fa fa-bars" aria-hidden="true"></i></button>
                    </div>
                    <div class="collapse navbar-collapse nav-menu" id="top-menu">
                    
                        <?php
                        
                        $args = array(
                            'theme_location'  => 'menu',
                            'container' => 'ul',
                            'menu_class' => 'nav nav-pills'
                        );
                        
                        wp_nav_menu( $args );
                        
                        ?>

                    </div>
                </nav>
           </div>
       </div>
   </header>