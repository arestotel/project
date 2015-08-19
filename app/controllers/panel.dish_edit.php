<? 
if($_SESSION['admin']){
  if($query[3]){
    $id = $query[3];
    $q = $mysqli->query("SELECT * FROM menu WHERE menu_id = '$id'");
    $result = $q->fetch_assoc();
    if($_POST){
      if(isset($_POST)){
        $name = q($_POST['name']);
        $about = q($_POST['about']);
        $type = q($_POST['type']);
        $sub_type = q($_POST['sub_type']);
        $price = q($_POST['price']);
        $weight = q($_POST['weight']);
        if($name && $type && $sub_type && $price){
          $q = $mysqli->query("UPDATE menu SET name = '$name', about = '$about', type = '$type', sub_type = '$sub_type', price = '$price', weight = '$weight' WHERE menu_id = '$id'");
          header("Location: /panel/menu_edit");
       }else
          print_r('Заполните основные поля');
      }
    }
  }else
    error('Нет запроса на редактирование блюда');
}else
  error('Не авторизован в админку');
$title="Админ-панель";
$content=tpl("panel.dish_edit", $result);
