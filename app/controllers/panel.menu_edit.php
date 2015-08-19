<? 
if($_SESSION['admin']){
  $q = $mysqli->query("SELECT * FROM menu");
  $result = $q->fetch_all(MYSQLI_ASSOC);
}else
  error('Не авторизован в админку');
$title="Управление блюдами";
$content=tpl("panel.menu_edit", $result);
