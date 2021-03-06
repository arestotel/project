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
    <a href="/panel">Заказы</a>
    <a href="/panel/menu_edit">Управление блюдами</a>
    <a href="/panel/add_dish">Добавить новое блюдо</a>
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