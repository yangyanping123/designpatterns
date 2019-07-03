<?php
 namespace Adapter;
 class Pdo implements IDatabase{
     public $connect;
     public function connectDb($host, $username, $password, $database)
     {
         $dbms='mysql';
         $dsn="$dbms:host=$host;dbname=$database";
         $this->connect = new PDO($dsn, $username, $password, array(PDO::ATTR_PERSISTENT => true));

     }

     public function query($sql)
     {
         // TODO: Implement query() method.
     }


     public function close()
     {
         // TODO: Implement close() method.
     }
 }