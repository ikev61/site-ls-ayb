<!DOCTYPE html>
<html>

<head>
  <?php require_once 'includes/head.php'?>
</head>

<body data-anm=".anm" class="">
  <header class="aheto-header aheto-header-1">
    <?php require_once 'includes/navbar.php'?>
  </header>
  <div class="aheto-tab js-tab aheto-tab--business ">
    <div class="aheto-tab__content ">
      <div class="aheto-tab__box js-tab-box  active aheto-tab__box--overlay-1">
        <img class="aheto-tab__box-bg js-bg" src="/img/home-page/banner-1.jpg" alt="Background">
        <div class="aheto-tab__box-inner">
          <div class="container">
            <div class="row margin-lg-10t">
              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-12">
                    <div class="aheto-heading  aheto-heading--business aheto-heading--divider-t3 aheto-heading--t-white">
                      <h1 class="aheto-heading__title">Building Construction,<br>Exploration of Solid Mineral, and Export/Import</h1>
                    </div>
                  </div>
                </div>
                <div class="row margin-lg-15t">
                  <div class="col-md-12">
                    <div class="aheto-btn-container  business-home">
                      <a href="/?nav=contact" class="aheto-btn   aheto-btn--light   aheto-btn--trans ">REQUEST A QUOTE<i class="ion-arrow-right-c aheto-btn__icon--right"></i></a>
                      <a href="/?nav=service" style="" class="aheto-btn  aheto-btn--underline  aheto-btn--light  ">
                        EXPLORE SERVICES
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="aheto-tab__box js-tab-box   ">
        <img class="aheto-tab__box-bg js-bg" src="/img/home-page/banner-2.png" alt="Background">
        <div class="aheto-tab__box-inner">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="row margin-lg-10t">
                  <div class="col-md-12">
                    <div class="aheto-heading  aheto-heading--business aheto-heading--t-white">
                      <h6 class="aheto-heading__subtitle t-uppercase">Technology</h6>
                      <h1 class="aheto-heading__title           ">Cyber security<br>& surveillance.</h1>
                    </div>
                  </div>
                </div>
                <div class="row margin-lg-30t margin-lg-50b">
                  <div class="col-md-8">
                    <div class="aheto-btn-container  ">
                      <a href="/?nav=about" style="" class="aheto-btn    aheto-btn--light  ">
                        MORE ABOUT US
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="aheto-tab__box js-tab-box   aheto-tab__box--overlay-3">
        <img class="aheto-tab__box-bg js-bg" src="/img/home-page/banner-3.png" alt="Background">
        <div class="aheto-tab__box-inner">
          <div class="container">
            <div class="row">
              <div class="col-md-6 offset-md-6">
                <div class="row">
                  <div class="col-md-12">
                    <div class="aheto-heading  aheto-heading--business aheto-heading--t-white">
                      <h1 class="aheto-heading__title           ">Trade<br>& import/export.</h1>
                    </div>
                  </div>
                </div>
                <div class="row margin-lg-30t">
                  <div class="col-md-12">
                    <div class="aheto-btn-container  ">
                      <a href="/?nav=contact" class="aheto-btn  aheto-btn--alter   aheto-btn--shadow  ">REQUEST A QUOTE<i class="ion-arrow-right-c aheto-btn__icon--right"></i></a>
                      <a href="/?nav=contact" style="" class="aheto-btn  aheto-btn--trans aheto-btn--simple    ">
                        <i class="ion-ios-telephone aheto-btn__icon--left"></i> <?php echo $data['contact'][0]['phone']?>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="aheto-tab__box js-tab-box   aheto-tab__box--overlay-4">
        <img class="aheto-tab__box-bg js-bg" src="/img/home-page/banner-4.png" alt="Background">
        <div class="aheto-tab__box-inner">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-12">
                    <div class="aheto-heading  aheto-heading--business aheto-heading--t-white">
                      <h1 class="aheto-heading__title">Mining operation and explorations.</h1>
                    </div>
                  </div>
                </div>
                <div class="row margin-lg-40t">
                  <div class="col-md-12">
                    <div class="aheto-btn-container  business-home">
                      <a href="/?nav=contact" class="aheto-btn">REQUEST A QUOTE<i class="ion-arrow-right-c aheto-btn__icon--right"></i></a>
                      <a href="/?nav=contact" style="" class="aheto-btn  aheto-btn--underline  aheto-btn--light  ">
                        EXPLORE SERVICES
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="aheto-tab__head margin-md-55b" style="display:none">
      <ul class="aheto-tab__list ">
        <li class="aheto-tab__list-item active">
          <a href="#" class="aheto-tab__list-link js-tab-list">
            <span>01.&#160;</span>Construction
          </a>
        </li>
        <li class="aheto-tab__list-item ">
          <a href="#" class="aheto-tab__list-link js-tab-list">
            <span>02.&#160;</span>Technologies
          </a>
        </li>
        <li class="aheto-tab__list-item ">
          <a href="#" class="aheto-tab__list-link js-tab-list">
            <span>03.&#160;</span>Import & Export
          </a>
        </li>
        <li class="aheto-tab__list-item ">
          <a href="#" class="aheto-tab__list-link js-tab-list">
            <span>04.&#160;</span>Mining Exploration
          </a>
        </li>
      </ul>
    </div>
  </div>
  <div class="business-services-wrap">
    <div class="container">
      <div class="row margin-lg-90t margin-lg-105b margin-md-70t margin-md-60b margin-sm-40t margin-sm-45b">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-12">
              <div class="aheto-heading  aheto-heading--classic aheto-heading--b-c2">
                <h6 class="aheto-heading__subtitle t-uppercase t-bold">AYUDIDIBE MEGA VENTURE (NIG.) LIMITED</h6>
                <h2 class="aheto-heading__title          t-bold "> A dynamic and forward-looking company with a strong focus on delivering innovative solutions and exceptional services</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-wrap-c-light">
  <div class="container">
    <!-- Section 1: About Us -->
    <div class="row">
      <div class="col-md-6 about-img margin-lg-55t" style="padding-bottom:50px">
        <div class="aheto-single-img h-100">
          <img src="/img/home-page/color/coal_mine.avif" class="h-100 w-100" alt="Mineral Field">
        </div>
      </div>
      <div class="col-md-6">
        <div class="row margin-lg-120t margin-lg-50b margin-md-60t margin-sm-0t padding-sm-45t margin-sm-25b">
          <div class="col-md-12 col-lg-11 offset-lg-1">
            <div class="aheto-heading aheto-heading--classic aheto-heading--b-c2">
              <h6 class="aheto-heading__subtitle t-uppercase t-bold">About Us</h6>
              <h3 class="aheto-heading__desc">
                AYUDIDIBE MEGA VENTURE (NIG.) LIMITED is a trusted name in Africa’s mineral sector. With roots deep in Nigeria’s mineral-rich lands and a vision for global excellence, our company delivers premium solid minerals through world-class processing and transparent procurement.
              </h3>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Section 2: Innovation & Quality -->
    <div class="row">
      <div class="col-md-6">
        <div class="row margin-lg-50t margin-lg-50b margin-md-60t margin-sm-0t padding-sm-45t">
          <div class="col-md-12 col-lg-11 offset-lg-1">
            <div class="aheto-heading aheto-heading--classic aheto-heading--b-c2">
              <h6 class="aheto-heading__subtitle t-uppercase t-bold">Innovation & Quality</h6>
              <h3 class="aheto-heading__desc">
                To overcome challenges like inconsistency and low-grade exports, we’re investing in advanced mineral processing facilities that meet international benchmarks. This ensures buyers receive the exact specifications they demand—nothing less.
              </h3>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 about-img" style="padding-bottom:50px">
        <div class="aheto-single-img h-100">
          <img src="/img/home-page/color/mining-equipment-list.png" class="h-100 w-100" alt="Processing Plant">
        </div>
      </div>
    </div>

    <!-- Section 3: Our Commitment -->
    <div class="row">
      <div class="col-md-6 about-img" style="padding-bottom:50px">
        <div class="aheto-single-img h-100">
          <img src="/img/home-page/color/mining-logistics-solutions-scaled.jpg" class="h-100 w-100" alt="Shipping and Export">
        </div>
      </div>
      <div class="col-md-6">
        <div class="row margin-lg-50t margin-lg-50b margin-md-60t margin-sm-0t padding-sm-45t">
          <div class="col-md-12 col-lg-11 offset-lg-1">
            <div class="aheto-heading aheto-heading--classic aheto-heading--b-c2">
              <h6 class="aheto-heading__subtitle t-uppercase t-bold">Our Commitment</h6>
              <h3 class="aheto-heading__desc">
                We’re committed to removing uncertainty from mineral sourcing in Africa. With full regulatory compliance, stringent quality assurance, and transparent documentation, we make importing minerals reliable and stress-free.
              </h3>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Section 4: Why Choose Us -->
    <div class="row">
      <div class="col-md-6">
        <div class="row margin-lg-50t margin-lg-50b margin-md-60t margin-sm-0t padding-sm-45t">
          <div class="col-md-12 col-lg-11 offset-lg-1">
            <div class="aheto-heading aheto-heading--classic aheto-heading--b-c2">
              <h6 class="aheto-heading__subtitle t-uppercase t-bold">Why Choose Us</h6>
              <h3 class="aheto-heading__desc">
                With AYUDIDIBE MEGA VENTURE (NIG.) LIMITED, you’re not just buying minerals—you’re building a long-term partnership. Our capabilities include:
              </h3>
              <ul style="list-style-type:disc;margin-left: 20px;font-size: 24px;">
                <li>Modern processing facilities ensuring top-grade outputs</li>
                <li>Timely and efficient logistics operations</li>
                <li>Customized supply strategies tailored to your needs</li>
                <li>Global delivery with local expertise</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 about-img" style="padding-bottom:50px">
        <div class="aheto-single-img h-100">
          <img src="/img/home-page/color/5ff347f914e5321df1a6b13c_iStock-467635312.jpg" class="h-100 w-100" alt="Global Export Service">
        </div>
      </div>
    </div>

    <!-- Section 5: Join Us -->
    <div class="row">
      <div class="col-md-6 about-img" style="padding-bottom:50px">
        <div class="aheto-single-img h-100">
          <img src="/img/home-page/color/Endeavour-Mining.jpg" class="h-100 w-100" alt="Join Us">
        </div>
      </div>
      <div class="col-md-6">
        <div class="row margin-lg-50t margin-lg-50b margin-md-60t margin-sm-0t padding-sm-45t">
          <div class="col-md-12 col-lg-11 offset-lg-1">
            <div class="aheto-heading aheto-heading--classic aheto-heading--b-c2">
              <h6 class="aheto-heading__subtitle t-uppercase t-bold">Join Us</h6>
              <h3 class="aheto-heading__desc">
                We invite international buyers to partner with AYUDIDIBE MEGA VENTURE (NIG.) LIMITED and tap into Africa’s abundant mineral resources—safely, reliably, and profitably. Let us be your trusted guide in navigating Nigeria’s mineral potential.
              </h3>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

  <div class="large-container-wrap" style="display: none;">
    <div class="row margin-lg-110t margin-md-70t margin-sm-45t">
      <div class="col-md-12">
        <div class="aheto-heading t-center aheto-heading--classic aheto-heading--b-c2">
          <h6 class="aheto-heading__subtitle t-uppercase t-bold">Testimonials</h6>
          <h2 class="aheto-heading__title          t-bold ">We’ve proud trusted clients.</h2>
        </div>
      </div>
    </div>
    <div class="row margin-lg-40t margin-lg-85b margin-md-45b margin-sm-0t margin-sm-20b">
      <div class="col-md-12">
        <div class="swiper swiper--business ">
          <div class="swiper-container " data-speed="500" data-spaceBetween="50" data-slidesPerView="responsive" data-add-slides="5" data-lg-slides="4" data-md-slides="3" data-sm-slides="2" data-xs-slides="1">
            <div class="swiper-wrapper ">
              <div class="swiper-slide ">
                <div class="tm tm--business">
                  <div class="tm__author">
                    <div class="tm__avatar"><img src="/img/home/testimonials-1.png" alt="testimonila" class="js-bg"></div>
                    <div class="tm__info">
                      <h6 class="tm__name">Tim Baland</h6>
                      <p class="tm__position">Finance</p>
                    </div>
                  </div>
                  <div class="tm__content">
                    <p class="tm__text">Been using the theme for 4-5 years or more, shouldve given a review earlier. Im not a web design pro but I know the basics. Whenever I run into a little trouble TrueThemes is always super quick and helpful.</p>
                    <div class="tm__stars">
                      <i class="ion ion-ios-star"></i><i class="ion ion-ios-star"></i><i class="ion ion-ios-star"></i><i class="ion ion-ios-star"></i><i class="ion ion-ios-star"></i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide ">
                <div class="tm tm--business">
                  <div class="tm__author">
                    <div class="tm__avatar"><img src="/img/home/testimonials-2.png" alt="testimonila" class="js-bg"></div>
                    <div class="tm__info">
                      <h6 class="tm__name">Elisa Austen</h6>
                      <p class="tm__position">Quicky</p>
                    </div>
                  </div>
                  <div class="tm__content">
                    <p class="tm__text">Great Customer Support. Even though they claim you need to pay for a service contract these guys will still go the extra mile to help you out even if you dont subscribe to this new policy.</p>
                    <div class="tm__stars">
                      <i class="ion ion-ios-star"></i><i class="ion ion-ios-star"></i><i class="ion ion-ios-star"></i><i class="ion ion-ios-star"></i><i class="ion ion-ios-star"></i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide ">
                <div class="tm tm--business">
                  <div class="tm__author">
                    <div class="tm__avatar"><img src="/img/home/testimonials-3.png" alt="testimonila" class="js-bg"></div>
                    <div class="tm__info">
                      <h6 class="tm__name">Kylie Leaner</h6>
                      <p class="tm__position">Bridge Co.</p>
                    </div>
                  </div>
                  <div class="tm__content">
                    <p class="tm__text">Simple and elegant with a host of options. Easy to set up and provides a beautiful professional looking end product.</p>
                    <div class="tm__stars">
                      <i class="ion ion-ios-star"></i><i class="ion ion-ios-star"></i><i class="ion ion-ios-star"></i><i class="ion ion-ios-star"></i>
                      <i class="ion ion-ios-star-outline"></i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide ">
                <div class="tm tm--business">
                  <div class="tm__author">
                    <div class="tm__avatar"><img src="/img/home/testimonials-1.png" alt="testimonila" class="js-bg"></div>
                    <div class="tm__info">
                      <h6 class="tm__name">Tim Baland</h6>
                      <p class="tm__position">Apple</p>
                    </div>
                  </div>
                  <div class="tm__content">
                    <p class="tm__text">I couldnt thank enough these guys for helping me with all my questions, I might have given them lots of emails, but they always replied on time. Special thanks goes to Mariia!</p>
                    <div class="tm__stars">
                      <i class="ion ion-ios-star"></i><i class="ion ion-ios-star"></i><i class="ion ion-ios-star"></i><i class="ion ion-ios-star"></i><i class="ion ion-ios-star"></i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide ">
                <div class="tm tm--business">
                  <div class="tm__author">
                    <div class="tm__avatar"><img src="/img/home/testimonials-2.png" alt="testimonila" class="js-bg"></div>
                    <div class="tm__info">
                      <h6 class="tm__name">Elisa Austen</h6>
                      <p class="tm__position">Quicky</p>
                    </div>
                  </div>
                  <div class="tm__content">
                    <p class="tm__text">Top Design and the best support I have ever experienced!</p>
                    <div class="tm__stars">
                      <i class="ion ion-ios-star"></i><i class="ion ion-ios-star"></i><i class="ion ion-ios-star"></i><i class="ion ion-ios-star"></i><i class="ion ion-ios-star"></i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide ">
                <div class="tm tm--business">
                  <div class="tm__author">
                    <div class="tm__avatar"><img src="/img/home/testimonials-3.png" alt="testimonila" class="js-bg"></div>
                    <div class="tm__info">
                      <h6 class="tm__name">Kylie Leaner</h6>
                      <p class="tm__position">Bridge Co.</p>
                    </div>
                  </div>
                  <div class="tm__content">
                    <p class="tm__text">Great Customer Support. Even though they claim you need to pay for a service contract these guys will still go the extra mile to help you out even if you dont subscribe to this new policy.</p>
                    <div class="tm__stars">
                      <i class="ion ion-ios-star"></i><i class="ion ion-ios-star"></i><i class="ion ion-ios-star"></i><i class="ion ion-ios-star"></i>
                      <i class="ion ion-ios-star-half"></i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide ">
                <div class="tm tm--business">
                  <div class="tm__author">
                    <div class="tm__avatar"><img src="/img/home/testimonials-2.png" alt="testimonila" class="js-bg"></div>
                    <div class="tm__info">
                      <h6 class="tm__name">Elisa Austen</h6>
                      <p class="tm__position">Quicky</p>
                    </div>
                  </div>
                  <div class="tm__content">
                    <p class="tm__text">Top Design and the best support I have ever experienced!</p>
                    <div class="tm__stars">
                      <i class="ion ion-ios-star"></i><i class="ion ion-ios-star"></i><i class="ion ion-ios-star"></i><i class="ion ion-ios-star"></i><i class="ion ion-ios-star"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-pagination "></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-wrap aheto-banner--height-520-" style="border-bottom:1px solid grey;">
    <div class="container d-flex h-100 justify-content-center align-items-center">
      <div class="row">
        <div class="col-md-6 padding-lg-80t padding-md-50t">
          <div class="aht-cta aht-cta--business t-left">
            <div class="aht-cta__text">
              <h6 class="aht-cta__sub-title ">Technology partners</h6>
              <h2 class="aht-cta__title">We work in partnership with all the major technology suppliers.</h2>
            </div>
            
          </div>
        </div>
        <div class="col-md-6 padding-lg-35t padding-md-0t">
          <div class="aht-clients aht-clients--5 aht-clients--bsns">
            <ul class="aht-clients__list">
              <?php foreach ($data['partners'] as $key => $value) {?>
                  <li class="aht-clients__item">
                    <a class="aht-clients__link" href="#" style="opacity: 1;">
                      <img class="aht-clients__img" src="<?php echo $value['img']?>" alt="Clients Image">
                    </a>
                    <div style="margin-top:12px">
                      <?php echo $value['name']?>
                    </div>
                  </li>
              <?php }?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row margin-lg-120t margin-lg-100b margin-md-75t margin-md-20b margin-sm-10b margin-sm-45t">
      <div class="col-md-4 col-lg-3">
        <div class="row">
          <div class="col-md-12">
            <div class="aheto-heading  aheto-heading--classic aheto-heading--b-c2">
              <h6 class="aheto-heading__subtitle t-uppercase t-bold">Facts</h6>
              <h2 class="aheto-heading__title          t-bold ">Why you work with us ?</h2>
            </div>
          </div>
        </div>
        <div class="row margin-lg-45t margin-sm-30t">
          <div class="col-md-12">
            <div class="aheto-btn-container  ">
              <a href="/?nav=contact" style="" class="aheto-btn  aheto-btn--alter    aheto-btn--shadow  ">
                CONTACT US
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-7 col-lg-8 offset-lg-1 padding-sm-45t">
        <div class="row">
          <div class="col-md-12">
            <div class="aheto-heading aheto-heading--classic aheto-heading--b-c2">
              <h3 class="aheto-heading__title t-bold">The company has an approximate turnover more than <span>₦3.5 Billion</span> Naira since 2011</h3>
              <p class="aheto-heading__desc">Has acquired assets worth over <span>₦5 Billion</span> Naira (today's value) in Nigeria and has a fixed working capital of over <span>₦850 Million</span> Naira</p>
              <p class="aheto-heading__desc">
                It has also established branch offices in some major state capitals including Adamawa, Abuja and Jos. And have successuly delivered values to the following organizations.
              </p>
            </div>
          </div>
          <div class="col-md-12">
            <div class="aht-clients aht-clients--5 aht-clients--bsns">
              <ul class="aht-clients__list">
                <?php foreach ($data['clients'] as $key => $value) {?>
                  <li class="aht-clients__item" style="min-height: 200px;">
                    <a class="aht-clients__link" href="#" style="opacity: 1;">
                      <img class="aht-clients__img" src="<?php echo $value['img']?>" alt="Clients Image">
                    </a>
                    <div style="margin-top:12px">
                      <?php echo $value['name']?>
                    </div>
                  </li>
                <?php }?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-wrap-c-light" style="display: none;">
    <div class="container ">
      <div class="row padding-lg-110t margin-lg-70b padding-md-70t margin-md-60b padding-sm-45t margin-sm-40b">
        <div class="col-md-12">
          <div class="aheto-heading t-center aheto-heading--classic aheto-heading--b-c2">
            <h6 class="aheto-heading__subtitle t-uppercase t-bold">Latest posts</h6>
            <h2 class="aheto-heading__title          t-bold ">Latest news about justice.</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4 margin-md-50b">
          <div class="aheto-services aheto-services--busns-event">
            <div class="aheto-services__image">
              <img src="/img/home-page/event-1.png" alt="" class="js-bg">
            </div>
            <div class="aheto-services__content">
              <div class="aheto-services__time">NOV 26</div>
              <span class="aheto-services__label ">Events</span>
              <div class="aheto-services__caption">
                <h5 class="aheto-services__title t-bold">Technology &amp; Innovation Expo, Europe 2017</h5>
              </div>
              <a href="#" class="aheto-services__link ">+ Read more
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 margin-md-50b">
          <div class="aheto-services aheto-services--busns-event">
            <div class="aheto-services__image">
              <img src="/img/home-page/event-2.png" alt="" class="js-bg">
            </div>
            <div class="aheto-services__content">
              <div class="aheto-services__time">NOV 26</div>
              <span class="aheto-services__label ">Tips</span>
              <div class="aheto-services__caption">
                <h5 class="aheto-services__title t-bold">How to Run a Successful Business Meeting</h5>
              </div>
              <a href="#" class="aheto-services__link ">+ Read more
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 margin-md-50b">
          <div class="aheto-services aheto-services--busns-event">
            <div class="aheto-services__image">
              <img src="/img/home-page/event-3.png" alt="" class="js-bg">
            </div>
            <div class="aheto-services__content">
              <div class="aheto-services__time">NOV 26</div>
              <span class="aheto-services__label ">Events</span>
              <div class="aheto-services__caption">
                <h5 class="aheto-services__title t-bold">Co-Opetition Tips in the Banking Industry</h5>
              </div>
              <a href="#" class="aheto-services__link ">+ Read more
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="row margin-lg-90t padding-lg-90b margin-md-25t padding-md-80b margin-sm-0t padding-sm-50b">
        <div class="col-md-7">
          <div class="aheto-heading  aheto-heading--small">
            <h3 class="aheto-heading__title          t-bold ">Our newsletter.</h3>
            <p class="aheto-heading__desc   ">No spam, we promise</p>
          </div>
        </div>
        <div class="col-md-5 padding-sm-30t">
          <div class="aheto-form-email aheto-form-email--business">
            <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-72" method="post" data-id="72" data-name="Email">
              <div class="mc4wp-form-fields">
                <input type="email" name="EMAIL" placeholder="Your Email" required="">
                <input type="submit" value="SEND →">
              </div>
              <label style="display: none !important;">Leave this field empty if you're human:
                <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off">
              </label>
              <input type="hidden" name="_mc4wp_timestamp" value="1521534226">
              <input type="hidden" name="_mc4wp_form_id" value="72">
              <input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1">
              <div class="mc4wp-response"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="bg-wrap-c-light">
    <div class="container padding-lg-95t padding-lg-85b padding-md-75t padding-md-70b padding-sm-45t padding-sm-10b">
      <div class="swiper swiper--vert-pag ">
        <div class="swiper-container " data-speed="1000" data-spaceBetween="100" data-slidesPerView="1" data-add-slides="1" data-lg-slides="1" data-md-slides="1" data-sm-slides="1" data-xs-slides="1">
          <div class="swiper-wrapper ">
            <div class="swiper-slide ">
              <div class="row" style="margin: 0px">
                <?php foreach ($data['contact'] as $key => $value) {?>
                  <div class="col-md-6 col-sm-12 margin-sm-30b no-padd">
                    <div class="aheto-contact aheto-contact--business ">
                      <h6 class="aheto-contact__title google-marker"><?php echo $value['state']?> <?php echo $value['city']?></h6>
                      <div class="aheto-contact__holder">
                        <i class="aheto-contact__icon icon ion-android-call"></i>
                        <a class="aheto-contact__link aheto-contact__link--tel" href="tel:<?php echo $value['phone']?>"><?php echo $value['phone']?></a>
                      </div>
                      <div class="aheto-contact__holder">
                        <i class="aheto-contact__icon icon ion-android-map"></i>
                        <p class="aheto-contact__info"><?php echo $value['address']?></p>
                      </div>
                      <div class="aheto-contact__holder">
                        <i class="aheto-contact__icon icon ion-android-mail"></i>
                        <a class="aheto-contact__link aheto-contact__link--email" href="mailto:<?php echo $value['email']?>"><?php echo $value['email']?></a>
                      </div>
                    </div>
                  </div>
                <?php }?>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination "></div>
      </div>
    </div>
  </div>
  </div>
  <?php require_once 'includes/foot.php'?>
</body>

</html>