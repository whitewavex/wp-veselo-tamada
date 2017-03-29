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
                  <div class="col-sm-6 col-xs-12">
                     <div class="video">
                        <center></center><iframe width="727" height="352" src="https://www.youtube.com/embed/o4D_1phN95U" frameborder="0" allowfullscreen></iframe></center>
                     </div>
                  </div>
                  <div class="col-sm-6 col-xs-12">
                      <div class="video">
                        <center></center><iframe width="727" height="352" src="https://www.youtube.com/embed/i9AHJkHqkpw" frameborder="0" allowfullscreen></iframe></center>
                     </div>
                  </div>
              </div>
          </div>
      </div>
   </main>
   <?php get_footer(); ?>