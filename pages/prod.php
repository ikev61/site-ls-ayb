<!DOCTYPE html>
<html>

<head>
  <?php require_once 'includes/head.php'?>
</head>

<body data-anm=".anm" class="">
  <header class="aheto-header aheto-header-1">
    <?php require_once 'includes/navbar.php' ?>
  </header>
  <?php
    if(isset($_GET['pcode'],$products[$_GET['pcode']])) require_once 'pages/prod/tmpl.php';
    else require_once 'pages/prod/index.php';
  ?>
  <?php require_once 'includes/foot.php'?>
</body>

</html>