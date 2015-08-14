<?
session_start();
ob_start();
print_r($_SESSION['table']);
print_r($_SESSION['order']);
require_once("func.php");
require_once("config.php");
require_once("router.php");

if($query[1] == 'panel')
  include("templates/layout.panel.php");
else
  include("templates/layout.php");
  
ob_end_flush();