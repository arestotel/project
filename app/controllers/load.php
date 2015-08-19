<? 
$q = $mysqli->query("SELECT * FROM main_order");
$result = $q->fetch_all(MYSQLI_ASSOC);
