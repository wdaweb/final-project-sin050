<?php
require_once('sql.php');
// print_r($_REQUEST); //$_REQUEST 可以 通用於 $_GET 跟 $_POST，有些懶人會用這個變數一起檢查
// 本頁商品細節都在$re[0]位置
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
  <title>U栽-購物清單</title>
  <style>
    body {
      font-family: "Lilita One", cursive;
      font-family: "Mansalva", cursive;
      font-family: "Noto Sans TC", sans-serif;
    }

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
  </style>
</head>

<body>
  <?php include("menu.php"); ?>
  <div class="container mx-auto" style="margin-top:150px;;width:90%;">

    <!-- <div class="container" style="margin-top:100px;margin-bottom:50px;"> -->
    <?php
    $id = $_REQUEST['id'];
    if (!isset($_SESSION['q4t5_product'])) {
      $_SESSION['q4t5_product'] = [];
    }
    $count = 0;
    if (isset($_SESSION['q4t5_product'][$id])) {
      $count = $_SESSION['q4t5_product'][$id]['count'];
    }
    $_SESSION['q4t5_product'][$id] = [
      'title' => $_REQUEST['title'],
      'price' => $_REQUEST['price'],
      'count' => $count + $_REQUEST['count']
    ];
    echo '<h3 style="color:#C63300">商品放入購物車成功。</h3>';
    echo '<hr>';
    require 'cart.php';
    ?>
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