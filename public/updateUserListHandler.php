
<?php
$filepath = realpath (dirname(__FILE__));
require_once($filepath."/SQLConnector.php");
$connection = new SQLConnector();
echo $connection->getUsers();

?>
