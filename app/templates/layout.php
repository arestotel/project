<!doctype html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="/assets/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta charset="UTF-8">
  <title><?= $title ?></title>
</head>

<body>
  <header class="header">
    <? if($query[1] != 'main'): ?>
      <a href="/main">Вернуться к оформлению заказа</a>
    <? endif; ?>
    <a href="/selection/main">Основное меню</a>
    <a href="/selection/drink">Напитки</a>
    <a href="/selection/wine">Вина</a>
    <a href="/clear">Очистить заказ</a>
  </header>

  <main>
    <div class="wrap">
      <?= $content ?>
    </div>
  </main>
  
  <footer>
    footer
  </footer>
  
  <script src="/assets/script.js"></script>
</body>
</html>