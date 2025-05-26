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
        <img class="js-bg" alt="" src="/img/services/bg-1.jpg">
        <div class="aheto-titlebar__overlay c-2 aheto-titlebar__overlay--9 "></div>
        <div class="aheto-titlebar__content w-1200">
          <div class="aheto-titlebar__text ">
            <p class="aheto-titlebar__subtitle t-white   t-bold t-center t-uppercase">Who are we</p>
            <h1 class="aheto-titlebar__title  t-white t-bold t-center  large-size">Our Services</h1>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="business-services-wrap">
    <div class="container">
      <div class="row margin-lg-110t margin-lg-105b margin-md-70t margin-md-60b margin-sm-40t margin-sm-45b">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-12">
              <div class="aheto-heading  aheto-heading--classic aheto-heading--b-c2">
                <h6 class="aheto-heading__subtitle t-uppercase t-bold">Main services</h6>
                <h2 class="aheto-heading__title">Our core business
activities encompass a diverse range of products and services, catering to various
sectors and meeting the unique needs of our clients.</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row margin-lg-110t margin-lg-105b margin-md-70t margin-md-60b margin-sm-40t margin-sm-45b">
        <div class="col-md-12">
          <div class="row margin-lg-0t margin-sm-45t">
            <?php foreach ($data['services'] as $key => $value) {?>
              <div class="col-md-6" style="margin-bottom: 20px;">
                <div class="aheto-content-block aheto-content-block---business" style="border:1px solid grey;">
                  <div class="aheto-content-block__img">
                    <img class="js-bg" src="<?php echo $value['img']?>" alt="Image">
                  </div>
                  <div class="aheto-content-block__descr transition--none" style="padding:10px">
                    <h4 class="aheto-content-block__title t-bold"><?php echo $value['title']?></h4>
                    <div class="aheto-content-block__info">
                      <p class="aheto-content-block__info-text "><?php echo $value['detail']?></p>
                    </div>
                  </div>
                </div>
              </div>
            <?php }?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php require_once 'includes/foot.php'?>
</body>

</html>