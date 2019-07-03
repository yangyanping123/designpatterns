<?php
  namespace Adapter;
  class Mysqli implements IDatabase{
      public $connect;
      public function connectDb($host, $username, $password, $database)
      {
          $connect = mysqli_connect($host, $username, $password, $database);
          $this->connect = $connect;
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