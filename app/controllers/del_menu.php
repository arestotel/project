<?
if($_SESSION['table']){
  if($query[2]){
    $id = $query[2];
    foreach($_SESSION['order'] as $key => $order){
      if($order[0] == $id){
        if($order[1] > 1){
          $_SESSION['order'][$key][1]--;
          break;
        }else{
          array_splice($_SESSION['order'], $key, 1);
          break;
        }
      }
    }
    $q = $_SERVER['HTTP_REFERER'];
    header("Location: $q");
  }
}else
  error('зашли без сессии');