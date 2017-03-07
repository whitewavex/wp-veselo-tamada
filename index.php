<?php get_header(); ?>
   <main>
   
        <?php $args = array(
            'post_type' => array('page'),
            'meta_key' => 'order',
            'orderby' => 'meta_value_num',
            'order' => 'ASC',
            'posts_per_page' => 1 ); ?>
            
        <?php $page_index = new WP_Query($args); ?>
        
        <?php if ($page_index->have_posts()) :  while ($page_index->have_posts()) : $page_index->the_post(); ?>
            <div class="description-wrapper">
               <div class="container">
                   <h2 class="section-title"><?php the_title(); ?></h2>
                   <?php the_content(); ?>
               </div>
            </div>
        <?php endwhile; ?>
        <?php endif; ?>
        
       <div class="holidays-wrapper">
           <div class="container">
               <div class="row">
                   <div class="col-sm-4">
                        <div class="holidays">
                            <a class="weddings" href="<?php bloginfo('template_url'); ?>/service.html#wedding">
                                <p>Wedding</p>
                            </a>
                            <h4>Свадьбы</h4>
                        </div>
                   </div>
                   <div class="col-sm-4">
                        <div class="holidays">
                            <a class="corporate" href="<?php bloginfo('template_url'); ?>/service.html#corporate">
                                <p>Corporate</p>
                            </a>
                            <h4>Корпоративы</h4>
                        </div>
                   </div>
                   <div class="col-sm-4">
                        <div class="holidays">
                            <a class="birthday" href="<?php bloginfo('template_url'); ?>/service.html#birthday">
                                <p>Birthday</p>
                            </a>
                            <h4>Дни рождения</h4>
                        </div>
                   </div>
               </div>
           </div>
       </div>
       
        <?php 
            $id = 3;
            $posts_advantage = new WP_Query( array( 
                'cat' => $id, 
                'posts_per_page' => 3,
                'order' => 'ASC'
            ));
            $cat_name = get_cat_name( $id );
        ?>
       
        <?php if ( $posts_advantage->have_posts() ) :  ?>
            <div class="advantage-wrapper">
               <div class="container">
                   <div class="row">
                       <h2 class="section-title visible-block"><?php echo $cat_name; ?></h2>
        <?php while ( $posts_advantage->have_posts() ) : $posts_advantage->the_post(); ?>
                       <div class="col-md-4 col-xs-12">
                           <div class="advantage">
                               <h3><?php the_title(); ?></h3>
                               <?php the_content(); ?>
                           </div>
                       </div>
        <?php endwhile; ?>
                    </div>
               </div>
           </div>
        <?php endif; ?>
        
        <?php $fotos = new WP_Query( array(
            'post_type' => 'fotos',
            'order' => 'ASC'
        )); ?>
        
        <?php if ( $fotos->have_posts() ) : ?>
            <div class="container-fluid">
                <div class="row">
        <?php while ( $fotos->have_posts() ) : $fotos->the_post(); ?>
            <div class="col-lg-4 col-md-4 col-sm-6 fotos">
               <div class="foto">
                   <?php the_post_thumbnail(); ?>
               </div>
            </div>
        <?php endwhile; ?>
                </div>
            </div>
        <?php endif; ?>
        
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
                                   <?php the_content(); ?>
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