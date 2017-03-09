<?php
/*
Template Name: О нас
*/
?>
  <?php get_header('about'); ?>
   <main>
   
       <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
            <div class="description-wrapper">
               <div class="container">
                   <h2 class="section-title"><?php the_title(); ?></h2>
                   <?php the_content(); ?>
               </div>
       </div>
        <?php endwhile; ?>
        <?php endif; ?>

       <section class="person-wrapper">
           <div class="container">
           
               <?php $team = new WP_Query(array('post_type' => 'team', 'order' => 'ASC')) ?>

               <?php if( $team->have_posts() ) : while ( $team->have_posts() ) : $team->the_post(); ?>
                   <div class="person">
                       <div class="row line">
                           <div class="col-md-6 col-sm-5">
                               <div class="person-img-1">
                                   <?php the_post_thumbnail(); ?>
                               </div>
                           </div>
                           <div class="col-md-6 col-sm-7">
                               <div class="person-info">
                                   <h4><?php the_title(); ?></h4>
                                   <?php the_content(); ?>
                               </div>
                           </div>
                       </div>
                    </div>
               <?php endwhile; ?>
               <?php else: ?>
               <?php endif; ?>
               
           </div>
       </section>
   </main>
   <?php get_footer(); ?>