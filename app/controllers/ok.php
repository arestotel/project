<?
if($_SESSION['table']){
  $_SESSION['order'] = Array();
  $title="Заказ отправлен";
  $content=tpl("ok");
}else
  error('зашли без сессии');