<? 
if($_SESSION['admin']){
  $q = $mysqli->query("SELECT * FROM main_order");
  $result = $q->fetch_all(MYSQLI_ASSOC);
}else
  error('Не авторизован в админку');
$title="Админ-панель";
$content=tpl("panel", $result);
