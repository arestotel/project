Форма заказа
<br>
<br>
<form method="POST">
  <? if($_SESSION['order']): ?>
  <input type="text" name="text" value="true" style="visibility: hidden; position: absolute;">
  Выбранные основные блюда:
  <br>
  <? foreach($cont[order] as $order): ?>
    <? if($order[2] == 'main'): ?>
      <?= $order[0] ?>
      <?= $order[1] ?>
      <a href="/del_menu/<?= $order[3] ?>">Удалить</a>
      <br>
    <? endif; ?>
  <? endforeach; ?>
  <br>
  Выбранные напитки:
  <br>
  <? foreach($cont[order] as $order): ?>
    <? if($order[2] == 'drink'): ?>
      <?= $order[0] ?>
      <?= $order[1] ?>
      <a href="/del_menu/<?= $order[3] ?>">Удалить</a>
      <br>
    <? endif; ?>
  <? endforeach; ?>
  <br>
  Выбранные вина:
  <br>
  <? foreach($cont[order] as $order): ?>
    <? if($order[2] == 'wine'): ?>
      <?= $order[0] ?>
      <?= $order[1] ?>
      <a href="/del_menu/<?= $order[3] ?>">Удалить</a>
      <br>
    <? endif; ?>
  <? endforeach; ?>
  <br>
  Общая цена:
  <?= $cont[price] ?>
  <? else: ?>
  Ничего не выбрано
  <? endif; ?>
  <br>
  <input type="submit">
</form>