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
                          <?php if( !dynamic_sidebar('header_center') ): ?>
                          <?php endif; ?>
                      </div>
                   </div>
                   <div class="col-lg-3 col-md-4 col-sm-5">
                       <div class="head-envelope">
                           <?php if( !dynamic_sidebar('header_right') ): ?>
                           <?php endif; ?>
                      </div>
                   </div>
               </div>
           </div>
       </div>
       <div class="head-title-wrapper">
           <div class="container">
                <div class="head-title">
                   <img src="<?php bloginfo('template_url'); ?>/img/heart.png" alt="">
                   <h1><?php bloginfo( 'description' ); ?></h1>
                </div>
           </div>
       </div>
       <div class="carousel-wrapper">
           <div class="container">
               <div id="carousel-container">
                   <ul class="carousel">
                   
                       <?php $slider = new WP_Query( array(
                            'post_type' => 'slider',
                            'order' => 'ASC'
                        )); ?>

                        <?php if ( $slider->have_posts() ) :  while ( $slider->have_posts() ) : $slider->the_post(); ?>
                        <li>
                            <?php the_post_thumbnail(); ?>
                        </li>
                        <?php endwhile; ?>
                        <?php endif; ?>

                   </ul>
                   <div class="controls">
                       <a class="prevSlide"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
                       <a class="nextSlide"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                   </div>
               </div>
           </div>
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