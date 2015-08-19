<? 
if($_SESSION['admin']){
  if($_POST){
    if(isset($_POST)){
      $name = q($_POST['name']);
      $about = q($_POST['about']);
      $type = q($_POST['type']);
      $sub_type = q($_POST['sub_type']);
      $price = q($_POST['price']);
      $weight = q($_POST['weight']);
      if($name && $type && $sub_type && $price){
        $q = $mysqli->query("INSERT INTO menu (name, about, type, sub_type, price, weight) VALUES ('$name', '$about', '$type', '$sub_type', '$price', '$weight')");
        header("Location: /panel/menu_edit");
      }else
        print_r('Заполните обязательные поля');
    }
  }
}else
  error('Не авторизован в админку');
$title="Добавление блюда";
$content=tpl("panel.add_dish", $result);
