<?php get_header('portfolio'); ?>
   <main>
      <div class="description-wrapper">
          <div class="container">
               <h2 class="section-title"><?php single_cat_title(); ?></h2>
               <div class="row">
                <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
                    <?php $custom_field_keys = get_post_custom_keys(); ?>
                    <div class="col-sm-4 center">
                      <?php foreach( $custom_field_keys as $key ){
                          if( preg_match('#^_#', $key ) ) {
                              continue;
                          }
                          else {
                              echo "<a href='#' class='works' data-target='{$key}-fotos'>";
                          } 
                      } ?>
                          <?php the_post_thumbnail(); ?>
                          <h3><?php the_title(); ?></h3>
                      </a>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?>
               </div>
          </div>
      </div>
      <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
        <?php $custom_field_keys = get_post_custom_keys(); ?>
          <?php foreach( $custom_field_keys as $key ){
              if( preg_match('#^_#', $key ) ) {
                  continue;
              }
              else {
                  echo "<div class='{$key}-fotos'>";
              } 
          } ?>
              <?php the_content(); ?>
          </a>
        </div>
      <?php endwhile; ?>
      <?php endif; ?>
      <div class="band band-center"></div>
      <div class="reviews-wrapper">
           <div class="container">
               <h2 class="section-title visible-block">Отзывы клиентов</h2>
               <div id="reviews-container">
                   <ul class="reviews">
        
        <?php $reviews = new WP_Query( array(
            'post_type' => 'reviews',
            'order' => 'ASC'
        )); ?>
       
        <?php if ( $reviews->have_posts() ) : while ( $reviews->have_posts() ) : $reviews->the_post(); ?>
                          <li>
                               <?php the_post_thumbnail(); ?>
                               <div class="review">
                                   <h4><?php the_title(); ?></h4>
                                   <?php the_content('(прочитать полностью ...)'); ?>
                               </div>
                           </li> 
        <?php endwhile; ?>
        <?php endif; ?>
        
                   </ul>
                   <div class="reviews-control">
                       <a class="prevReview"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
                       <a class="nextReview"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                   </div>
               </div>
           </div>
       </div>
   </main>
   <?php get_footer(); ?>