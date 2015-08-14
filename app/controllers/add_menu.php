<?
if($_SESSION['table']){
  if($query[2]){
    $menu_id = $query[2];
    $sect = explode("/",$_SERVER['HTTP_REFERER']);
    if(!$_SESSION['order']){
      $_SESSION['order'] = [0 => [$menu_id, 1]];
    }else{
      $a = 0;
      foreach($_SESSION['order'] as $key => $value){
        if($value[0] == $menu_id){
          $_SESSION['order'][$key][1]++;
          $a = 1;
        }
      }
      if($a == 0){
        array_push($_SESSION['order'], [$menu_id, 1]);
      }
    }
    $q = $_SERVER['HTTP_REFERER'];
    header("Location: $q");
  }
}else
  error('зашли без сессии');