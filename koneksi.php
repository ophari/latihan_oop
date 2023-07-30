<?php
class Database {
  private $host = "localhost";
  private $username = "root";
  private $password = "";
  private $db = "db_latihan_oop";

  protected $conn;

  public function __construct() {
      $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db);
      
      if ($this->conn->connect_error) {
          die("koneksi error : " . $this->conn->connect_error);
      }
  }
}
?>