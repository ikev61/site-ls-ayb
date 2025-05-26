<!DOCTYPE html>
<html>

<head>
  <?php require_once 'includes/head.php'?>
</head>

<body data-anm=".anm" class="">
  <header class="aheto-header aheto-header-1">
    <?php require_once 'includes/navbar.php' ?>
  </header>
  <section class="bussines-banner">
    <div class="aheto-titlebar aheto-titlebar--height-400 aheto-titlebar--bussines">
      <div class="aheto-titlebar__main   bg-color">
        <img class="js-bg" alt="" src="/img/about-us/bg-1.jpg">
        <div class="aheto-titlebar__overlay c-2 aheto-titlebar__overlay--9 "></div>
        <div class="aheto-titlebar__content w-1200">
          <div class="aheto-titlebar__text ">
            <p class="aheto-titlebar__subtitle t-white   t-bold t-center t-uppercase">we are Ayudidibe</p>
            <h1 class="aheto-titlebar__title  t-white t-bold t-center  large-size">Welcome To Our Company</h1>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="container">
    <div class="row margin-xl-120t margin-xl-120b margin-lg-50t margin-lg-50b margin-md-10t margin-md-80b margin-sm-50b">
      <div class="col-xl-5 col-lg-12 col-md-12">
        <div class="row margin-xl-60t margin-lg-10t margin-md-80t margin-sm-50t">
          <div class="col-md-12">
            <div class="aheto-heading  aheto-heading--classic aheto-heading--b-c2">
              <h6 class="aheto-heading__subtitle t-uppercase t-bold">Our vission</h6>
              <h6 class="aheto-heading__title          t-bold ">To be a premier service provider.</h6>
              <p class="aheto-heading__desc   ">Delivering excellence and efficiency through our unwavering commitment to prompt and top-notch services. We leverage the latest technology and cutting-edge methodologies to establish ourselves as leaders in engineering, construction, procurement, mining operations, exploration services, quarry operations, ICT/networking & engineering, purchase & supply, export & import, and manpower services. Our aspiration is to gain widespread recognition, both within Nigeria and globally, as a trusted and versatile provider of comprehensive solutions.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-lg-12 col-md-12 offset-xl-1 margin-lg-50t margin-sm-30t">
        <div class="aht-bq-img">
          <div class="aht-bq-img__l">
            <img class="js-bg" src="/img/about-us/image-1.png" alt="Image">
          </div>
          <div class="aht-bq-img__right">
            <div class="aht-bq-img__bq">
              <h5 class="aht-bq-img__bq-text">We leverage the latest technology and cutting-edge methodologies</h5>
            </div>
            <div class="aht-bq-img__bqg">
              <img class="js-bg" src="/img/about-us/image-2.png" alt="Image">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="bg-wrap-c-light">
    <div class="container">
      <div class="row padding-lg-80t padding-lg-120b padding-md-70t padding-md-80b padding-sm-40t padding-sm-50b">
        <div class="col-md-10 offset-md-1 construction-careersWrap">
          <div class="row">
            <div class="col-md-12">
              <div class="aheto-heading  ">
                <h2 class="aheto-heading__title t-uppercase t-semibold ">What had kept us going</h2>
              </div>
            </div>
          </div>
          <div class="row margin-lg-40t margin-md-10t">
            <div class="col-md-12">
              <div class="aheto-accordion">
                <?php foreach ($data['words'] as $key => $value) {?>
                <div class="aheto-accordion__item">
                  <h5 class="aheto-accordion__title js-accordion"><?php echo $value['title']?>
                    <div class="aheto-accordion__plus"></div>
                  </h5>
                  <div class="aheto-accordion__panel">
                    <div class="aheto-accordion__descWrap">
                      <p class="aheto-accordion__desc"><?php echo $value['detail']?></p>
                    </div>
                  </div>
                </div>
                <?php }?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row margin-lg-40t margin-md-40t">
      <div class="col-md-10 offset-md-1" style="background--color: #e8e8e8;">
        <div class="row margin-lg-40t margin-lg-10b margin-md-10t margin-md-50b margin-sm-40t margin-sm-30b">
          <h6 class="aheto-heading__subtitle t-uppercase t-bold">Our objectives</h6>
        </div>
        <div class="aheto-pricing aheto-pricing--home-event" style="box-shadow: none;">
          <ul class="">
            <?php foreach ($data['objectives'] as $key => $value) {?>
              <li class='aheto-pricing__detail' style="text-align:justify;padding:0 10px !important"><p><?php echo $value?></p></li>
            <?php }?>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-wrap-c-light padding-lg-120b padding-lg-50t">
    <div class="container">
      <div class="col-md-10 offset-md-1">
        <div class="row- margin-lg-40t margin-lg-80b margin-md-10t margin-md-50b margin-sm-40t margin-sm-30b">
          <h6 class="aheto-heading__subtitle t-uppercase t-bold">organization structure</h6>
        </div>
        <div class="aht-bq-img__bqg">
          <img class="js-bg-" src="/img/org-chart.png" alt="Image" style="width:100%">
        </div>
      </div>
    </div>
  </div>
  
  <?php require_once 'includes/foot.php'?>
</body>

</html>