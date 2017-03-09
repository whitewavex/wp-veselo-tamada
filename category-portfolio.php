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
                          if( preg_match('#^_edit#', $key ) || preg_match('#^_thumbnail#', $key ) ) {
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
      <div class="wedding-fotos">
          <div class="container">
              <div class="gallery">
                  <div class="galleryContainer">
                      <div class="slide"><img src="img/foto-1.jpg" alt=""></div>
                      <div class="slide"><img src="img/foto-2.jpg" alt=""></div>
                      <div class="slide"><img src="img/foto-3.jpg" alt=""></div>
                      <div class="slide"><img src="img/foto-4.jpg" alt=""></div>
                  </div>
              </div>
          </div>
      </div>
      <div class="corporate-fotos">
          <div class="container">
              <div class="gallery">
                  <div class="galleryContainer">
                      <div class="slide"><img src="img/slide-1.jpg" alt=""></div>
                      <div class="slide"><img src="img/slide-2.jpg" alt=""></div>
                      <div class="slide"><img src="img/slide-3.jpg" alt=""></div>
                      <div class="slide"><img src="img/slide-4.jpg" alt=""></div>
                  </div>
              </div>
          </div>
      </div>
      <div class="birthday-fotos">
          <div class="container">
              <div class="gallery">
                  <div class="galleryContainer">
                      <div class="slide"><img src="img/slide-5.jpg" alt=""></div>
                      <div class="slide"><img src="img/slide-6.jpg" alt=""></div>
                      <div class="slide"><img src="img/review-1.jpg" alt=""></div>
                      <div class="slide"><img src="img/review-2.jpg" alt=""></div>
                  </div>
              </div>
          </div>
      </div>
      <div class="band band-center"></div>
      <div class="reviews-wrapper">
           <div class="container">
               <h2 class="section-title visible-block">Отзывы клиентов</h2>
               <div id="reviews-container">
                   <ul class="reviews">
                       <li>
                           <img src="img/review-1.jpg" alt="">
                           <div class="review">
                               <h4>Алексей и Анастасия</h4>
                               <p>Текст отзыва и т.д. текст отзыва и т.д. текст отзыватекст отзыватекст отзыватекст отзыватекст отзыватекст отзыватекст отзыватекст отзыватекст отзыватекст отзыватекст отзыватекст отзыватекст отзыватекст отзыватекст отзыватекст отзыватекст отзыватекст отзыватекст отзыватекст отзыватекст отзыватекст отзыватекст отзыватекст отзыватекст отзыва.</p>
                           </div>
                       </li>
                       <li>
                           <img src="img/review-2.jpg" alt="">
                           <div class="review">
                               <h4>Сергей и Наталия</h4>
                               <p>Текст отзыва и т.д. текст отзыва и т.д. текст отзыватекст отзыватекст отзыватекст отзыватекст отзыватекст отзыватекст отзыватекст отзыватекст отзыватекст отзыватекст отзыватекст отзыватекст отзыватекст отзыватекст отзыватекст отзыватекст отзыватекст отзыватекст отзыватекст отзыватекст отзыватекст отзыватекст отзыватекст отзыватекст отзыва.</p>
                           </div>
                       </li>
                       <li>
                           <img src="img/review-1.jpg" alt="">
                           <div class="review">
                               <h4>Алексей и Анастасия</h4>
                               <p>Текст отзыва и т.д. текст отзыва и т.д. текст отзыватекст отзыватекст отзыватекст отзыватекст отзыватекст отзыватекст отзыватекст отзыватекст отзыватекст отзыватекст отзыватекст отзыватекст отзыватекст отзыватекст отзыватекст отзыватекст отзыватекст отзыватекст отзыватекст отзыватекст отзыватекст отзыватекст отзыватекст отзыватекст отзыва.</p>
                           </div>
                       </li>
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