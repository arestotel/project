<?
if($_SESSION['table']){ 
  $_SESSION['order'] = "";
  $q = $_SERVER['HTTP_REFERER'];
  header("Location: $q");
}else
  error('зашли без сессии');