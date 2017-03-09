<?php get_header('page'); ?>
   <main>
      <div class="description-wrapper advice-single">
          <div class="container">
                <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
                    <h2 class="section-title header-single"><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                <?php endwhile; ?>
                <?php endif; ?>
          </div>
      </div>
   </main>
<?php get_footer(); ?>