<?
if($_SESSION['admin']){
  if($query[3]){
    $id = $query[3];
    $q = $mysqli->query("DELETE FROM menu WHERE menu_id = '$id'");
    header("Location: /panel/menu_edit");
  }else
    error('Удаление блюда без 3 запроса');
}else
  error('Удаление блюда не админом');
