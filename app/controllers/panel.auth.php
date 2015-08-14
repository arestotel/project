<?
$_SESSION['order'] = Array();
unset($_SESSION['table']);
unset($_SESSION['admin']);
if($_POST){
  if(isset($_POST)){
    $login = q($_POST['login']);
    $password = q($_POST['password']);
    if($login && $password){
      $q = $mysqli->query("SELECT * FROM admin WHERE login = '$login'");
      $res = $q->fetch_assoc();
      if($res[login]){
        if(md5($password) == $res[hash]){
          $_SESSION['admin'] = $login;
          header("Location: /panel");
        }else
          print_r('Неправильный пароль');
      }else
        print_r('Неправильный логин');
    }else
      print_r('Заполните все поля');
  }else
    print_r('Вы не заполнили поля');
}
print_r(md5('sSFvfgvp'));
$title="Авторизация";
$content=tpl("panel.auth");