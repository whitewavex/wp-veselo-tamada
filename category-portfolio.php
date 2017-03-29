<?php get_header('portfolio'); ?>
   <main>
      <div class="description-wrapper">
          <div class="container">
               <h2 class="section-title visible-block"><?php single_cat_title(); ?></h2>
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
      
      <div class="description-wrapper">
          <div class="container">
              <h2 class="section-title visible-block">Видео</h2>
              <div class="row">
      
      <?php $video = new WP_Query( array(
            'post_type' => 'video',
            'order' => 'ASC'
        )); ?>

        <?php if ( $video->have_posts() ) : while ( $video->have_posts() ) : $video->the_post(); ?>
                          <div class="col-sm-6 col-xs-12">
                             <div class="video">
                                <?php the_content(); ?>
                             </div>
                          </div>
        <?php endwhile; ?>
        <?php endif; ?>
            </div>
          </div>
       </div>
   </main>
   <?php get_footer(); ?>