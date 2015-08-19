<?
if($_SESSION['admin']){
  if($query[3]){
    if($query[4]){
      $id = $query[3];      
      $have = $query[4];
      $q = $mysqli->query("UPDATE menu SET have = '$have' WHERE menu_id = '$id'");
      header("Location: /panel/menu_edit");
    }else
      error('Неполный адрес в активации');
  }else
    error('Активация блюда без 3 запроса');
}else
  error('Активация блюда не админом');
