<? //настройки и константы

$db_host='localhost';
$db_login='root';
$db_pass='';
$db_name = 'restaurant';

$mysqli=new mysqli($db_host,$db_login,$db_pass,$db_name);
if(mysqli_connect_errno()) {
  error(mysqli_connect_error());
}