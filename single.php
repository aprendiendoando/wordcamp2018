<?php
  get_header();
?>  
    <main class="main main--internal">
      <section class="blog blog__boxing">
        <div class="box">
          <?php
            /* Start the Loop */
            while ( have_posts() ) : the_post();
          ?>

          <article class="blog__information">
            <figure>
              <?php
                if ( has_post_thumbnail() ) { 
                    the_post_thumbnail('blog', ['class' => 'img-responsive'] );
                }else{
              ?>
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/single-blog.jpg" alt="Isabella" width="800" height="350">
              <?php
                }
              ?>
              
            </figure>
            <h2 class="title title--secundary text-center">Camera / Web Design</h2>
            <h1 class="title title--section text-center"><?php the_title(); ?></h1>
            
            <?php
              the_content();
            ?>

          </article> <!-- End Blog information-->

          <?php
            endwhile; // End of the loop.
        ?>





          <aside class="sidebar">
            <div class="widget">
              <h5 class="title title--section text-center">News Recients</h5>
              <ul class="list-none">
                <li><a href="#">Steve's DigiCams</a></li>
                <li><a href="#">Digital Photo Review</a></li>
                <li><a href="#">Photography Bay</a></li>
                <li><a href="#">Black Nikon</a></li>
                <li><a href="#">EOS 7D Mark II</a></li>
                <li><a href="#">YI 4K Action</a></li>
                <li><a href="#">Sigma 100-400mm</a></li>
                <li><a href="#">Canon PowerShot</a></li>
                <li><a href="#">Palette Gear Review</a></li>
                <li><a href="#">Fujifilm FinePix XP120</a></li>
              </ul>
            </div> <!-- End Widget one -->
            <div class="widget">
              <h5 class="title title--section text-center">Follow Us Now</h5>
              <ul class="list-none rs">
                <li><a href="https://www.facebook.com/adathemeoficial" title="Facebook AdaTheme" target="_blank"><span class="isa-facebook2"></span></a></li>
                <li><a href="https://www.twitter.com/adathemeoficial" title="Twitter AdaTheme" target="_blank"><span class="isa-twitter"></span></a></li>
                <li><a href="https://www.google.com/adathemeoficial" title="Google Plus AdaTheme" target="_blank"><span class="isa-google-plus2"></span></a></li>
                <li><a href="https://www.instagram.com/adathemeoficial" title="Instagram AdaTheme" target="_blank"><span class="isa-instagram"></span></a></li>
                <li><a href="https://www.youtube.com/adathemeoficial" title="Youtube AdaTheme" target="_blank"><span class="isa-youtube2"></span></a></li>
              </ul>
            </div> <!-- End Widget one -->
            <div class="widget widget--dashed">
              <h5 class="title title--section text-center">Categories</h5>
              <ul class="list-none">
                <li><a href="#">Abstract</a><a href="#">13</a></li>
                <li><a href="#">Time Lapse</a><a href="#">14</a></li>
                <li><a href="#">Still Life</a><a href="#">15</a></li>
                <li><a href="#">Wedding</a><a href="#">20</a></li>
                <li><a href="#">Fashion</a><a href="#">28</a></li>
                <li><a href="#">Advertising</a><a href="#">36</a></li>
                <li><a href="#">Portrait</a><a href="#">50</a></li>
                <li><a href="#">Wildlife</a><a href="#">51</a></li>
                <li><a href="#">Travel</a><a href="#">69</a></li>
              </ul>
            </div> <!-- End Widget one -->
            <div class="widget">
              <figure>
                <a href="#" title="Canon Camera">
                  <img src="img/blog-5.jpg" alt="Canon Camera" width="800" height="1200">
                </a>
              </figure>
            </div> <!-- End Widget one -->
          </aside> <!-- End Sidebar-->
        </div>
      </section>
    </main> <!-- End Main -->
<?php
  get_footer();
?>