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
    <div class="aheto-titlebar aheto-titlebar--height-400">
      <div class="aheto-titlebar__main   ">
        <img class="js-bg" alt="" src="/img/team/bg-1.jpg">
        <div class="aheto-titlebar__content w-1200">
          <div class="aheto-titlebar__text ">
            <p class="aheto-titlebar__subtitle t-white   t-bold t-center t-uppercase">address</p>
            <h1 class="aheto-titlebar__title  t-white t-bold t-center  large-size">Contact Us</h1>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="container">
    <div class="row margin-lg-100t margin-lg-115b margin-md-75t  margin-md-20b margin-sm-50t margin-sm-0b" style="padding:0 20px">
      <?php foreach ($data['contact'] as $key => $value) {?>
        <div class="col-md-6 col-sm-12 margin-sm-30b no-padd">
          <div class="aheto-contact aheto-contact--business ">
            <h6 class="aheto-contact__title google-marker"><?php echo $value['state']?> - <?php echo $value['city']?></h6>
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
  <?php require_once 'includes/foot.php'?>
</body>

</html>