<?php get_header(); ?>
    <main class="main main--internal">
      
      <section class="services__intern box box--bottom-padding">
        <?php
            /* Start the Loop */
            while ( have_posts() ) : the_post();
        ?>
            <h1 class="text text-center title title--main"><?php the_title(); ?></h1>
            <div class="line line--min"></div>
            <?php the_content(); ?>
            <?php
              // check if the repeater field has rows of data
                if( have_rows('galeria') ):
            ?>
                  <h2 class="title title--section-secundary text text-center margin-top">Gallery</h2>
                  <article class="services__intern--item">
                  <?php
                    // loop through the rows of data
                          while ( have_rows('galeria') ) : the_row();
                  ?>
                    <figure class="services__intern--gallery">
                      <img src="<?php the_sub_field('galeria_imagen'); ?>" alt="<?php the_sub_field('galeria_titulo'); ?>">
                      <figcaption>
                        <h3><?php the_sub_field('galeria_titulo'); ?></h3>
                        <p><?php the_sub_field('galeria_mensaje'); ?></p>
                      </figcaption>
                      <a href="#"></a>
                    </figure> <!-- Gallery Item one-->
                     <?php  endwhile; ?>
                  </article> <!-- End Gallery -->
            <?php
              else :
                get_template_part( 'parts/content', 'missing' );
              endif;
            endwhile; // End of the loop.
        ?>


        <!-- Start Services -->
        <h3 class="title title--section-secundary text text-center">Services</h3>
        <div class="line line--min"></div>
          <section class="photostyles__item text margin--big text-center">
          <?php
              // Loop Last Courses LearnPress
                $args = array(
                        'posts_per_page' => 3,
                        'post_type' => 'servicios',
                        'post__not_in' => array(get_the_ID())
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
      </section>      
    </main> <!-- End Main -->
<?php get_footer(); ?>
