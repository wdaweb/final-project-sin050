<h3 class="ct">編輯頁尾版權區</h3>
<?php
$rebot = select("q4t11_footer", 1);
// print_r($rebot)
?>
<form action="api.php?do=bot" method="post">

    <input type="text" name="once[1]" value="<?= $rebot[0]['once'] ?>" id=""><input type="submit" value="修改">

</form>