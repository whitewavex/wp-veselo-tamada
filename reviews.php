<?php
/*
Template Name: Отзывы
*/
?>
  <?php get_header('about'); ?>
   <main>
        <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
            <section class="description-wrapper reviews-section">
                <div class="container">
                    <h2 class="section-title"><?php the_title(); ?></h2>
                </div>
            </section>
            <section class="reviews-section">
                <div class="container">
        <?php endwhile; ?>
        <?php endif; ?>
        
        <?php $reviews = new WP_Query( array(
            'post_type' => 'reviews',
            'order' => 'ASC'
        )); ?>

        <?php if ( $reviews->have_posts() ) : while ( $reviews->have_posts() ) : $reviews->the_post(); ?>
               <div class="reviews-container advice-single">
                  <div class="container">
                      <div class="review-foto">
                          <?php the_post_thumbnail(); ?>
                          <h3><?php the_title(); ?></h3>
                      </div>
                      <?php the_content('(прочитать полностью ...)'); ?>
                  </div>
               </div>
               <div class="reviews-line"></div>
        <?php endwhile; ?>
        <?php endif; ?>
        
        <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
            <section class="description-wrapper reviews-section">
                <div class="container">
                    <?php the_content(); ?>
                </div>
            </section>
            <section class="reviews-section">
                <div class="container">
        <?php endwhile; ?>
        <?php endif; ?>
   </main>
   <?php get_footer(); ?>