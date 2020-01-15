<!-- 輪播圖片(資料表q1t6_img) -->
<h3 class="ct">首頁輪播管理</h3>
<form method="post" action="api.php?do=imagemdy">
  <table width="100%">
    <tbody>
      <tr class="yel">
        <!-- <td>編號</td> -->

        <td width="50%">輪播圖片(建議尺寸:1920x800)</td>
        <td>狀況</td>
        <td>操作</td>
      </tr>
      <?php
      $rer = select("q1t6_img", 1);
      foreach ($rer as $value) {
      ?>
        <!-- <form action="api.php?do=banner&id=<?= $_GET['id'] ?>" method="post" enctype="multipart/form-data"> -->
        <tr bgcolor=#ffc>
          <!-- <td><?= $value['id'] ?></td> -->
          <!-- <img src="upload/<?= $value['img'] ?>" width="100" height="68"> -->
          <td><img style="height:100px" src="upload/<?= $value['img'] ?>"></td>
          <td>
            <?= ($value['dpy']) ? "顯示" : "隱藏"; ?>
          </td>
          <td>

            <!-- <input type="button" value="刪除" onclick="<?= jlo('api.php?do=bndel&id=' . $value['id']) ?>"> -->
            <input type="button" value="顯示" onclick="<?= jlo('api.php?do=bnon&id=' . $value['id']) ?>">
            <input type="button" value="隱藏" onclick="<?= jlo('api.php?do=bnoff&id=' . $value['id']) ?>">
          </td>
          <!-- <td><input type="checkbox" name="del[]" value="<?= $value['id'] ?>"></td> -->
          <td><input type="button" onclick="op('#cover','#cvr','view.php?do=imagechg&id=<?= $value['id'] ?>')" value="更換圖片"></td>
        </tr>

      <?php
      }
      ?>
    </tbody>
  </table>
</form>