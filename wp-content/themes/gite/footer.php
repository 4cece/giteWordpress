

    <footer class="row align-items-center bg-dark py-3">
          <div class="col-md-2 col-sm-12 col-xs-12 ">
              <p class="text-center text-light"><?php echo get_theme_mod('footer_options_6')   ?></p>
          </div>
          <div class="col-md-2 col-sm-12 col-xs-12">
              <p class="text-center text-light my-auto ">Tel: <?php echo get_theme_mod('footer_options_2')   ?></p>
              <p class="text-center text-light my-auto "> <?php echo get_theme_mod('footer_options_3')   ?></p>
          </div>
          <div class="col-md-4 col-sm-12">
            <a href="http://localhost/www/wordpress/"><img class="mx-auto d-block" src="<?php echo get_theme_mod("footer_options_5")?>" alt="logo"> </a>
          </div>
          <div class="col-md-2 col-sm-12">
              <p class="text-center text-light"><?php echo get_theme_mod('footer_options_4') ?></p>
          </div>
          <div class="col-md-2 col-sm-12 col-xs-12 mb-5">
              <p class="text-center text-light">plan du site</p>
              <a href="http://localhost/www/wordpress/mentions-legales/"><p class="text-center text-light">mentions légales</p></a>
              <a href="https://www.facebook.com/profile.php?id=100063637239892"><img  class="w-25 mx-auto d-block" src="<?php echo get_template_directory_uri() ?>./assets/img/logo/facebook-770688_1280.png" alt="facebook-770688_1280"></a>
          </div>
      </footer>
<?php wp_footer() ?>

</body>
</html>