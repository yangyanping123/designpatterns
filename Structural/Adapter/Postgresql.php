<?php
 namespace Adapter;
 class Postgresql implements IDatabase{

     protected $connect; // 连接
     public function connectDb($host, $username, $password, $database)
     {
         $this->connect = pg_connect("host=$host dbname=$database user=$username password=$password");
     }


     public function query($sql)
     {
         
     }

     public function close()
     {
         
     }
 }