<style>
  textarea {
    vertical-align: middle;
    margin: 0.4rem 0;
  }
</style>
<h3 class="ct">新增文章</h3>
<form action="api.php?do=bnadd" method="post" enctype="multipart/form-data">


  商品編號: 系統自動生成<br>
  文章標題: <input type="text" name="title" id=""><br>
  文章圖片: <input type="file" name="img" id=""><br>
  日　　期: <input type="date" name="date" id="" style="margin-top: 0.4rem"><br>
  文章描述: <textarea name="p" id="" cols="60" rows="5"></textarea><br>
  連　　結: <textarea name="more" cols="60" rows="1"></textarea><br><br>
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