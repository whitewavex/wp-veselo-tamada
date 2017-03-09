<?php get_header('page'); ?>
   <main>
      <div class="description-wrapper">
          <div class="container">
              <h2 class="section-title visible-block"><?php single_cat_title(); ?></h2>
              <div class="row">
                  <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
                    <?php $custom_field_keys = get_post_custom_keys(); ?>
                    <?php $href = get_permalink(); ?>
                    <div class="col-sm-4">
                      <?php foreach( $custom_field_keys as $key ){
                          if( preg_match('#^_edit#', $key ) || preg_match('#^_thumbnail#', $key ) ) {
                              continue;
                          }
                          else {
                              echo "<a href='{$href}' class='advice {$key}'>";
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
   </main>
<?php get_footer(); ?>