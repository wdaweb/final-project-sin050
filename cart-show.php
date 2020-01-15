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

    <!-- 點購物車直接導到此頁面，自己獨立出來 用cart-insert去修改 -->

    <div class="container mx-auto" style="margin-top:150px;width:90%;">
        <?php
        echo '<h3 style="color:#008800">購物車內容 - 商品列表</h3>';
        echo '<hr>';
        include 'cart.php';
        ?>
    </div>

    <!-- end -->
    <?php include("footer.php") ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script></script>
</body>

</html>