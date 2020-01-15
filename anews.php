<!-- 資料庫q4t3_news -->
<h3 class="ct">注目新文管理</h3>

<input type="button" value="新增文章" onclick="<?= jlo('?redo=bnadd') ?>">
<table>
  <tr>
    <td width=6%>編號</td>
    <td width=50%>文章名稱</td>
    <td>狀況</td>
    <td>操作</td>
  </tr>
  <?php
  $nowpage = (empty($_GET['page'])) ? 1 : $_GET['page'];
  $begin = ($nowpage - 1) * 8; // nowpage:begin=1:0, 2:3, 3:6  
  $re = select("q4t3_news", "1 limit " . $begin . ",8"); //begin=0,3,6,9....

  foreach ($re as $ro) {
  ?>

    <tr bgcolor=#ffc>
      <td><?= $ro['id'] ?></td>
      <td><?= $ro['title'] ?></td>

      <td><?= ($ro['dpy']) ? "上架中" : "已下架"; ?></td>
      <td>
        <input type="button" value="修改" onclick="<?= jlo('?redo=tpnews&id=' . $ro['id']) ?>">
        <input type="button" value="刪除" onclick="<?= jlo('api.php?do=anewsdel&id=' . $ro['id']) ?>">
        <input type="button" value="上架" onclick="<?= jlo('api.php?do=anewson&id=' . $ro['id']) ?>">
        <input type="button" value="下架" onclick="<?= jlo('api.php?do=anewsoff&id=' . $ro['id']) ?>">
      </td>
    </tr>
  <?php
  }
  ?>
</table>
<div style="text-align:center;">
  <?php
  $result = navpage("q4t3_news", 1, 8, $nowpage);
  foreach ($result as $key => $value) echo '<a class="bl" style="font-size:' . (($key == $nowpage) ? 20 : 15) . 'px;" href="?redo=anews&page=' . $value . '"> ' . $key . ' </a>';
  ?>
</div>