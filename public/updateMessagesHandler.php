<?php
$filepath = realpath (dirname(__FILE__));
require_once($filepath."/SQLConnector.php");
$connection = new SQLConnector();
$id = $_REQUEST["c"];
$title = $_REQUEST["n"];
$useractive = $_REQUEST["d"];
echo $connection->getMessages($id,$title,$useractive);

?>
