<?php
$filepath = realpath (dirname(__FILE__));
require_once($filepath."/SQLConnector.php");
$connection = new SQLConnector();
$title = $_REQUEST["c"];
$user = $_REQUEST["u"];
echo $connection->createConversation($title, $user);

?>
