<?= $cont[title] ?>
<br>
<br>
<label>Заказанные :</label><br>
<? foreach($_SESSION['order'] as $key => $value): ?>
  <? foreach($cont[menu] as $menu): ?>
    <? if($menu[menu_id] == $value[0]): ?>
    <?= $menu[name] ?>
    <?= $value[1] ?>
    <a href="/del_menu/<?= $value[0] ?>">Удалить</a>
    <? endif; ?>
  <? endforeach; ?>
<br>
<? endforeach; ?>
<br>
<br>
<? foreach($cont[type] as $value): ?>
  <?= $value[sub_type] ?>:
  <br>
  <? foreach($cont[menu] as $menu): ?>
  <? if($menu[sub_type] == $value[sub_type] && $menu[have] == 1): ?>
    <?= $menu[name] ?>
    <?= $menu[about] ?>
    <?= $menu[weight] ?>
    <?= $menu[price] ?>
    <a href="/add_menu/<?= $menu[menu_id] ?>">Добавить к заказу</a>
    <br>
  <? endif; ?>
  <? endforeach; ?>
  <br>
<? endforeach; ?>

