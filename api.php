<?php
require_once("sql.php");
switch ($_GET['do']) {
  case 'check':
    // print_r($_POST);
    $result = select("q4t10_admin", "acc='" . $_POST['acc'] . "' AND pwd='" . $_POST['pwd'] . "'");
    // print_r($result);

    if ($result != null) { //驗證帳密成功
      $_SESSION['admin'] = $_POST['acc'];
      plo("admin.php");
    } else echo "<script>alert('帳號密碼錯誤!!');" . jlo('index.php') . "</script>";
    break;
  case 'logout':
    unset($_SESSION['admin']);
    plo("login.php");
    break;

  case 'adlogin':
    $re = select("q4t10_admin", "acc='" . $_POST['acc'] . "' and pwd='" . $_POST['pwd'] . "'");
    if ($re != null) {
      $_SESSION['admin'] = $_POST['acc'];
      plo("admin.php");
    } else echo "<script>alert('輸入錯誤');window.history.back()</script>";
    break;
  case 'adlogout':
    unset($_SESSION['admin']);
    plo("index.php");
    break;
  case 'admainadd':
    $ary = array(0, 0, 0, 0, 0, 0);
    foreach ($_POST['cc'] as $key => $value) $ary[$key] = $value;
    $_POST['access'] = serialize($ary);
    unset($_POST['cc']);
    insert($_POST, "q4t10_admin");
    plo("admin.php");
    break;
  case 'admainmdy':
    $ary = array(0, 0, 0, 0, 0, 0);
    foreach ($_POST['cc'] as $key => $value) $ary[$key] = $value;
    $_POST['access'][$_GET['id']] = serialize($ary);
    unset($_POST['cc']);
    update($_POST, "q4t10_admin");
    plo("admin.php");
    break;
  case 'admaindel':
    $post['del'][] = $_GET['id'];
    delete($post, "q4t10_admin");
    plo("admin.php");
    break;
  case 'clsadd':
    insert($_POST, "q4t4_class");
    plo("admin.php?redo=th");
    break;
  case 'thmdy':
    update($_POST, "q4t4_class");
    plo("admin.php?redo=th");
    break;
  case 'thdel':
    $post['del'][] = $_GET['id'];
    delete($post, "q4t4_class");
    plo("admin.php?redo=th");
    break;
  case 'getson':
    $re = select("q4t4_class", "parent=" . $_POST['id']);
    foreach ($re as $ro) echo '<option value="' . $ro['id'] . '">' . $ro['text'] . '</option>';
    break;
  case 'tpadd':
    $_POST['img'] = addfile($_FILES['img']);
    insert($_POST, "q4t5_product");
    plo("admin.php?redo=tp");
    break;
  case 'tpmdy':
    $_POST['img'][$_GET['id']] = addfile($_FILES['img']);
    print_r($_POST);
    update($_POST, "q4t5_product");
    plo("admin.php?redo=tp");
    break;

  case 'bnadd':
    $_POST['img'] = addfile($_FILES['img']);
    insert($_POST, "q4t3_news");
    plo("admin.php?redo=anews");
    break;
  case 'bnmdy':
    $_POST['img'][$_GET['id']] = addfile($_FILES['img']);
    print_r($_POST);
    update($_POST, "q4t3_news");
    plo("admin.php?redo=anews");
    break;


  case 'banner':
    $_POST['img'][$_GET['id']] = addfile($_FILES['img']);
    print_r($_POST);
    update($_POST, "q1t6_img");
    plo("admin.php?redo=banner");
    break;



  case 'tpnewsmdy':
    $_POST['img'][$_GET['id']] = addfile($_FILES['img']);
    print_r($_POST);
    update($_POST, "q4t3_news");
    plo("admin.php?redo=anews");
    break;
  case 'tpon':
    $_POST['dpy'][$_GET['id']] = 1;
    update($_POST, "q4t5_product");
    plo("admin.php?redo=tp");
    break;
  case 'tpoff':
    $_POST['dpy'][$_GET['id']] = 0;
    update($_POST, "q4t5_product");
    plo("admin.php?redo=tp");
    break;

  case 'anewson':
    $_POST['dpy'][$_GET['id']] = 1;
    update($_POST, "q4t3_news");
    plo("admin.php?redo=anews");
    break;
  case 'anewsoff':
    $_POST['dpy'][$_GET['id']] = 0;
    update($_POST, "q4t3_news");
    plo("admin.php?redo=anews");
    break;

  case 'anewsdel':
    $post['del'][] = $_GET['id'];
    delete($post, "q4t3_news");
    plo("admin.php?redo=anews");
    break;

  case 'tpdel':
    $post['del'][] = $_GET['id'];
    delete($post, "q4t5_product");
    plo("admin.php?redo=tp");
    break;

  case 'bnon':
    $_POST['dpy'][$_GET['id']] = 1;
    update($_POST, "q1t6_img");
    plo("admin.php?redo=banner");
    break;
  case 'bnoff':
    $_POST['dpy'][$_GET['id']] = 0;
    update($_POST, "q1t6_img");
    plo("admin.php?redo=banner");
    break;

    case 'bn3son':
      $_POST['dpy'][$_GET['id']] = 1;
      update($_POST, "q1t7_img");
      plo("admin.php?redo=banner3s");
      break;
    case 'bn3soff':
      $_POST['dpy'][$_GET['id']] = 0;
      update($_POST, "q1t7_img");
      plo("admin.php?redo=banner3s");
      break;

  case 'bndel':
    $post['del'][] = $_GET['id'];
    delete($post, "q1t6_img");
    plo("admin.php?redo=banner");
    break;

  case 'want':
    $_SESSION['buy'][$_GET['id']] = $_POST['num'];
    if (empty($_SESSION['user'])) plo("index.php?do=login");
    else plo("index.php?do=buycart");
    break;
  case 'checkuser':
    $re = select("q4t9_user", "acc='" . $_POST['id'] . "'");
    if ($re != null) echo "帳號重複";
    else echo "可使用此帳號";
    break;
  case 'reg':
    $_POST['date'] = date("Y-m-d");
    insert($_POST, "q4t9_user");
    plo("index.php?do=login");
    break;
  case 'login':
    $re = select("q4t9_user", "acc='" . $_POST['acc'] . "' and pwd='" . $_POST['pwd'] . "'");
    if ($re != null) {
      $_SESSION['user'] = $_POST['acc'];
      $_SESSION['id'] = $re[0]['id'];
      plo("index.php");
    } else echo "<script>alert('輸入錯誤');window.history.back()</script>";
    break;
  case 'logout':
    unset($_SESSION['user']);
    plo("index.php");
    break;
  case 'pay':
    $re = select("q4t9_user", "id=" . $_SESSION['id']);
    $x = $re[0];
    $_POST['user'] = $x['acc'];
    $_POST['name'] = $x['name'];
    $_POST['tel'] = $x['tel'];
    $_POST['addr'] = $x['addr'];
    $_POST['mail'] = $x['mail'];
    $_POST['total'] = $_GET['total'];
    $_POST['date'] = date("Y-m-d");
    $_POST['buy'] = serialize($_SESSION['buy']);
    unset($_SESSION['buy']);
    insert($_POST, "q4t8_order");
    echo "<script>alert('訂購成功感謝您的參與');" . jlo("index.php") . "</script>";
    break;
  case 'odrdel':
    $post['del'][] = $_GET['id'];
    delete($post, "q4t8_order");
    plo("admin.php?redo=order");
    break;
  case 'memmdy':
    update($_POST, "q4t9_user");
    plo("admin.php?redo=mem");
    break;
  case 'memdel':
    $post['del'][] = $_GET['id'];
    delete($post, "q4t9_user");
    plo("admin.php?redo=mem");
    break;
  case 'bot':
    update($_POST, "q4t11_footer");
    plo("admin.php?redo=bot");
    break;

  case 'banner':
    update($_POST, "q1t6_img");
    plo("admin.php?redo=banner");
    break;

  case 'newsmdy':
    update($_POST, "q1t9_news");
    delete($_POST, "q1t9_news");
    plo("admin.php?redo=anews");
    break;
  case 'newsadd':
    insert($_POST, "q1t9_news");
    plo("admin.php?redo=anews");
    break;

  case 'titleadd':
    $_POST['img'] = addfile($_FILES['img']);
    insert($_POST, "q1t3_title");
    plo("admin.php");
    break;
  case 'titlemdy':
    $_POST['dpy'][$_POST['radio']] = 1; //設定dpy['表單所radio的對象id']為1
    unset($_POST['radio']); //可不打，雖有錯誤提示(foreach)，但因php轉址根本看不到api.php的任何畫面
    update($_POST, "q1t3_title"); //將資料(打包方式已配合好)送給update函式，快速完成'批次修改'作業
    delete($_POST, "q1t3_title"); //將資料(打包方式已配合好)送給delete函式，快速完成'批次刪除'作業
    plo("admin.php");
    break;
  case 'titlechg':
    $post['img'][$_GET['id']] = addfile($_FILES['img']);
    update($post, "q1t3_title");
    plo("admin.php");
    break;

  case 'imagechg':
    $_POST['img'][$_GET['id']] = addfile($_FILES['img']);
    update($_POST, "q1t6_img");
    plo("admin.php?redo=banner");
    break;
  case 'imagemdy':
    update($_POST, "q1t6_img");
    delete($_POST, "q1t6_img");
    plo("admin.php?redo=banner");
    break;

    case 'image3smdy':
      update($_POST, "q1t7_img");
      delete($_POST, "q1t7_img");
      plo("admin.php?redo=banner3s");
      break;

      case 'image3schg':
        $_POST['img'][$_GET['id']] = addfile($_FILES['img']);
        update($_POST, "q1t7_img");
        plo("admin.php?redo=banner3s");
        break;
}
