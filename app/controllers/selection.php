<? 
if($_SESSION['table']){
  if($query[2]){
    $section = $query[2];
    if($section == 'menu')
      $tit = 'Основное меню';
    elseif($section == 'drinks')
      $tit = 'Напитки';
    elseif($section == 'wine')
      $tit = 'Вина';
    $q = $mysqli->query("SELECT * FROM menu WHERE type = '$section'");
    $menu = $q->fetch_all(MYSQLI_ASSOC);
    $q = $mysqli->query("SELECT DISTINCT sub_type FROM menu WHERE type = '$section'");
    $type = $q->fetch_all(MYSQLI_ASSOC);
    $result = [menu => $menu, type => $type, title => $tit];
  }else
    error('qwe');
  $title="$tit";
  $content=tpl("selection", $result);
}else
  error('зашли без сессии');