<?php
$filepath = realpath (dirname(__FILE__));
require_once($filepath."/SQLConnector.php");
$connection = new SQLConnector();
$content = $_REQUEST["c"];
$currentuser = $_REQUEST["u"];
$id_conv = $_REQUEST["i"];
echo $connection->addMessage($content, $currentuser, $id_conv);

?>
