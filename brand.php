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
  <title>U栽-品牌故事</title>
  <style>
    #footer {
      position: fixed;
      bottom: 0;
      width: 100%;
      left: 0;
      right: 0;
    }

    @media (max-width: 576px) {
      #map_b {
        margin-bottom: 200px;
      }

    }



    /* fixed-bottom {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1030;
} */

    /* 小抄 d-flex flex-column */
  </style>
</head>

<body>
  <?php include("menu.php") ?>
  <!-- 1. logo圖 -->
  <div class="container" style="margin-top:150px">
    <div class="row">
      <div class="col-12 px-4">
        <h2>About us</h2>
        <li class="media d-flex flex-column align-items-center flex-lg-row">
          <img src="images/logo.svg" class="mr-5" height="200px">
          <!-- style="width:450px;height:250px;object-fit:cover" -->
          <div class="media-body">
            <h3 class="my-4" style="color: #668800">[U栽的故事]</h3>
            <!-- <p style="color: darkgray">2019/9/30</p> -->
            <p>“U栽”意為“悠栽”，在現今繁忙的生活環境中，紓解生活上的壓力，已成為生活品質的一大課題。來點生活的小樂趣吧！以多肉植物為主題，將多肉植物的多變姿態及樣貌，融入大自然的寧靜平穩與充滿觸動人心的療癒。讓生活隨心所欲的悠然栽培，賦予生活片刻的樂活！“U栽”意為“悠栽”，在現今繁忙的生活環境中，紓解生活上的壓力，已成為生活品質的一大課題。來點生活的小樂趣吧！以多肉植物為主題，將多肉植物的多變姿態及樣貌，融入大自然的寧靜平穩與充滿觸動人心的療癒。讓生活隨心所欲的悠然栽培，賦予生活片刻的樂活！</p>
          </div>
        </li>
      </div>
    </div>
  </div>
  <hr class="my-4 my-lg-5" style="width:80%">
  <!-- 2.地圖 -->
  <div id="map_b" class="container">
    <!-- <div class="col-12 px-5 my-lg-5"> -->
    <div class="row">
      <div class="col-lg-5 px-4">
        <h2 class="mt-lg-5">Location</h2>
        <li class="media d-flex flex-lg-row flex-column">
          <div class="media-body mr-5 mb-3">
            地址 / 台北市大安區四維路 76 巷 19 號 1 樓<br>
            電話 / 02-2701-7257<br>
            營業時間 / 週日至週五 11:00 – 19:00 / 週六 11:00 – 20:00<br>
            信箱 / kertis@lovewhatwedo.com.tw
          </div>

        </li>
      </div>
      <div class="col-lg-7 px-4">
        <div class="embed-responsive embed-responsive-21by9">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14458.832083499772!2d121.419343!3d25.043981!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa639904a89f26435!2z5Yue5YuV6YOo5Yue5YuV5Yqb55m85bGV572y5YyX5Z-65a6c6Iqx6YeR6aas5YiG572y5rOw5bGx6IG35qWt6KiT57e05aC0!5e0!3m2!1szh-TW!2stw!4v1576564854924!5m2!1szh-TW!2stw" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
      </div>
    </div>

    <!-- </div> -->
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