<!-- 資料庫q4t5_product -->

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
  <title>U栽-商品介紹</title>
  <style>
    body {
      font-family: "Lilita One", cursive;
      font-family: "Mansalva", cursive;
      font-family: "Noto Sans TC", sans-serif;
    }
  </style>
</head>

<body>
  <?php include("menu.php") ?>


  <div class="container" style="margin-top:100px;margin-bottom:50px;">

    <div class="row">
      <!-- 商品1 -->
      <?php
      $nowpage = (empty($_GET['page'])) ? 1 : $_GET['page'];
      $begin = ($nowpage - 1) * 8; // nowpage:begin=1:0, 2:4, 3:8
      $re = select("q4t5_product", "dpy=1 limit " . $begin . ",8"); //begin=0,
      // $re = select("q4t5_product", "dpy=1");
      foreach ($re as $ro) {
      ?>
        <div class="card2 col-6 col-lg-3 h-100">
          <a href="detail.php?&id=<?= $ro['id'] ?>"><img src="upload/<?= $ro['img'] ?>" class="card-img-top border_pic" style="height:250px;object-fit: cover"></a>

          <div class="card-body">
            <h5 class="card-title"><?= $ro['title'] ?></h5>
            <p class="card-text text-gray flex-grow-1"><?= $ro['text'] ?></p>

            <h5 style="color: brown">NT$<?= $ro['price'] ?> </h5>

          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </div>
  <!-- 分頁圖示 -->
  <nav id="pagination" class="d-flex justify-content-center">
    <ul class="pagination">
      <?php
      $result = navpage("q4t5_product", "dpy=1", 8, $nowpage);
      foreach ($result as $key => $value) {
        if ($key == "<") echo '
          <li class="page-item">
            <a class="page-link" href="?page=' . $value . '" aria-label="Previous" style="color: #668800">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
        ';
        else if ($key == ">") echo '
        <li class="page-item">
          <a class="page-link" href="?page=' . $value . '" aria-label="Next" style="color: #668800">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
        ';
        else echo '
        <li class="page-item">
          <a class="page-link" style="color: #668800" href="?page=' . $value . '">' . $key . '</a>
        </li>
        ';
      }
      ?>
    </ul>
  </nav>
  <?php include("footer.php") ?>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script>
    if ($('.container').eq(1).height() <= 500) {
      $('#footer').css({
        // 'margin-top': '280px'
        'position': 'fixed',
        'bottom': '0',
        'width': '100%'
      });
      $('#pagination').css({
        'position': 'absolute',
        'bottom': '100px',
        'width': '100%'
      });
    }
  </script>
</body>

</html>