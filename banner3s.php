<!-- 輪播圖片(資料表q1t6_img) -->
<h3 class="ct">活動bn管理</h3>

<form method="post" action="api.php?do=image3smdy">
  <table width="100%">
    <tbody>
      <tr class="yel">
        <!-- <td>編號</td> -->

        <td width="30%">活動文字</td>
        <td width="30%">活動圖片</td>
        <td>狀況</td>
        <td>操作</td>
      </tr>
      <?php
      $rer = select("q1t7_img", 1);
      foreach ($rer as $value) {
      ?>
  <tr bgcolor=#ffc>   
     <td><input type="text" name="text[<?= $value['id'] ?>]" value="<?= $value['text'] ?>" id=""></td>
     <td><img style="height:100px" src="upload/<?= $value['img'] ?>"></td>
     <td>
       <?= ($value['dpy']) ? "顯示" : "隱藏"; ?>
     </td>
     <td>

            <!-- <input type="button" value="刪除" onclick="<?= jlo('api.php?do=bndel&id=' . $value['id']) ?>"> -->
            <input type="button" value="顯示" onclick="<?= jlo('api.php?do=bn3son&id=' . $value['id']) ?>">
            <input type="button" value="隱藏" onclick="<?= jlo('api.php?do=bn3soff&id=' . $value['id']) ?>">
          </td>
          <!-- <td><input type="checkbox" name="del[]" value="<?= $value['id'] ?>"></td> -->
          <td><input type="button" onclick="op('#cover','#cvr','view.php?do=image3schg&id=<?= $value['id'] ?>')" value="更換圖片"></td>
    </tr>

      <?php
      }
      ?>
      
    </tbody>
  </table>
  <input type="submit" value="修改">
</form>