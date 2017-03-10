<?php get_header('service'); ?>
   <main>
      <div class="description-wrapper">
          <div class="container">
              <h2 class="section-title"><?php single_cat_title(); ?></h2>
              <div class="row">
                  <div class="col-md-7">
                      <div class="accordeon-container">
                      <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
                        <?php $custom_field_keys = get_post_custom(get_the_ID()); ?>
                          <?php foreach( $custom_field_keys as $key => $value ){
                              $title = get_the_title();
                              $price = $value[0];
                              $content = get_the_content();
                              if( preg_match('#^_edit#', $key ) || preg_match('#^_thumbnail#', $key ) || preg_match('#^_wp#', $key ) || preg_match('#^_edit#', $key ) || preg_match('#add-service#', $key ) ) {
                                  continue;
                              }
                              else {
                                  echo "<div class='set'><a href='#' id='{$key}'>
                                        <h3>" . $title . "</h3>
                                        <p>" . $price . "</p>
                                        </a>
                                        <div class='accordeon-content'>" . $content . "</div>
                                        </div>";
                              }
                          } ?>
                      <?php endwhile; ?>
                      <?php endif; ?>
                      </div>
                  </div>
                  <div class="col-md-5">
                      <div class="add-container">
                      <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
                          <?php $custom_field_keys = get_post_custom_keys(); ?>
                          <?php foreach( $custom_field_keys as $key ){
                              if( preg_match('#^add-service#', $key ) ) {
                                  $title = get_the_title();
                                  $content = get_the_content();
                                  echo "<div class='add-name'>
                                          <h3>" . $title . "</h3>
                                      </div>
                                      <div class='add-service'>" . $content . "</div>";
                              }
                              else {
                                  continue;
                              } 
                          } ?>
                      <?php endwhile; ?>
                      <?php endif; ?>
                      </div>
                  </div>
              </div>
          </div>
      </div>
   </main>
<?php get_footer(); ?>