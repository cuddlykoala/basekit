      <div id="footerHidden">

        <footer id="contact">
          <div class="container">
            <div class="row">
              <div class="col-md-3 footer-left">
                <h4>&copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?></h4>
                <div class="social-icons">
                  <a target="_blank" href="https://www.facebook.com/effusionacappella"><span class="fb" style="background: url(<?php bloginfo( 'url' );?>/wp-content/themes/effusion/images/assets/facebook.png);"></span></a>
                  <a target="_blank" href="https://instagram.com/effusionacappella/"><span class="ig" style="background: url(<?php bloginfo( 'url' );?>/wp-content/themes/effusion/images/assets/inst.png);"></span></a>
                  <a target="_blank" href="https://www.youtube.com/channel/UCUBMTjJ6AYXOX2kY0nYm5gA"><span class="yt" style="background: url(<?php bloginfo( 'url' );?>/wp-content/themes/effusion/images/assets/youtube.png);"></span></a>
                </div>

              </div>
              <div class="col-md-4 footer-center">
                <form>
                  <div class="form-group">
                <input type="text" class="form-control" id="messageName" placeholder="Name">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" id="messageEmail" placeholder="Enter email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="messageSubject" placeholder="Subject">
              </div>

              <div class="form-group">
                <textarea class="form-control" placeholder="Enter a Message" id="messageArea"></textarea>
              </div>
              <button type="submit" class="btn btn-default btn-lg">Submit</button>
            </form>
              </div>
              <div class="col-md-5 footer-right">
                <p>Effusion A Cappella has performed for birthdays, weddings, dinners, high school concerts, charity events, and many other celebrations. If you are interested in booking us for an event, please email us with the date, time, length of performance, and a brief explanation of the event.</p>
              </div>
            </div>
          </div>
        </footer>

      </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php wp_footer(); ?>

  </body>
</html>


