<?php

class MysqlDB {
  private $db;
  // private $connectionDB;
  public function __construct(string $HOST, string $USER, string $PASSWORD, string $DBNAME) {
    $this->db = new mysqli($HOST, $USER, $PASSWORD, $DBNAME);
    // $this->connectionDB = mysqli_connect($HOST, $USER, $PASSWORD, $DBNAME);
  }
  public function getName(){
    $sql = "SELECT * FROM Users";
    $result = $this->db->query($sql);
    return $result;
  }
}