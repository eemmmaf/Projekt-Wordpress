<?php
/*
 * @Author: Emma Forslund - emfo2102 
 * @Date: 2022-06-16 13:45:47 
 * @Last Modified by:   Emma Forslund - emfo2102 
 * @Last Modified time: 2022-06-16 13:45:47 
 */
?>
  
  <!--Här börjar footer-->
  <footer>
      <div class="footer-flex-container">
          <!--Menyn-->
          <div>
              <nav>
                  <a href="<?php echo get_home_url(); ?>"><img class="logo" src="<?= get_template_directory_uri(); ?>/logo-kraft.svg" alt=""></a>
                  <?php
                    wp_nav_menu();
                    ?>
              </nav>
          </div>
          <!--Div med uppgifter-->
          <div>
              <h2>Besök oss</h2>
              <p>Tyska bottens väg 48 B <br>1684 Bromma, Stockholm</p>
              <p>076 101 54 74 <br>emfo2102@student.miun.se</p>
          </div>

          <!--Nyhetsbrev och sociala medier-->
          <div>
              <h2>Nyhetsbrev</h2>
              <?php
                if (is_active_sidebar('nyhetsbrev')) : ?>
                  <?php dynamic_sidebar('nyhetsbrev'); ?>
              <?php
                endif;
                ?>
          </div>
      </div>
  </footer>
  <script src="<?= get_template_directory_uri(); ?>/js/menu.js"></script>
  </body>

  </html>