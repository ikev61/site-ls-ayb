
<section class="bussines-banner">
  <div class="aheto-titlebar aheto-titlebar--height-400 aheto-titlebar--bussines">
    <div class="aheto-titlebar__main   bg-color">
      <img class="js-bg" alt="" src="/img/products/bg.jpg">
      <div class="aheto-titlebar__overlay c-2 aheto-titlebar__overlay--9 "></div>
      <div class="aheto-titlebar__content w-1200">
        <div class="aheto-titlebar__text ">
          <p class="aheto-titlebar__subtitle t-white   t-bold t-center t-uppercase">Home</p>
          <h1 class="aheto-titlebar__title  t-white t-bold t-center  large-size">Products</h1>
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
              <h2 class="aheto-heading__title">Products</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row margin-lg-110t margin-lg-105b margin-md-70t margin-md-60b margin-sm-40t margin-sm-45b">
      <div class="col-md-12">
        <div class="row margin-lg-0t margin-sm-45t">
          <?php foreach ($products as $key => $value) {?>
            <div class="col-md-6" style="margin-bottom: 20px;"><a href="<?php echo $value['url']?>">
              <div class="aheto-content-block aheto-content-block---business" style="border-radius: 20px;overflow: hidden;border:1px solid lightgrey;background-image: url('<?php echo $value['cover']?>');background-size: 100%;background-repeat: no-repeat;">
                <div class="aheto-content-block__img">
                </div>
                <div class="aheto-content-block__descr transition--none" style="padding:10px;background: rgba(255, 255, 255, .6);">
                  <h4 class="aheto-content-block__title t-bold"><?php echo $value['title']?></h4>
                  <div class="aheto-content-block__info">
                    <p class="aheto-content-block__info-text "><?php echo $value['detail']?></p>
                  </div>
                </div>
              </div></a>
            </div>
          <?php }?>
        </div>
      </div>
    </div>
  </div>
</div>