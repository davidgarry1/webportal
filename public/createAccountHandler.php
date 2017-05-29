<?php
$filepath = realpath (dirname(__FILE__));
require_once($filepath."/SQLConnector.php");
$connection = new SQLConnector();
$username = $_REQUEST["u"];
$password = $_REQUEST["p"];
echo $connection->createAccount($username, $password);

?>
