<?php
  class OpinionPollModel {
    private $db_handle;
    private $host = 'localhost';
    private $db = 'php_login';
    private $uid = 'tnvr000';
    private $pwd = 'pqqrrr@123';

    public function __construct() {
      $this->db_handle = mysqli_connect($this->host, $this->uid, $this->pwd);
      if(!$this->db_handle) {
        die("Unable to connect to MySQL");
      }
      if(!mysqli_select_db($this->db_handle, $this->db)) {
        die("Unable to select database: " . mysqli_error($this->db_handle));
      }
    }

    private function execute_query($sql_stmt) {
      $result = mysqli_query($this->db_handle, $sql_stmt);
      return !$result ? false : true;
    }

    public function select($sql_stmt) {
      $result = mysqli_query($this->db_handle, $sql_stmt);
      if(!$result) {
        die("Database access failed: " . mysqli_error($this->db_handle));
      }
      $rows = mysqli_num_rows($result);
      $data = array();
      if($rows) {
        while($row = mysqli_fetch_array($result)) {
          $data = $row;
        }
      }
      return $data;
    }

    public function insert($sql_stmt) {
      return $this->execute_query(($sql_stmt));
    }

    public function __destruct() {
      mysqli_close($this->db_handle);
    }
  }
?>