<footer>
       <div class="band"></div>
       <div class="footer-wrapper">
           <div class="container">
               <div class="row">
                   <div class="col-md-4 col-sm-6 col-xs-12">
                       <div class="footer-contacts">
                       
                            <?php if( !dynamic_sidebar( 'footer_left' ) ): ?>
                            <?php endif; ?>

                       </div>
                   </div>
                   <div class="col-md-4 col-sm-6 hidden-xs">
                      <div class="footer-img">
                          <img src="<?php bloginfo('template_url'); ?>/img/foto-footer.jpg" alt="">
                      </div>
                   </div>
                   <div class="col-md-4 hidden-sm hidden-xs">
                       <div class="widget">
                            <?php if( !dynamic_sidebar( 'footer_right' ) ): ?>
                            <?php endif; ?>
                      </div>
                   </div>
               </div>
           </div>
       </div>
   </footer>
   
    <script src="<?php bloginfo('template_url'); ?>/js/vendor.min.js"></script>
    
    <script src="<?php bloginfo('template_url'); ?>/js/main.min.js"></script>
    
    <?php wp_footer(); ?>
</body>
</html>