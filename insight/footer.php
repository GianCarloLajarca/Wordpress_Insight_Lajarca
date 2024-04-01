<?php wp_footer() ?>
<section class="footer">
      <div class="container">
        <div class="footer__wrapper">
          <div class="footer__social">
            <ul>
              <li>
                <a href=""><i class="fa-solid fa-envelope"></i></a>
              </li>
              <li>
                <a href=""><i class="fa-brands fa-slack"></i></a>
              </li>
              <li>
                <a href=""><i class="fa-brands fa-facebook-f"></i></a>
              </li>
              <li>
                <a href=""><i class="fa-brands fa-twitter"></i></a>
              </li>
            </ul>
          </div>
          <img src="<?php echo get_field ('footer_logo')?>" alt="" />
          <p><?php echo get_field ('footer_paragraph')?></p>
        </div>
      </div>
    </section>
    <script src="./script.js"></script>
  </body>
</html>
