Основные блюда:
<br>
<table>
  <thead>
    <tr>
      <td>Название</td>
      <td>Тип</td>
      <td>Цена</td>
      <td>Вес</td>
      <td>Описание</td>
      <td>Есть в наличии</td>
    </tr>
  </thead>
  <tbody>
    <? foreach($cont as $value): ?>
      <? if($value[type] == 'main'): ?>
        <tr>
          <td><?= $value[name] ?></td>
          <td><?= $value[sub_type] ?></td>
          <td><?= $value[price] ?></td>
          <td><?= $value[weight] ?></td>
          <td><?= $value[about] ?></td>
          <td><?= ($value[have] == 1) ? 'Да' : 'Нет' ?><a href="/panel/dish_activation/<?= $value[menu_id] ?>/<?= ($value[have] != 1) ? 1 : 2 ?>"><?= ($value[have] == 1) ? 'Отключить' : 'Активировать' ?></a></td>
          <td><a href="/panel/dish_edit/<?= $value[menu_id] ?>">Редактировать</a></td>
          <td><a href="/panel/dish_del/<?= $value[menu_id] ?>">Удалить</a></td>
        </tr>
      <? endif; ?>
    <? endforeach; ?>
  </tbody>
</table>
<br>
Напитки:
<br>
<table>
  <thead>
    <tr>
      <td>Название</td>
      <td>Тип</td>
      <td>Цена</td>
      <td>Вес</td>
      <td>Описание</td>
      <td>Есть в наличии</td>
    </tr>
  </thead>
  <tbody>
    <? foreach($cont as $value): ?>
      <? if($value[type] == 'drink'): ?>
        <tr>
          <td><?= $value[name] ?></td>
          <td><?= $value[sub_type] ?></td>
          <td><?= $value[price] ?></td>
          <td><?= $value[weight] ?></td>
          <td><?= $value[about] ?></td>
          <td><?= ($value[have] == 1) ? 'Да' : 'Нет' ?><a href="/panel/dish_activation/<?= $value[menu_id] ?>/<?= ($value[have] != 1) ? 1 : 2 ?>"><?= ($value[have] == 1) ? 'Отключить' : 'Активировать' ?></a></td>
          <td><a href="/panel/dish_edit/<?= $value[menu_id] ?>">Редактировать</a></td>
          <td><a href="/panel/dish_del/<?= $value[menu_id] ?>">Удалить</a></td>
        </tr>
      <? endif; ?>
    <? endforeach; ?>
  </tbody>
</table>
<br>
Вина:
<br>
<table>
  <thead>
    <tr>
      <td>Название</td>
      <td>Тип</td>
      <td>Цена</td>
      <td>Вес</td>
      <td>Описание</td>
      <td>Есть в наличии</td>
    </tr>
  </thead>
  <tbody>
    <? foreach($cont as $value): ?>
      <? if($value[type] == 'wine'): ?>
        <tr>
          <td><?= $value[name] ?></td>
          <td><?= $value[sub_type] ?></td>
          <td><?= $value[price] ?></td>
          <td><?= $value[weight] ?></td>
          <td><?= $value[about] ?></td>
          <td><?= ($value[have] == 1) ? 'Да' : 'Нет' ?><a href="/panel/dish_activation/<?= $value[menu_id] ?>/<?= ($value[have] != 1) ? 1 : 2 ?>"><?= ($value[have] == 1) ? 'Отключить' : 'Активировать' ?></a></td>
          <td><a href="/panel/dish_edit/<?= $value[menu_id] ?>">Редактировать</a></td>
          <td><a href="/panel/dish_del/<?= $value[menu_id] ?>">Удалить</a></td>
        </tr>
      <? endif; ?>
    <? endforeach; ?>
  </tbody>
</table>