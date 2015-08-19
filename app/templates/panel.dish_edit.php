Редактирование блюда
<br>
<form method="POST">
  Название:
  <input type="text" name="name" value="<?= $cont[name] ?>">
  <br>
  Описание:
  <textarea name="about"><?= $cont[about] ?></textarea>
  <br>
  Цена:
  <input type="text" name="price" value="<?= $cont[price] ?>">
  <br>
  Вес:
  <input type="text" name="weight" value="<?= $cont[weight] ?>">
  <br>
  Тип:
  <select name="type">
    <option <?= ($cont[type] == 'main') ? 'selected' : '' ?> value="main">Основное блюдо</option>
    <option <?= ($cont[type] == 'drink') ? 'selected' : '' ?> value="drink">Напитки</option>
    <option <?= ($cont[type] == 'wine') ? 'selected' : '' ?> value="wine">Вина</option>
  </select>
  <br>
  Подтип:
  <input type="text" name="sub_type" value="<?= $cont[sub_type] ?>">
  <br>
  <input type="submit" value="Изменить">
</form>
