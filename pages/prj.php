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
            <p class="aheto-titlebar__subtitle t-white   t-bold t-center t-uppercase">completed and delivered</p>
            <h1 class="aheto-titlebar__title  t-white t-bold t-center  large-size">Projects</h1>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="container">

    <div class="row margin-lg-100t margin-lg-115b margin-md-75t  margin-md-20b margin-sm-50t margin-sm-0b" style="padding:0 20px">
      <div class='table-responsive'>
        <table class='aht-table margin-sm-20b '>
          <thead class='aht-table__head t-left'>
            <tr>
              <th class='aht-table__head-item l-spacing--2 t-bold'>Client </th>
              <th class='aht-table__head-item l-spacing--2'>Project</th>
              <th class='aht-table__head-item l-spacing--2'>Date</th>
              <th class='aht-table__head-item l-spacing--2'>Budget</th>
              <th class='aht-table__head-item l-spacing--2'>Status</th>
            </tr>
          </thead>
          <tbody class='aht-table__body'>
            <?php foreach ($data['project'] as $key => $value) {?>
              <tr class='aht-table__body-row'>
                <td class='aht-table__body-cell padding-sm-30r padding-lg-80r t-bold t-uppercase'><?php echo $value['client']?></td>
                <td class='aht-table__body-cell padding-sm-30r padding-lg-80r'><?php echo $value['title']?></td>
                <td class='aht-table__body-cell padding-sm-30r padding-lg-80r'><?php echo $value['date']?></td>
                <td class='aht-table__body-cell padding-sm-30r padding-lg-80r'><?php echo $value['budget']?></td>
                <td class='aht-table__body-cell padding-sm-30r padding-lg-80r'>Completed</td>
              </tr>
            <?php }?>
          </tbody>
        </table>
      </div>

    </div>
  </div>

  <?php require_once 'includes/foot.php'?>
</body>

</html>