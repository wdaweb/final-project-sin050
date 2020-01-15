<h3 class="ct">修改管理者帳號</h3>
<?php
$rebot = select("q4t10_admin", "id=" . $_GET['id']);
// print_r($rebot)
?>
<form action="api.php?do=admainmdy&id=<?= $_GET['id'] ?>" method="post">
    帳號: <input type="text" name="acc[<?= $_GET['id'] ?>]" value="<?= $rebot[0]['acc'] ?>" id=""><br>
    密碼: <input type="text" name="pwd[<?= $_GET['id'] ?>]" value="<?= $rebot[0]['pwd'] ?>" id=""><br>
    權限: <br>
    <input type="checkbox" name="cc[0]" value="1">輪播管理<br>
    <input type="checkbox" name="cc[1]" value="1">活動管理<br>
    <input type="checkbox" name="cc[2]" value="1">注目新文管理<br>
    <input type="checkbox" name="cc[3]" value="1">商品介紹管理<br>
    <input type="checkbox" name="cc[4]" value="1">頁尾版權管理<br>
    <input type="submit" value="修改">
</form>