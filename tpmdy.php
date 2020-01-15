<style>
  textarea {
    vertical-align: middle;
    margin: 0.4rem;
  }

  img {
    vertical-align: middle;
    margin: 0.4rem 0;
  }
</style>
<?php
$rere = select("q4t5_product", "id=" . $_GET['id']);
?>
<h3 class="ct">修改商品</h3>
<form action="api.php?do=tpmdy&id=<?= $_GET['id'] ?>" method="post" enctype="multipart/form-data">

  商品編號: <?= $_GET['id'] ?><br>
  商品圖片: <img style="height:100px;margin-right:0.4rem" src="upload/<?= $rere[0]['img'] ?>"><input type="file" name="img"><br>
  商品名稱: <input type="text" name="title[<?= $_GET['id'] ?>]" value="<?= $rere[0]['title'] ?>" id=""><br>
  商品價格: <input type="text" name="price[<?= $_GET['id'] ?>]" value="<?= $rere[0]['price'] ?>" id=""><br>
  規　　格: <input type="text" name="spec[<?= $_GET['id'] ?>]" value="<?= $rere[0]['spec'] ?>" id=""><br>
  <!-- 庫存量: <input type="text" name="num[<?= $_GET['id'] ?>]" id=""><br> -->

  商品介紹:<textarea name="text[<?= $_GET['id'] ?>]" id="" cols="60" rows="4"><?= $rere[0]['text'] ?></textarea><br>
  描述內標:<textarea name="d_title[<?= $_GET['id'] ?>]" cols="60" rows="5"><?= $rere[0]['d_title'] ?></textarea><br>

  描述小字:<textarea name="d_p[<?= $_GET['id'] ?>]" cols="60" rows="6"><?= $rere[0]['d_p'] ?></textarea><br>
  <input type="submit" value="修改">
</form>