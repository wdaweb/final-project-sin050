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
  <title>U栽-聯絡我們</title>
  <style>
    #footer {
      position: fixed;
      bottom: 0;
      width: 100%;
      left: 0;
      right: 0;
    }

    /* fixed-bottom {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1030;
} */
  </style>
</head>

<body>
  <?php include("menu.php") ?>

  <!-- 聯絡我們section05-->
  <section id="section05" class="mb-lg-auto" style="margin-bottom:100px ">
    <div class="container d-lg-flex flex-lg-column justify-content-lg-center h-100" style="margin-top:80px">
      <h4 class="text-dark py-3 py-lg-5 text-center">如果您有任何疑問，歡迎填寫下列表單，我們將儘快給您回復。</h4>

      <form class="needs-validation" novalidate>
        <!-- novalidate驗證用 -->
        <table class="table table-light table-striped table-hover">
          <thead>



            <!-- <tr>
                  <th scope="p-3 h4"></th>
                </tr> -->
          </thead>
          <tbody>
            <tr>
              <td>
                <div class="form-group">
                  <label for="user_name">姓名</label>
                  <input type="text" class="form-control" id="user_name" placeholder="請輸入姓名" required />
                  <div class="valid-feedback">已經輸入姓名</div>
                  <div class="invalid-feedback">忘記輸入姓名</div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="form-group">
                  <label for="user_phone">電話</label>
                  <input type="text" class="form-control" id="user_phone" placeholder="請輸入電話" required />
                  <div class="valid-feedback">已經輸入電話</div>
                  <div class="invalid-feedback">忘記輸入電話</div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="form-group">
                  <label for="user_email">電子郵件</label>
                  <input type="text" class="form-control" id="user_email" placeholder="請輸入電子郵件" required />
                  <div class="valid-feedback">已經輸入電子郵件</div>
                  <div class="invalid-feedback">忘記輸入電子郵件</div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="form-group">
                  <label for="user_msg">留言訊息</label>
                  <textarea class="form-control" id="user_msg" rows="5" placeholder="請輸入留言訊息" required></textarea>
                  <div class="valid-feedback">已經輸入留言訊息</div>
                  <div class="invalid-feedback">忘記輸入留言訊息</div>
                </div>
              </td>
            </tr>
          </tbody>

        </table>
        <div class="container d-flex justify-content-center py-3 py-lg-5">
          <tfoot>
            <tr>
              <td>
                <button class="btn btn-lightgreen mx-2" type="submit">送出</button>
                <button class="btn btn-lightgreen" type="reset">重設</button>
              </td>
            </tr>
          </tfoot>
        </div>
      </form>
    </div>
  </section>


  <?php include("footer.php") ?>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script></script>
</body>

</html>