<?

$query = explode("/",$_SERVER['REQUEST_URI']);

if($query[1] == "") {
  $query[1] = "main";
}

$controller = "controllers/".$query[1].".php";
if(!include($controller))
  error("NoSuchController - ".$controller);

if($query[1] == 'panel') {
  if($query[2])
    $controller = "controllers/panel.".$query[2].".php";
  else
    $controller = "controllers/panel.php";
  if(!include($controller)){
    error("NoSuchController - ".$controller);
  }
}