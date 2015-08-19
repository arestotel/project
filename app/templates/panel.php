Текущие заказы:
<br>
<? foreach($cont as $value): ?>
 | Номер заказа: <?= $value[id] ?>
 | Заказ: <?= $value[dishes] ?>
 | Стол: <?= $value[tabl] ?>
 | Дата: <?= $value[date] ?>
 | Цена: <?= $value[price] ?>
<br>
<? endforeach; ?>
<br>
<button>Обновить</button>