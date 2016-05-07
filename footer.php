  <section id="footer">
      <div class="container">
          <div class="row footer__top">
              <div class="col-md-4">
                  <h2 class="footer__title">MODUS <span>versus</span></h2>
                  <p class="footer__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec .</p>
                  <p class="footer__phone">Phone: <a href="tel:+18225695896">182 2569 5896</a></p>
                  <p class="footer__mail">e-mail: <a href="mailto:info@modu.versus?Subject=Hello" target="_top">info@modus.versus</a></p>
              </div>
              <div class="col-md-2">
                  <h4 class="footer__list-title">Company</h4>
                  <ul class="footer__list">
                      <li class="footer__list-item"><i class="fa fa-chevron-right"></i><a href="#">About</a></li>
                      <li class="footer__list-item"><i class="fa fa-chevron-right"></i><a href="#">FAQ</a></li>
                      <li class="footer__list-item"><i class="fa fa-chevron-right"></i><a href="#">Contact</a></li>
                      <li class="footer__list-item"><i class="fa fa-chevron-right"></i><a href="#">Terms</a></li>
                      <li class="footer__list-item"><i class="fa fa-chevron-right"></i><a href="#">Privacy</a></li>
                      <li class="footer__list-item"><i class="fa fa-chevron-right"></i><a href="#">Testimonials</a></li>
                  </ul>
              </div>
              <div class="col-md-2">
                  <h4 class="footer__list-title">Community</h4>
                  <ul class="footer__list">
                      <li class="footer__list-item"><i class="fa fa-chevron-right"></i><a href="#">Blog</a></li>
                      <li class="footer__list-item"><i class="fa fa-chevron-right"></i><a href="#">Forum</a></li>
                      <li class="footer__list-item"><i class="fa fa-chevron-right"></i><a href="#">Support</a></li>
                      <li class="footer__list-item"><i class="fa fa-chevron-right"></i><a href="#">Newsletter</a></li>
                  </ul>
              </div>
              <div class="col-md-4">
                  <div class="footer__from-blog">
                      <div class="footer__from-blog--title">from the <span class="footer__from-blog--title-uppercase">blog</span></div>

                      <?php 
                          $args = array('category_name' => 'blog', 'posts_per_page' => 2);
                          $the_query = new WP_Query( $args );
                      ?>
                          <?php if ( $the_query->have_posts() ) : ?>
                          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                          <div class="footer__from-blog--post">
                                  <div class="footer__from-blog--post-avatar">
                                       <?php if(has_post_thumbnail()){ the_post_thumbnail('post-blog-footer'); }  ?>
                                  </div>
                                  <p class="footer_from-blog--post-text">
                                          <a href="<?php the_permalink(); ?>">
                                                  <?php the_title(); ?>
                                          </a>
                                  </p>
                                  <div class="footer_from-blog--post-date"><?php the_date(); ?></div>
                          </div>
                          <?php endwhile; ?>
                          <?php wp_reset_postdata(); ?>
                          <?php endif; ?>
                  </div>
              </div>
          </div><!-- /row -->
      </div>
      
      
      <div class="container-fluid footer__bottom">
          <div class="container">
              <div class="row">
                  <div class="col-md-2">
                      <p class="copywrite">2016 IQ Hub</p>
                  </div>      
                  <div class="col-md-2 col-md-offset-8">
                      <div class="socials">
                          <a href="#" class="socials__social-item"><i class="fa fa-facebook fa-inverse"></i></a>
                          <a href="#" class="socials__social-item"><i class="fa fa-google-plus fa-inverse"></i></a>
                          <a href="#" class="socials__social-item"><i class="fa fa-twitter fa-inverse"></i></a>
                          <a href="#" class="socials__social-item"><i class="fa fa-rss fa-inverse"></i></a>
                      </div>
                  </div>      
              </div>
          </div>
      </div>  
  </section>

  <?php wp_footer(); ?>                
      
</body>
</html>