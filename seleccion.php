<?php
require_once ("conexion.php");
mysql_select_db($db,$conexion);
$sql = "select nombre from productos order by nombre";
$res = mysql_query($sql);

?>
