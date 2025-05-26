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

  <div class="container">
    <div class="row margin-lg-115t margin-md-75t margin-sm-45t">
      <div class="col-md-12">
        <div class="aheto-heading t-center aheto-heading--classic aheto-heading--b-c2">
          <h2 class="aheto-heading__title          t-bold ">Get In Touch</h2>
          <p class="aheto-heading__desc   ">Created from either wood or recycled materials, it can be moulded into just about </p>
        </div>
      </div>
    </div>
    <div class="row margin-lg-50t margin-lg-115b margin-md-40t margin-md-75b margin-sm-20t margin-sm-50b">
      <div class="col-md-12">
        <div class="aheto-form aheto-form--default aheto-form--business">
          <form class="wpcf7-form">
            <p>
              <span class="wpcf7-form-control-wrap Name">
                <input type="text" name="Name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Gunsury">
              </span>
              <span class="wpcf7-form-control-wrap Email">
                <input type="email" name="Email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email" aria-invalid="false" placeholder="Email">
              </span>
              <span class="wpcf7-form-control-wrap Phone">
                <input type="tel" name="Phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel" aria-invalid="false" placeholder="Phone">
              </span>
              <span class="wpcf7-form-control-wrap Budget">
                <select id="test13" name="Budget" class="wpcf7-form-control wpcf7-select" aria-invalid="false">
                  <option value="Budget">Budget</option>
                  <option value="$10">$10</option>
                  <option value="$100">$100</option>
                  <option value="$1 000">$1 000</option>
                </select>
              </span>
            </p>
            <p>
            </p>
            <p>
              <span class="wpcf7-form-control-wrap Message">
                <textarea name="Message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Message"></textarea>
              </span>
            </p>
            <p class="form-bth-holder">
              <input type="submit" value="SEND MESSAGE" class="wpcf7-form-control wpcf7-submit ">
            </p>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php require_once 'includes/foot.php'?>
</body>

</html>