<?php 
  $prods = $products[$_GET['pcode']];
  $title = str_replace('Products: ', '', $title);
?>
<section class="bussines-banner">
  <div class="aheto-titlebar aheto-titlebar--height-400 aheto-titlebar--bussines">
    <div class="aheto-titlebar__main   bg-color">
      <img class="js-bg" alt="" src="<?php echo $prods['banner']?>">
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
      <div class="" style="padding:20px 20px 0 20px">
        <?php foreach ($prods['features'] as $key => $value) {?>
            <img class="aht-clients__img" src="<?php echo $value?>" style="height: 100px!important;">
        <?php }?>
      </div>
      <?php require_once $prods['markup'] ?>
    </div>
  </div>
</div>