<? //кастомные функции/функции для использования

function tpl($tpl, $cont="")
{//прогрузка тимплейта
  $path = $_SERVER['DOCUMENT_ROOT'].'/app/templates/'.$tpl.'.php';
  ob_start();
  if(!include($path)) error('load template error => '.$path);
  return ob_get_clean();  
}

/*function tlog($str) 
{ //функция логирования
  $t = date("d-m-Y H:i:s");
  $w = addslashes($_SERVER['REQUEST_URI']);
  $h = fopen('logger.log' , 'ab');
  fwrite($h, $t . ' [' . $w . '] ' . $str . "\n");
}*/

function error($handl)
 { //функция вызова ошибки
  //tlog($handl);
  ob_end_clean();
  include('error.php');
  exit;
}

function q($value) { // возвращает безопасную строчку
  $value = trim($value);
  $value = htmlspecialchars($value);
  return $value;
}

function removeDirectory($dir) {
    if ($objs = glob($dir."/*")) {
       foreach($objs as $obj) {
         is_dir($obj) ? removeDirectory($obj) : unlink($obj);
       }
    }
    rmdir($dir);
  }

function rus_date() {
// Перевод
 $translate = array(
 "am" => "дп",
 "pm" => "пп",
 "AM" => "ДП",
 "PM" => "ПП",
 "Monday" => "Понедельник",
 "Mon" => "Пн",
 "Tuesday" => "Вторник",
 "Tue" => "Вт",
 "Wednesday" => "Среда",
 "Wed" => "Ср",
 "Thursday" => "Четверг",
 "Thu" => "Чт",
 "Friday" => "Пятница",
 "Fri" => "Пт",
 "Saturday" => "Суббота",
 "Sat" => "Сб",
 "Sunday" => "Воскресенье",
 "Sun" => "Вс",
 "January" => "Января",
 "Jan" => "Янв",
 "February" => "Февраля",
 "Feb" => "Фев",
 "March" => "Марта",
 "Mar" => "Мар",
 "April" => "Апреля",
 "Apr" => "Апр",
 "May" => "Мая",
 "May" => "Мая",
 "June" => "Июня",
 "Jun" => "Июн",
 "July" => "Июля",
 "Jul" => "Июл",
 "August" => "Августа",
 "Aug" => "Авг",
 "September" => "Сентября",
 "Sep" => "Сен",
 "October" => "Октября",
 "Oct" => "Окт",
 "November" => "Ноября",
 "Nov" => "Ноя",
 "December" => "Декабря",
 "Dec" => "Дек",
 "st" => "ое",
 "nd" => "ое",
 "rd" => "е",
 "th" => "ое"
 );
 // если передали дату, то переводим ее
 if (func_num_args() > 1) {
	 $timestamp = func_get_arg(1);
	 return strtr(date(func_get_arg(0), $timestamp), $translate);
 } else {
	// иначе текущую дату
	return strtr(date(func_get_arg(0)), $translate);
	/*<?
		echo rus_date("j F, Y", strtotime($cont[date]));
		копипаста
	?>*/
 }
 }
  function reArrayFiles(&$file_post) {

    $file_ary = array();
    $file_count = count($file_post['name']);
    $file_keys = array_keys($file_post);

    for ($i=0; $i<$file_count; $i++) {
        foreach ($file_keys as $key) {
            $file_ary[$i][$key] = $file_post[$key][$i];
        }
    }

    return $file_ary;
}

function cutString($string, $maxlen) { //обрезает красиво строку, убирает теги, добавляя ... в конце
  $string = strip_tags($string);
    $len = (mb_strlen($string) > $maxlen)
        ? mb_strripos(mb_substr($string, 0, $maxlen), ' ')
        : $maxlen
    ;
    $cutStr = mb_substr($string, 0, $len);
    return (mb_strlen($string) > $maxlen)
        ? $cutStr.'...'
        : $cutStr
    ;
}

function generate_password(){
  $arr = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 
               'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 
               'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 
               'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 
               'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 
               'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 
               'W', 'X', 'Y', 'Z', '1', '2', '3', '4',
               '5', '6', '7', '8', '9');
  $pass = "";
  for ($i = 0; $i < 9; $i++){
    $index = rand(0, count($arr) - 1);
    $pass .= $arr[$index];
  }
  return $pass;
}
