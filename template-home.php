<?php
  // Template Name: Home
?>
<?php get_header(); ?>
    <main class="main">
      <section class="scrollto photostyles box box--bottom-padding" id="photostyles">
        <h2 class="text text-center title title--main"><?php the_field('photo_titulo', 'option'); ?></h2>
        <span class="text text-center title title--secundary"><?php the_field('photo_subtitulo', 'option'); ?></span>
        <article class="photostyles__item text text-center">
          <h3 class="title title--section-secundary text text-center">Services</h3>
            <div class="line line--min"></div>
            <section class="photostyles__item text margin--big text-center">
                <?php
                  // Loop Last Courses LearnPress
                    $args = array(
                            'posts_per_page' => 3,
                            'post_type' => 'servicios'
                        );
                    $lastServices = new WP_Query( $args );
                     if( $lastServices->have_posts() ):
                        while( $lastServices->have_posts() ): $lastServices->the_post();
                          get_template_part( 'parts/content', 'grid' ); 
                        endwhile;
                    else:
                        get_template_part( 'parts/content', 'missing' );
                    endif;
                    wp_reset_postdata();
                ?>
               
            </section> <!-- End Services -->
        </article>
      </section> <!-- End photostyles -->
      <section class="scrollto text text-center project" id="project">
        <h2 class="text text-center title title--main">My Last Work</h2>
        <!-- Here we place the controls-->
        <!-- In this section we use the library filterizr.js, for more information visit http://yiotis.net/filterizr/ -->
        <div class="box">
          <ul class="list-none controls__work">
            <li data-filter="all">All Items</li>
            <li data-filter="1">Aerials</li>
            <li data-filter="2">Europe</li>
            <li data-filter="3">Pacific</li>
            <li data-filter="4">Asia</li>
            <li data-filter="5">Best Of</li>
            <li data-filter="6">Africa</li>
            <li data-filter="7">South America</li>
          </ul> <!-- End controls -->
          <div class="filtr-container js-animation-bounceInUp">
            <div class="filtr-item" data-category="1, 7" data-sort="value">
              <figure class="animation__hover"><img src="<?php echo get_template_directory_uri(); ?>/img/my-last-work-1.jpg" alt="Aerials">
                <figcaption>
                  <h3>Lunar <span>Moon</span></h3>
                </figcaption><a href="#"></a>
              </figure>
            </div> <!-- Item one -->
            <div class="filtr-item" data-category="2, 1, 5" data-sort="value">
              <figure class="animation__hover"><img src="<?php echo get_template_directory_uri(); ?>/img/my-last-work-2.jpg" alt="Africa">
                <figcaption>
                  <h3>Happy <span>Couple</span></h3>
                </figcaption><a href="#"></a>
              </figure>
            </div> <!-- Item two -->
            <div class="filtr-item" data-category="3, 6, 1" data-sort="value">
              <figure class="animation__hover"><img src="<?php echo get_template_directory_uri(); ?>/img/my-last-work-3.jpg" alt="Asia">
                <figcaption>
                  <h3>Best <span>Drinks</span></h3>
                </figcaption><a href="#"></a>
              </figure>
            </div> <!-- Item three -->
            <div class="filtr-item" data-category="4, 2, 5" data-sort="value">
              <figure class="animation__hover"><img src="<?php echo get_template_directory_uri(); ?>/img/my-last-work-4.jpg" alt="Best Of">
                <figcaption>
                  <h3>Best <span>Juice</span></h3>
                </figcaption><a href="#"></a>
              </figure>
            </div> <!-- Item four -->
            <div class="filtr-item" data-category="5, 1, 3" data-sort="value">
              <figure class="animation__hover"><img src="<?php echo get_template_directory_uri(); ?>/img/my-last-work-5.jpg" alt="Europe">
                <figcaption>
                  <h3>London <span>Street</span></h3>
                </figcaption><a href="#"></a>
              </figure>
            </div> <!-- Item five -->
            <div class="filtr-item" data-category="6, 3, 5" data-sort="value">
              <figure class="animation__hover"><img src="<?php echo get_template_directory_uri(); ?>/img/my-last-work-6.jpg" alt="Pacific">
                <figcaption>
                  <h3>Boy <span>Girl</span></h3>
                </figcaption><a href="#"></a>
              </figure>
            </div> <!-- Item six -->
            <div class="filtr-item" data-category="1, 4, 2" data-sort="value">
              <figure class="animation__hover"><img src="<?php echo get_template_directory_uri(); ?>/img/my-last-work-7.jpg" alt="Aerials">
                <figcaption>
                  <h3>Girl<span>Beatiful</span></h3>
                </figcaption><a href="#"></a>
              </figure>
            </div> <!-- Item seven -->
            <div class="filtr-item" data-category="2, 3, 6" data-sort="value">
              <figure class="animation__hover"><img src="<?php echo get_template_directory_uri(); ?>/img/my-last-work-8.jpg" alt="Aerials">
                <figcaption>
                  <h3>Man <span>Polo</span></h3>
                </figcaption><a href="#"></a>
              </figure>
            </div> <!-- Item eight -->
          </div>
        </div>
      </section><!-- End project -->
      <section class="isabella scrollto" id="isabella">
        <article class="isabella__image" style="background-image: url('<?php the_field('biografia_imagen', 'option'); ?>');"></article> <!-- Image Background CSS -->
        <article class="isabella__information">
          <span class="text--uppercase"><?php the_field('biografia_texto_secundario', 'option'); ?></span>
          <h4 class="text--uppercase"><?php the_field('biografia_titulo_principal', 'option'); ?></h4>
          <hr>
          <?php the_field('biografia_descripcion', 'option'); ?>
          <a class="btn btn--slider btn--slider--white" href="<?php the_field('biografia_url_mis_trabajos', 'option'); ?>" title="View Gallery">
            View Gallery
          </a>
        </article> <!-- Information right Isabella -->
      </section> <!-- End isabella -->
      <section class="testimonials text text-center scrollto" id="testimonials">
        <span class="title title--section-secundary text text-center text--uppercase">
          our customers
        </span>
        <div class="testimonials__slides">
          <?php
                  // Loop Last Courses LearnPress
                    $args = array(
                            'posts_per_page' => 3,
                            'post_type' => 'testimonios'
                        );
                    $lastTestimonial = new WP_Query( $args );
                     if( $lastTestimonial->have_posts() ):
                        while( $lastTestimonial->have_posts() ): $lastTestimonial->the_post();
          ?> 
                          <div>
                            <figure>
                              <?php
                                  if ( has_post_thumbnail() ) { 
                                      the_post_thumbnail('full', ['class' => 'img-responsive'] );
                                  }else{
                                ?>
                                      <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/testimonial-not-image.jpg" alt="Testimonial Isabella" width="114" height="114">
                                <?php
                                  }
                                ?>                              
                            </figure>
                            <blockquote>" <?php the_field('testimonios_mensaje'); ?>"</blockquote>
                            <strong> <?php the_title(); ?></strong>
                            <span> <?php the_field('testimonios_perfil'); ?></span>
                            <span class="text--basecolor"><?php the_field('testimonios_compania'); ?></span>
                          </div> <!-- End Terstimonial -->
          <?php
                         endwhile;
                    else:
                        get_template_part( 'parts/content', 'missing' );
                    endif;
                    wp_reset_postdata();
          ?>






        </div>
      </section> <!-- End testimonials -->
      <section class="blog scrollto" id="blog">
        <div class="box">
          <span class="title title--section-secundary text text-center text--uppercase">
            latest news
          </span>
          <div class="blog__item">
            <?php
              // Loop Last Courses LearnPress
                $args = array(
                        'posts_per_page' => 3                        
                    );
                $lastBlog = new WP_Query( $args );
                  if( $lastBlog->have_posts() ):
                    while( $lastBlog->have_posts() ): $lastBlog->the_post();
            ?>
                  <figure class="blog__item--new">
                    <div class="image">
                      <?php
                        if ( has_post_thumbnail() ) { 
                            the_post_thumbnail('blog', ['class' => 'img-responsive'] );
                        }else{
                      ?>
                           <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/isabella-blog.jpg" alt="Isabella" width="800" height="1020">
                      <?php
                        }
                      ?>
                    </div>
                    <figcaption>
                      <div class="date">
                        <?php $day = get_the_date( 'j' ); ?>
                        <?php $month = get_the_date( 'M' ); ?>
                        <span class="day"><?php echo $day; ?></span>
                        <span class="month"><?php echo $month; ?></span>
                      </div>
                      <h3><?php the_title(); ?></h3>
                      <?php the_excerpt(); ?>
                    </figcaption>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"></a>
                  </figure> <!-- Item Blog -->
            <?php
                    endwhile;
                  else:
                      get_template_part( 'parts/content', 'missing' );
                  endif;
                  wp_reset_postdata();
            ?>
          </div>
          <!-- Button all Blogs -->
          <!-- <a class="btn btn--center btn--center--big" href="javascript:void(0);" title="View all blog posts">
            View all blog posts
          </a> -->
        </div>
      </section> <!-- End blog -->
    </main> <!-- End Main -->
<?php get_footer(); ?>