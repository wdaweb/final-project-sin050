<style>
  textarea {
    vertical-align: middle;
    margin: 0.4rem 0;
  }

  img {
    vertical-align: middle;
    margin: 0.4rem 0;
  }
</style>
<?php
$renew = select("q4t3_news", "id=" . $_GET['id']);
?>
<h3 class="ct">修改文章</h3>
<form action="api.php?do=tpnewsmdy&id=<?= $_GET['id'] ?>" method="post" enctype="multipart/form-data">

  </select><br>
  商品編號: 系統自動生成<br>
  文章圖片: <img style="height:100px;margin-right:0.4rem" src="upload/<?= $renew[0]['img'] ?>"><input type="file" name="img"><br>
  文章標題: <input type="text" name="title[<?= $_GET['id'] ?>]" value="<?= $renew[0]['title'] ?>" id=""><br>
  日　　期: <input type="date" name="date[<?= $_GET['id'] ?>]" value="<?= $renew[0]['date'] ?>" id="" style="margin-top: 0.4rem"><br>
  文章描述: <textarea name="p[<?= $_GET['id'] ?>]" cols="60" rows="5"><?= $renew[0]['p'] ?></textarea><br>
  連　　結: <textarea name="more[<?= $_GET['id'] ?>]" cols="60" rows="1"><?= $renew[0]['more'] ?></textarea><br>
  <input type="submit" value="修改">
</form>