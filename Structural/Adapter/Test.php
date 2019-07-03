<?php
spl_autoload_register('autoload');
function autoload($class)
{
    require  dirname($_SERVER['SCRIPT_FILENAME']) . '//..//' . str_replace('\\', '/', $class) . '.php';
}
use Adapter\Mysqli;
//use Adapter\Pdo;
//use Adapter\Postgresql;
//use Adapter\Mysql;
$host = 'localhost';
$username = 'root';
$password = 'root';
$database = 'mysql';

//$client = new Postgresql();
//$client = new Mysql();
$client = new Mysqli();
$client->connect($host, $username, $password, $database);
$result = $client->query("select * from db");
while ($rows = mysqli_fetch_array($result)) {
    var_dump($rows);
}
$client->close();