<div class="aheto-btn-container aheto-btn-container--fullwidth " style="display:none;">
  <a href="/?nav=4" class="aheto-btn  aheto-btn--alter   ">WORK WITH US<i class="ion-arrow-right-c aheto-btn__icon--right"></i></a>
  <a href="/?nav=1" class="aheto-btn     ">SEE ALL SERVICES<i class="ion-arrow-right-c aheto-btn__icon--right"></i></a>
</div>
<footer class="aheto-footer aheto-footer-1">
  <div class="aheto-footer-1__main" style="display:none;">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-lg-5">
          <div class="widget widget_aheto ">
            <div class="widget_aheto__logo">
              <img src="/img/home/footer-logo-9.png" alt="footer">
            </div>
            <p class="widget_aheto__desc">AYUDIDIBE MEGA VENTURES (NIG) LIMITED <br class="hidden-sm hidden-xs hidden-md">
              <br class="hidden-sm hidden-xs hidden-md">Our business philosophy is centered around three core principles: Innovation, Integrity, and Customer-Centricity. These principles guide our approach to doing business and shape every aspect of our operations.</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-7">
            <div class="widget widget_nav_menu widget_nav_menu_2">
              <h2 class="widget-title">navigation</h2>
              <div class="menu-main-container">
                <ul class="menu">
                  <?php foreach ($data['pages'] as $key => $value) { 
                    $url = (($key>0)?'?nav='.$key:'/');
                    ?>
                    <li class="menu-item  menu-item-type-post_type menu-item-object-page"><a href="<?php echo $url?>">
                      <?php echo $value['title']?></a>
                    </li>
                  <?php }?>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3" style="display: none;">
            <section class="widget widget_recent_entries widget_recent_entries_1">
              <h2 class="widget-title">Latest news</h2>
              <ul>
                <li>
                  <a href="#">Within the construction industry as their overdraft</a>
                  <span class="post-date">NOV 26, 2019</span>
                </li>
                <li>
                  <a href="#">Strategic and commercial approach with issues</a>
                  <span class="post-date">NOV 26, 2019</span>
                </li>
              </ul>
            </section>
          </div>
          <div class="col-sm-6 col-lg-3" style="display: none;">
            <section class="widget widget_mc4wp_form_widget aheto_mc_2">
              <h2 class="widget-title">SUBSCRIBE</h2>
              <form id="mc4wp-form-2" class="mc4wp-form mc4wp-form-223" method="post" data-id="223" data-name="Email">
                <div class="mc4wp-form-fields">
                  <input type="email" name="EMAIL" placeholder="Your Email" required="">
                  <button type="submit"><i class="icon ion-ios-paperplane"></i></button>
                  <p>Get daily newsletter on your inbox.</p>
                </div>
                <label style="display: none !important;">Leave this field empty if you're human: <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off"></label><input type="hidden" name="_mc4wp_timestamp" value="1536917771"><input
                  type="hidden" name="_mc4wp_form_id" value="223"><input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1">
                <div class="mc4wp-response"></div>
              </form>
            </section>
            <!-- / MailChimp for WordPress Plugin -->
          </div>
      </div>
    </div>
  </div>
  <div class="aheto-footer-1__bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-12">
          <div class="aheto-footer-1__cr margin-lg-50t margin-lg-30b margin-sm-0t margin-sm-0b text-center">
            <p style="color: grey;" class="aheto-footer-1__cr-text">Designed - <a target="_blank" style="color:red" href="https://ikev61.logicant.com/">iKev61</a> - 2024</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-5 text-right" style="display:none;">
          <div class="aheto-footer-1__socials">
            <div class="aheto-socials margin-lg-50t margin-lg-50b margin-sm-0t">
              <a class="aheto-socials__link" href="https://www.facebook.com/">
                <i class="aheto-socials__icon icon ion-social-facebook"></i>
              </a>
              <a class="aheto-socials__link" href="https://twitter.com">
                <i class="aheto-socials__icon icon ion-social-twitter"></i>
              </a>
              <a class="aheto-socials__link" href="https://www.tumblr.com/">
                <i class="aheto-socials__icon icon ion-social-tumblr"></i>
              </a>
              <a class="aheto-socials__link" href="https://www.skype.com/en/">
                <i class="aheto-socials__icon icon ion-social-skype"></i>
              </a>
              <a class="aheto-socials__link" href="https://www.youtube.com/">
                <i class="aheto-socials__icon icon ion-social-youtube"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<div class="site-search" id="search-box">
  <button class="close-btn js-close-search"><i class="fa fa-times" aria-hidden="true"></i></button>
  <div class="form-container">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <form role="search" method="get" class="search-form" action="http://ahetopro/" autocomplete="off">
            <div class="input-group">
              <input type="search" value="" name="s" class="search-field" placeholder="Enter Keyword" required="">
            </div>
          </form>
          <p class="search-description">Input your search keywords and press Enter.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Magnific popup -->
<script src="vendors/magnific/jquery.magnific-popup.min.js"></script>
<!-- anm -->
<script src="vendors/animation/anm.min.js"></script>
<!-- Google maps -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARwCmK-LlGIH8Mv1ac4VyceMYUgg9vStM&amp;#038;&language=en"></script>
<script src="vendors/googlemap/google-maps.js?v=1"></script>
<!-- FullCalendar -->
<!-- Parallax -->
<script src="vendors/parallax/parallax.min.js"></script>
<!-- asRange -->
<script src="vendors/range/jquery.range-min.js"></script>
<!-- lightgallery -->
<script src="vendors/lightgallery/lightgallery.min.js"></script>
<!-- Main script -->
<script src="vendors/script.js?v=1"></script>
<script src="vendors/spectragram/spectragram.min.js"></script>
<script>
  $(document).ready(function() {
    jQuery.fn.spectragram.accessData = {
      accessToken: '4058508404.1677ed0.f87c0182df0d4512a9e01def0c53adb7'
    }

    $('.instafeed').spectragram('getUserFeed', {
      size: 'big',
      max: 6
    });
  });
</script>