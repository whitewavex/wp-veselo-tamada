<?php
/*
Template Name: Контакты
*/
?>
<?php get_header('contacts'); ?>
   <main>
      <div class="description-wrapper">
          <div class="container">
              <div class="row">
                <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
                    <h2 class="section-title"><?php the_title(); ?></h2>
                    <?php the_excerpt(); ?>
                        <div class="col-sm-6">
                          <?php the_content(); ?>
                        </div>
                <?php endwhile; ?>
                <?php endif; ?>
                
                <div class="col-sm-6">
                    <div class="contacts">
                        <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
                            <?php $custom_fields = get_post_custom(get_the_ID()); ?>
                            <?php
                            foreach( $custom_fields as $key => $value ){
                                if( preg_match('#^_#', $key ) ) {
                                    continue;
                                }
                                else {
                                    echo "<div class='{$key}'><i class='fa fa-{$key}'></i>{$value[0]}</div>";
                                }
                            }
                            ?>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
              </div>
          </div>
      </div>
   </main>
<?php get_footer(); ?>