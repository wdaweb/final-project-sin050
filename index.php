<?php
require_once('sql.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/fontawesome.css" />
  <!-- google font -->
  <link href="https://fonts.googleapis.com/css?family=Lilita+One|Mansalva|Noto+Sans+TC&display=swap" rel="stylesheet" />

  <link rel="shortcut icon" href="images/uplant.ico" />
  <title>U栽</title>
</head>

<body data-spy="scroll" data-target="#plant-navbar">
  <?php include("menu.php") ?>
  <!-- 輪播圖 -->
  <?php
  $re = select("q1t6_img", "dpy=1");
  $total = count($re);
  // print_r($re);
  ?>
  <section id="section01" class="" style="margin-top:75px">
    <div id="carouselExampleIndicators" class="carousel slide h-100" data-ride="carousel">
      <ol class="carousel-indicators">
        <?php
        for ($i = 0; $i < $total; $i++) { //if $total=4
          if ($i == 0) $active = ' class="active"';
          else $active = '';
          echo '<li data-target="#carouselExampleIndicators" data-slide-to="' . $i . '"' . $active . '></li>';
        }
        /*
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      */
        ?>

      </ol>
      <div class="carousel-inner">
        <?php
        for ($i = 0; $i < $total; $i++) {
          if ($i == 0) $active = ' active';
          else $active = '';
          echo '<div class="carousel-item' . $active . '"><img src="upload/' . $re[$i]['img'] . '"></div>';
        }
        /*
        <div class="carousel-item active"><img src="images/plant02.jpg"></div>
        <div class="carousel-item"><img src="images/plant02.jpg"></div>
        <div class="carousel-item"><img src="images/plant02.jpg"></div>
        <div class="carousel-item"><img src="images/plant02.jpg"></div>
      */
        ?>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>

  <!-- 三塊 -->
  <div class="container">
    <div class="row my-4">
      <?php
      $nowpage = (empty($_GET['page'])) ? 1 : $_GET['page'];
      $begin = ($nowpage - 1) * 3; // nowpage:begin=1:0, 2:4, 3:8
      $re = select("q1t7_img", "dpy=1 limit " . $begin . ",3"); //begin=0,
      // $re = select("q4t5_product", "dpy=1");
      foreach ($re as $ro) {
      ?>
        <div class="col-12 col-lg-4 mb-5 my-lg-4 px-4 px-lg-1" style="height:300px;">
          <img src="upload/<?= $ro['img'] ?>" class="w-100 h-100" style="object-fit:cover" />
          <h4 class="py-2 py-lg-4 text-center text-gray"><?= $ro['text'] ?></h4>
        </div>
      <?php
      }
      ?>
    </div>
  </div>

  <h2 class="text-center" style="padding-top:60px">最近熱門</h2>

  <!-- 最近熱門 -->
  <div class="container px-lg-4 px-5 mb-3">
    <div class="row flex-lg-nowrap justify-content-lg-center">
      <!-- 商品1 要有彈性盒才會有作用flex-grow-1-->
      <?php
      $nowpage = (empty($_GET['page'])) ? 1 : $_GET['page'];
      $begin = ($nowpage - 1) * 4; // nowpage:begin=1:0, 2:4, 3:8
      $re = select("q4t5_product", "dpy=1 limit " . $begin . ",4"); //begin=0,
      // $re = select("q4t5_product", "dpy=1");
      foreach ($re as $ro) {
      ?>
        <div class="card3 col-12 col-lg-3 mx-lg-2 my-3">
          <img src="upload/<?= $ro['img'] ?>" class="pt-3" style="height:300px;object-fit:cover">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title"><?= $ro['title'] ?></h5>
            <p class="card-text text-gray flex-grow-1"><?= $ro['text'] ?></p>
            <a href="detail.php?&id=<?= $ro['id'] ?>" class="btn btn-lightgreen align-self-start">想看看</a>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </div>

  <?php include("footer.php") ?>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script></script>
</body>

</html>