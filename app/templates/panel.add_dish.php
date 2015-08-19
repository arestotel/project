Добавление блюда
<br>
<form method="POST">
  Название:
  <input type="text" name="name">
  <br>
  Описание:
  <textarea name="about"></textarea>
  <br>
  Цена:
  <input type="text" name="price">
  <br>
  Вес:
  <input type="text" name="weight">
  <br>
  Тип:
  <select name="type">
    <option selected disabled>Выберите тип</option>
    <option value="main">Основное блюдо</option>
    <option value="drink">Напитки</option>
    <option value="wine">Вина</option>
  </select>
  <br>
  Подтип:
  <input type="text" name="sub_type">
  <br>
  <input type="submit" value="Добавить">
</form>
