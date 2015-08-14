<? //контроллер главной страницы
if($query[2]){
  $code = $query[2];
  $q = $mysqli->query("SELECT * FROM t_tables WHERE code = '$code'");
  $res = $q->fetch_assoc();
  if($res[tabl])
    $_SESSION['table'] = $res[tabl];
  header("Location: /main");
}
if($_SESSION['table']){
  $q = $mysqli->query("SELECT * FROM menu");
  $menu = $q->fetch_all(MYSQLI_ASSOC);
  $q = $mysqli->query("SELECT DISTINCT type FROM menu");
  $types = $q->fetch_all(MYSQLI_ASSOC);
  foreach($types as $type){
    foreach($menu as $allMenu){
      foreach($_SESSION['order'] as $key => $order){
        if($order[0] == $allMenu[menu_id]){
          if($allMenu[type] == $type[type])
            $youOrder[$key] = [$allMenu[name], $order[1], $type[type], $allMenu[menu_id]];
        }
      }
    }
  }
  foreach($menu as $allMenu){
    foreach($_SESSION['order'] as $order){
      if($order[0] == $allMenu[menu_id])
        $price+=$allMenu[price];
    }
  }
  $result = [order => $youOrder, price => $price];
  if($_POST){
    if(isset($_POST)){
      foreach($menu as $allMenu){
        foreach($_SESSION['order'] as $value){
          if($value[0] == $allMenu[menu_id])
            if($main)
              $main = $main.', '.$allMenu[name].' - '.$value[1];
            else
              $main = $allMenu[name].' - '.$value[1];
        }
      }
      $date = date("d-m-Y H:i:s");
      $table = $_SESSION['table'];
      $q = $mysqli->query("INSERT INTO main_order (dishes, date, tabl, price) VALUES ('$main', '$date', '$table', '$price')");
      header("Location: /ok");
    }
  }
  $title="Главная";
  $content=tpl("main", $result);
}else
  error('qwe');