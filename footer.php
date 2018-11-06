<footer class="footer scrollto" id="contactus">
      <div class="footer__item text-center text-white">
        <section class="footer__form">
            <h6 class="title title--section"><?php the_field('contacto_titulo', 'option'); ?></h6>
            <span class="text text-center title title--secundary">
                <?php the_field('contacto_subtitulo', 'option'); ?>
            </span>
            <div class="form" >
              <?php
                $contactoForm = get_field('contacto_id_del_formulario','option');
                $short = '[contact-form-7 id="' . $contactoForm . '" ]';
                echo do_shortcode($short);
              ?>              
            </div> <!-- Form contact -->
        </section>
      </div> <!-- End Footer Contact -->
      <section class="footer__map">
        <div id="map"></div>
      </section> <!-- End Map -->
      <section class="information">
        <div class="box">
          <div class="information__item">
            <span class="isa-phone"></span><strong><?php the_field('datos_telefono', 'option'); ?></strong>
          </div>
          <div class="information__item">
            <span class="isa-location2"></span><strong><?php the_field('datos_correo_electronico', 'option'); ?></strong>
          </div>
          <div class="information__item">
            <span class="isa-mail"></span><strong><?php the_field('datos_correo_electronico', 'option'); ?></strong>
          </div>
        </div>
      </section> <!-- End Information address -->
      <div class="isa">
        <div class="box">
          <div class="isa__left">
            Copyright © <?php echo date("Y"); ?> <a href="http://www.adatheme.com/" target="_blank">AdaTheme</a>. All rights reserved.
          </div> <!-- End Copyright -->
          <div class="isa__right">
            <ul class="list-none">
                <li>
                  <a href="<?php the_field('facebook', 'option'); ?>" title="Facebook AdaTheme" target="_blank">
                    <span class="isa-facebook2"></span>
                  </a>
                </li>
                <li>
                  <a href="<?php the_field('twitter', 'option'); ?>" title="Twitter AdaTheme" target="_blank">
                    <span class="isa-twitter"></span>
                  </a>
                </li>
                <li>
                  <a href="<?php the_field('linkedin', 'option'); ?>" title="Google Plus AdaTheme" target="_blank">
                    <span class="isa-google-plus2"></span>
                  </a>
                </li>
                <li>
                  <a href="<?php the_field('instagram', 'option'); ?>" title="Instagram AdaTheme" target="_blank">
                    <span class="isa-instagram"></span>
                  </a>
                </li>
                <li>
                  <a href="<?php the_field('youtube', 'option'); ?>" title="Youtube AdaTheme" target="_blank">
                    <span class="isa-youtube2"></span>
                  </a>
                </li>
            </ul> <!-- End social networks -->
          </div>
        </div>
      </div>
    </footer> <!-- End Footer -->
   
   
    <!-- Javascript scripts needed to run the website -->
      
      <?php wp_footer(); ?>
  </body>
</html>