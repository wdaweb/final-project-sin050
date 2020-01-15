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
  <title>U栽-注目新文</title>
  <style>

  </style>
</head>

<body>
  <?php include("menu.php") ?>
  <div class="container" style="margin-top: 100px;">
    <!-- 媒體物件列表 -->
    <?php
    $nowpage = (empty($_GET['page'])) ? 1 : $_GET['page'];
    $begin = ($nowpage - 1) * 3; // nowpage:begin=1:0, 2:4, 3:8
    $re = select("q4t3_news", "dpy=1 limit " . $begin . ",3"); //begin=0,
    // $re = select("q4t5_product", "dpy=1");
    foreach ($re as $ro) {
    ?>
      <ul class="list-unstyled my-4">
        <li class="media d-flex flex-column flex-lg-row px-3">
          <img src="upload/<?= $ro['img'] ?>" class="mr-4" style="width:420px;height:250px;object-fit:cover">
          <div class="media-body px-3">
            <h3 class="my-2" style="color: #668800"><?= $ro['title'] ?></h3>
            <p style="color: darkgray"><?= $ro['date'] ?></p>
            <p><?= $ro['p'] ?></p>
            <a href="<?= $ro['more'] ?>" target="_blank" class="btn btn-lightgreen btn-sm">more</a>
          </div>
        </li>

      <?php
    }
      ?>
      <!-- <hr class="my-4"> -->

      </ul>
  </div>

  <!-- 分頁圖示 -->
  <nav id="pagination" class="d-flex justify-content-center">
    <ul class="pagination">
      <?php
      $result = navpage("q4t3_news", "dpy=1", 3, $nowpage);
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
    if ($('.container').eq(1).height() <= 600) {
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