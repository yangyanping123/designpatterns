<?php
  namespace Adapter;
  /**
   * Interface IDatabase
   * @package Adapter约定好统一的api行为
   */
  interface IDatabase{
      public function connectDb($host, $username, $password, $database);

      public function query($sql);

      public function close();
  }