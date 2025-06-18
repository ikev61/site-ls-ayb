<div class="aheto-header-1__toolbar" style="border:none">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="aheto-header-1__toolbar-content">
          <div class="aht-socials " style="display: none;">
            <a class="aht-socials__link aht-btn--dark aht-btn--trans " href="#">
              <i class="aht-socials__icon icon ion-social-facebook"></i>
            </a>
            <a class="aht-socials__link aht-btn--dark aht-btn--trans " href="#">
              <i class="aht-socials__icon icon ion-social-skype"></i>
            </a>
            <a class="aht-socials__link aht-btn--dark aht-btn--trans " href="#">
              <i class="aht-socials__icon icon ion-social-googleplus"></i>
            </a>
            <a class="aht-socials__link aht-btn--dark aht-btn--trans " href="#">
              <i class="aht-socials__icon icon ion-social-linkedin"></i>
            </a>
            <a class="aht-socials__link aht-btn--dark aht-btn--trans " href="#">
              <i class="aht-socials__icon icon ion-social-twitter"></i>
            </a>
          </div>
        </div>
        <p class="aheto-header-1__toolbar-text" style="text-align:center;">
          <a href="/" class="karma-logo karma-logo--dark main-header__logo">
          <img src="/img/logo.png" alt="" class="karma-logo__image">
        </a>
          <h5 class="text-center">AYUDIDIBE MEGA VENTURES NIG LTD<br><small>Mining & General Contractor | RC: 1003047</small></h5></p>
      </div>
    </div>
  </div>
</div>
<div class="aheto-header-1__main" style="margin-top:40px">
  <div class="aheto-header-1__nav-wrap">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 offset-xl-3">
          <div class="aheto-header-1__nav">
            <div class="aheto-header-1__menu js-menu">
              <ul class="main-menu">
              <?php foreach ($data['pages'] as $key => $value) { 
                  $url = (($key>0)?'?nav='.$key:'/');
                  $active = 'fff;';
                  $bg = '';
                  if((isset($_GET['nav']) and $key==$_GET['nav'])) $active = '';
                  elseif(!isset($_GET['nav']) and $key==0) $active = '';
                  else $bg = 'background-color:#27389A!important;';
                 ?>
                  <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item--mega-menu"> 
                    <a href="<?php echo $url?>" style="color:#<?php echo $active.$bg?>" ><?php echo $value['title']?></a>
                  </li>
              <?php }?>
              </ul>
            </div>
            <div class="aheto-header-1__additional">
              <div class="aheto-header-1__hamburger">
                <button class="hamburger hamburger--squeeze js-hamburger js-hamburger--body-over" type="button">
                  <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                  </span>
                </button>
              </div>
              <div class="aheto-header-1__lang" style="display: none;">
                <div class="multi-lang">
                  <div class="multi-lang__active js-lang">
                    <div class="multi-lang__language ">
                      <div class="multi-lang__language-img">
                        <img class="js-bg" alt="" src="/img/home/multilang/lang-1.png">
                      </div>
                      <h6 class="multi-lang__language-text" data-abbr="US">US</h6>
                    </div>
                  </div>
                  <ul class="multi-lang__list js-lang-list">
                    <li class="multi-lang__item">
                      <div class="multi-lang__language ">
                        <div class="multi-lang__language-img">
                          <img class="js-bg" alt="" src="/img/home/multilang/lang-2.png">
                        </div>
                        <h6 class="multi-lang__language-text" data-abbr="SP">Spanish</h6>
                      </div>
                    </li>
                    <li class="multi-lang__item">
                      <div class="multi-lang__language ">
                        <div class="multi-lang__language-img">
                          <img class="js-bg" alt="" src="/img/home/multilang/lang-3.png">
                        </div>
                        <h6 class="multi-lang__language-text" data-abbr="FR">French</h6>
                      </div>
                    </li>
                    <li class="multi-lang__item">
                      <div class="multi-lang__language ">
                        <div class="multi-lang__language-img">
                          <img class="js-bg" alt="" src="/img/home/multilang/lang-4.png">
                        </div>
                        <h6 class="multi-lang__language-text" data-abbr="TK">Turkish</h6>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- <div class="aheto-header-1__button">
                <a class="aheto-header-1__button-link js-open-search" href="#">
                  <i class="aheto-header-1__button-icon icon ion-android-search"></i>
                </a>
              </div>
              <div class="aheto-header-1__button">
                <a class="aheto-header-1__button-link" href="#">
                  <i class="aheto-header-1__button-icon icon ion-ios-cart"></i>
                </a>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
