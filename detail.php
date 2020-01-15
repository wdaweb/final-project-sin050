<?php
require_once('sql.php');

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
  <title>U栽</title>
  <style>
    body {
      font-family: "Lilita One", cursive;
      font-family: "Mansalva", cursive;
      font-family: "Noto Sans TC", sans-serif;
    }
  </style>
</head>

<body>
  <?php include("menu.php"); ?>
  <div class="container" style="margin-top:100px;margin-bottom:50px;">
    <form action="cart-insert.php" method="get">
      <div class="media d-flex flex-column flex-lg-row align-items-center col-lg-12 mx-lg-5">
        <?php
        $sql = $db->query('select * from q4t5_product where id=' . $_REQUEST['id']);
        // $sql = $db->prepare('select * from q4t5_product where id=?');
        // $sql->execute([$_REQUEST['id']]);
        foreach ($sql->fetchAll() as $row) { ?>
          <img src="upload/<?= $row['img'] ?>" class="mx-4 mt-4 ml-lg-5" alt="<?= $row['title'] ?>" style="width:350px;object-fit: cover">
          <div class="media-body">
            <div style="width: 350px">
              <h5 class="mt-3"><?= $row['title'] ?></h5>
              <h5 class="my-3" style="color: brown">NT$<?= $row['price'] ?></h5>
              <p class="text-gray"><?= $row['spec'] ?></p>
              <p class="text-gray"><?= $row['text'] ?></p>

              <div class="input-group btn-sm p-0">

                <h5 class="pr-2 pt-2">購買數量</h5>
                <select name="count"> <?php
                                      for ($i = 1; $i <= 10; $i++) {
                                        echo '<option value="', $i, '">', $i, '</option>';
                                      } ?>
                </select>
              </div>
              <input type="hidden" name="id" value="<?= $row['id'] ?>">
              <input type="hidden" name="title" value="<?= $row['title'] ?>">
              <input type="hidden" name="price" value="<?= $row['price'] ?>">


              <div class="input-group btn-sm mt-4 p-0">
                <div class="input-group-append mr-2">
                  <input type="submit" class="input-group-text" value="放入購物車" style="cursor:pointer">


                </div>
                <!-- <input type="image" src="img/0402.jpg" alt="submit"> -->
                <div class="input-group-append">
                  <label class="input-group-text" for="inputGroupSelect02" onclick="window.history.back()" style="cursor:pointer">返回</label>

                </div>
              </div>
            </div>
          </div>
      </div>
    </form>

  <?php
        }
  ?>

  <!-- 下方的文字bar -->
  <section id="section06">
    <div class="col-lg-12 mx-lg-4 my-5 p-0">
      <nav>
        <div class="nav nav-tabs_c mx-4 mx-lg-5" id="nav-tab">
          <a class="nav-item nav-link_c active" id="tab-01" data-toggle="tab" href="#coffee-01">描述</a>
          <a class="nav-item nav-link_c" id="tab-02" data-toggle="tab" href="#coffee-02">訂購須知</a>
          <a class="nav-item nav-link_c" id="tab-03" data-toggle="tab" href="#coffee-03">運費說明</a>
        </div>
      </nav>
      <!-- 內容太長了 可以用卷軸控制內容 overflow-auto -->
      <div class="tab-content bg-white p-3 overflow-auto  mx-4 mx-lg-5" id="nav-tabContent" style="height:500px">
        <div class="tab-pane fade show active" id="coffee-01">
          <h5 class="text-green"><?= $row['d_title'] ?></h5>
          <span>
            <?= $row['d_p'] ?></span>

        </div>
        <div class="tab-pane fade" id="coffee-02">
          <h5 class="text-green">訂購須知＆售後服務</h5>

          <li>售後一個月內，因植物根系未穩固不小心翻倒或需要整理枯葉、除蟲，都可以帶回門市，我們替盆栽免費健康檢查</li>
          <li>雙北市地區之訂單：當日 12：00 前完成訂購，可於當日下午到貨。若於 12：00 後完成訂購，則於隔日到貨。</li>
          <li>雙北市以外地區之訂單：請於欲送達日期前 1-4 個工作天（不包含假日）完成訂購。若非上述時間內訂購，將依照有肉的貨運安排進行配送。</li>
          <li>到店自取之訂單：當日 12：00 前完成訂購，可於當日下午取貨。若於 12：00 後完成訂購，則於隔日自取</li>
          <li>收到款項後，訂單才會成立進行出貨。</li>
          <li>送達時間 24 小時內不得取消訂單，若需更改訂單，請於送達時間前 24 小時聯繫客服，由專人為你服務。</li>
          <li>配送時間請選擇上午（10：00-12：00）、下午（14：00-18：00）兩時段，無法指定確切到貨時間。</li>
          <li>緊急訂購、特殊需求、或需選擇其他到貨時間，請加入有肉 LINE ID：@succuland ，於客服時間內洽詢（10：00- 18：00）。</li>
          <li>若訂購商品缺貨，有肉客服將主動聯繫詢問更換。</li>
          <li>每筆交易僅含一次配送費用，請確認收件資訊的完整，以及收件地址是否能於選擇時間內簽收，以免造成二次運送（含修改地址）須負擔二次運費。</li>
          <li>更多問題請詳見 常見 Q&A</li>

        </div>
        <div class="tab-pane fade" id="coffee-03">
          <h5 class="text-green">多肉花禮總價內含運費，立即下訂為你配送到指定地點。</h5>
          精緻時尚的多肉花禮，我們提供全台專車代客送花服務。<br>
          讓我們幫你把最好的祝福與心意送到重要的人心坎裡。
          <hr>
          <h5 class="text-green">注意事項：</h5>
          1.台灣東部（花蓮、台東）及離島地區暫不提供多肉植栽組專車運送服務。<br>
          2.若台灣設計盆器需寄送至海外地區，請聯繫 LINE 客服：@succuland<br>
          3.購買空盆、空氣鳳梨組、周邊商品、植物燈，郵局運費統一 $80。

        </div>
      </div>
    </div>
  </section>

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