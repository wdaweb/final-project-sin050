 <?php
  require_once('sql.php');
  ?>
 <!-- 導覽列 -->
 <!-- <div><img src="images/logo.svg" class="d-block m-auto" /></div> -->

 <header class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
   <div class="container">
     <a class="navbar-brand" href="index.php"><img src="images/logo.svg" height="50px" alt="" /></a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#plant-navbar">
       <span class="navbar-toggler-icon"></span>
     </button>

     <div class="collapse navbar-collapse" id="plant-navbar">
       <ul class="navbar-nav mr-auto">
         <li class="nav-item active">
           <a class="nav-link" href="index.php">首頁<span class="sr-only">(current)</span></a>
         </li>

         <li class="nav-item">
           <a class="nav-link " href="brand.php">BRANDS品牌故事</a>
         </li>
         <span class="text-secondary px-1" style="line-height: 40px;">|</span>
         <li class="nav-item">
           <a class="nav-link" href="new.php">NEWS注目新文</a>
         </li>
         <span class="text-secondary px-1" style="line-height: 40px;">|</span>
         <li class="nav-item">
           <a class="nav-link" href="product.php">PRODUCT商品介紹</a>
         </li>
       </ul>
       <!-- 右邊的nav -->
       <ul class="navbar-nav login">
         <li class="nav-item">
           <a class="nav-link" href="#login" data-toggle="modal"><i class="fas fa-user mr-1"></i>管理登入</a>
         </li>
         <span class="text-secondary px-1" style="line-height: 40px;">|</span>
         <li class="nav-item">

           <a class="nav-link" href="cart-show.php"><i class="fas fa-shopping-cart"></i></a>
         </li>
       </ul>
     </div>
   </div>
 </header>

 <!-- Modal 登入 元件-互動視窗 -->
 <div class="modal fade" id="login">
   <div class="modal-dialog modal-dialog-centered">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel" onclick="lo('admin.php')">登入後台管理</h5>
         <button type="button " class="close" data-dismiss="modal" aria-label="Close">



           <span>&times;</span>
         </button>
       </div>
       <form action="api.php?do=check" method="post" onsubmit="return check()">
         <!-- <form method="post" action="api.php?do=check"> -->
         <div class="modal-body">
           <div class="form-group">
             <label for="login_id">帳號:</label>
             <input name="acc" autofocus="" type="text" class="form-control" id="user_name" placeholder="請輸入帳號" required />
           </div>
           <div class="form-group">
             <label for="login_pw">密碼:</label>
             <input name="pwd" type="password" class="form-control" id="login_pw" placeholder="請輸入密碼" required />
           </div>
         </div>
         <div class="modal-footer d-flex justify-content-center">

           <button type="submit" class="btn btn-lightgreen">送出</button>
           <button type="reset" class="btn btn-lightgreen" data-dismiss="modal">關閉</button>
         </div>
       </form>

     </div>
   </div>
 </div>



 <script>
   //  function check() {
   //    if ($("input[name=ans]").val() != <?= $ans ?>) {
   //      alert("對不起，您輸入的驗證碼有務請您重新輸入");
   //      return false;
   //    }
   //  }
 </script>





 <!-- Modal 登入end -->
 <!-- <script>
   $(".sswww").hover(
     function() {
       $("#alt").html("" + $(this).children(".all").html() + "").css({
         "top": $(this).offset().top - 50
       })
       $("#alt").show()
     }
   )
   $(".sswww").mouseout(
     function() {
       $("#alt").hide()
     }
   )
 </script> -->