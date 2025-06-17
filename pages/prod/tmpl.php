<?php 
  $prods = $products[$_GET['pcode']];
  $title = str_replace('Products: ', '', $title);
?>
<section class="bussines-banner">
  <div class="aheto-titlebar aheto-titlebar--height-400 aheto-titlebar--bussines">
    <div class="aheto-titlebar__main   bg-color">
      <img class="js-bg" alt="" src="<?php echo $prods['cover']?>">
      <div class="aheto-titlebar__overlay c-2 aheto-titlebar__overlay--9 "></div>
      <div class="aheto-titlebar__content w-1200">
        <div class="aheto-titlebar__text ">
          <p class="aheto-titlebar__subtitle t-white   t-bold t-center t-uppercase">Product</p>
          <h1 class="aheto-titlebar__title  t-white t-bold t-center  large-size"><?php echo $prods['title']?></h1>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="business-services-wrap">
  <div class="container">
    <div class="row margin-lg-10t margin-lg-105b margin-md-70t margin-md-60b margin-sm-40t margin-sm-45b">
      <div class="col-md-6 text-center" style="padding:5px 0">
        <img src="<?php echo $prods['cover']?>" alt="testimonila" style="width: 93%;margin: 0 auto;">
      </div>
      <div class="col-md-6 text-center">
        <div class="" style="padding:5px 20px">
          <?php foreach ($prods['features'] as $key => $value) {?>
              <img class="aht-clients__img" src="<?php echo $value?>" style="padding: 2px;">
          <?php }?>
        </div>
      </div>
      <?php require_once $prods['markup'] ?>
    </div>
  </div>
</div>