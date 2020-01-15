<?php
require_once('sql.php');
if (empty($_SESSION['admin'])) plo("index.php?do=adlogin");
$main = (empty($_GET['redo'])) ? "admain" : $_GET['redo'];
$re = select("q4t10_admin", "acc='" . $_SESSION['admin'] . "'");
$access = unserialize($re[0]['access']);
?>


<!-- require_once('sql.php');
if (empty($_SESSION['admin'])) plo("index.php");
$mainzone = (!empty($_GET['do'])) ? $_GET['do'] : "atitle"; -->




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0057)?do=admin -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <title>U栽後台管理</title>
  <link href="./Manage Page_files/css.css" rel="stylesheet" type="text/css">
  <script src="./Manage Page_files/js.js"></script>
  <script src="scripts/jquery-1.9.1.min.js"></script>

  <script>

  </script>
</head>

<body>
  <div id="cover" style="display: none;">
    <div id="coverr">
      <a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;" onclick="cl('#cover')">X</a>
      <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;">
        <form action="api.php?do=titleadd" method="post" enctype="multipart/form-data">
          <p class="t cent botli">網站標題管理</p>
          <p class="cent">標題區圖片：<input type="file" name="img"></p>
          <p class="cent">標題區替代文字：<input type="text" name="text"></p>
          <p class="cent">
            <input type="submit" value="新增">
            <input type="reset" value="重置">
          </p>
        </form>
      </div>
    </div>
  </div>
  <iframe name="back" style="display:none;"></iframe>
  <div id="main" style="width: 1024px;height: 768px;overflow: scroll;padding: 0;margin: 10px auto;border: 0;">
    <div id="top">
      <a href="?">
        <img src="./Manage Page_files/0416.jpg">
      </a>
    </div>
    <div id="left" class="ct">
      <div style="min-height:400px;">
        <a href="?redo=admain">管理權限設置</a>
        <?= ($access[0]) ? '<a href="?redo=banner">輪播管理</a>' : '' ?>
        <?= ($access[1]) ? '<a href="?redo=banner3s">活動管理</a>' : '' ?>
        <?= ($access[2]) ? '<a href="?redo=anews">注目新文管理</a>' : '' ?>
        <?= ($access[3]) ? '<a href="?redo=tp">商品介紹管理</a>' : '' ?>
        <?= ($access[4]) ? '<a href="?redo=bot">頁尾版權管理</a>' : '' ?>



        <a href="api.php?do=adlogout" style="color:#f00;">返回</a>
      </div>
    </div>
    <div id="right"><?php include $main . ".php"; ?>
    </div>
    <div id="bottom" style="line-height:70px; color:#FFF; background:url(images/bot.png);" class="ct">
      <?= $bot ?>
    </div>
  </div>

</body>

</html>