<?php
  require 'db_common_methods.php';
  require 'db_interface.php';
  class MySQLDriver extends DBCommanMethods implements DBInterface {
    public function db_connect() {
      // connect code goes here
    }

    public function delete($where) {
      // delete code goes here
    }

    public function insert($data) {
      // insert code goes here
    }

    public function read($where) {
      // read code goes here
    }
    public function update($where) {
      // update code goes here
    }
  }
?>