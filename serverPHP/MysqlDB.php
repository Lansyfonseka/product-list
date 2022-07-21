<?php

class MysqlDB {
  private $db;
  public function __construct(string $HOST, string $USER, string $PASSWORD, string $DBNAME) {
    $this->db = new mysqli($HOST, $USER, $PASSWORD, $DBNAME);
  }
  public function getAllProducts(){
    $sql = "SELECT * FROM Products";
    $result = $this->db->query($sql);
    return $result;
  }
  public function addNewProduct($sku, $name, $price, $customField) {
    $encodeCustomField = base64_encode($customField);
    echo $encodeCustomField;
    $sqlInsert = "insert into Products (sku, name, price, custom_field) values ('$sku', '$name', '$price', '$customField')";
    $result = $this->db->query($sqlInsert);
    return $result;
  }
}