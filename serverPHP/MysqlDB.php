<?php
include 'config.php';

class MysqlDB extends mysqli {
  private string $host;
  private string $user;
  private string $password;
  private string $dbName;
  // private $connectionDB;
  public function __construct(string $HOST, string $USER, string $PASSWORD, string $DBNAME) {
    $this->host = $HOST;
    $this->user = $USER;
    $this->password = $PASSWORD;
    $this->dbName = $DBNAME;
    // $this->connectionDB = mysqli_connect($HOST, $USER, $PASSWORD, $DBNAME);
  }
  public function getName(){
    $connection = mysqli_connect($this->host, $this->user, $this->password, $this->dbName);
    $sql = "SELECT * FROM Users";
    $result = $connection->query($sql);
    return $result;
  }
}