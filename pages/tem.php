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
            <p class="aheto-titlebar__subtitle t-white   t-bold t-center t-uppercase">Our Team</p>
            <h1 class="aheto-titlebar__title  t-white t-bold t-center  large-size">Meet Our Team</h1>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="container">
    <div class="row margin-lg-115t margin-lg-55b margin-md-70t margin-md-50b margin-sm-40t margin-sm-30b">
      <div class="col-md-8 offset-md-2">
        <div class="aheto-heading t-center aheto-heading--classic aheto-heading--b-c2">
          <h6 class="aheto-heading__subtitle t-uppercase t-bold">Team</h6>
          <h2 class="aheto-heading__title t-bold ">GET TO KNOW OUR AMAZING PEOPLE</h2>
        </div>
      </div>
    </div>
    <div class="row margin-lg-20t margin-lg-50b margin-sm-20b">
      <?php foreach ($data['team'] as $key => $value) {?>
        <div class="col-md-6 margin-lg-70b margin-md-30b" id="<?php echo strtolower(preg_replace("%\s+%", '', $value['name']))?>">
          <div class="aheto-member aheto-member--business" style="border-:1px solid grey">
            <div class="aheto-member__img-holder" style="background:#fff">
              <img class="aheto-member__img" style="border:1px solid #e8e8e8" src="/img/no-img.png" alt="Team member">
            </div>
            <div class="aheto-member__text">
              <h5 class="aheto-member__name"><?php echo $value['name']?></h5>
              <p class="aheto-member__position "><?php echo $value['role']?></p>
              <p class="aheto-member__desc"><?php echo $value['detail']?></p>
              <div class="aheto-member__contact">
                <a class="aheto-member__link aheto-btn--grey aheto-btn--trans t-center" href="#">
                  <i class="aheto-member__icon icon ion-social-facebook"></i>
                </a>
                <a class="aheto-member__link aheto-btn--grey aheto-btn--trans t-center" href="#">
                  <i class="aheto-member__icon icon ion-social-twitter"></i>
                </a>
                <a class="aheto-member__link aheto-btn--grey aheto-btn--trans t-center" href="#">
                  <i class="aheto-member__icon icon ion-social-linkedin"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      <?php }?>
    </div>
  </div>
  <?php require_once 'includes/foot.php'?>
</body>

</html>