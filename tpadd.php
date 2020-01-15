<style>
  textarea {
    vertical-align: middle;
    margin: 0.4rem 0;
  }
</style>
<h3 class="ct">新增商品</h3>
<form action="api.php?do=tpadd" method="post" enctype="multipart/form-data">
  商品編號: 系統自動生成<br>
  商品名稱: <input type="text" name="title" id=""><br>
  商品價格: <input type="text" name="price" id=""><br>
  規　　格: <input type="text" name="spec" id=""><br>
  庫存數量: <input type="text" name="num" id=""><br>
  商品圖片: <input type="file" name="img" id=""><br>
  商品介紹: <textarea name="text" id="" cols="60" rows="4"></textarea><br>
  描述內標: <textarea name="d_title" cols="60" rows="5"></textarea><br>
  描述小字: <textarea name="d_p" cols="60" rows="6"></textarea><br>
  <input type="submit" value="新增">
</form>
<!-- <script>
  function getson() {
    id = $("select[name=fa]").val();
    $.post("api.php?do=getson", {
      id
    }, function(re) {
      $("select[name=son]").html(re);
    });
  }
</script> -->