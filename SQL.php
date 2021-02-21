<?php

abstract class SQL implements IDatabaseType {
      use PDOConnector;
      public $connectionStatus = false;

      public function isConnected() {

      }
}
