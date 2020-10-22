<?php
class Connection {

  private $DB_USER = 'phalcont_teste01';
  private $DB_SERVER = 'testephp.infoideias.com.br';
  private $DB_PASSWORD = 'Ph01al98!@#';
  private $DB_BANCO = 'phalcont_teste01';

  private $connection;

  public function __construct()
  {
    try{
      $this->connection = new mysqli($this->DB_SERVER, $this->DB_USER, $this->DB_PASSWORD, $this->DB_BANCO);
      mysqli_set_charset($this->connection, 'utf8');
      if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());

    } catch(Exception $e) {
      print_r($e);
    }
  }

  public function connection() {
    return $this->connection;
  }

  public function disconnect() {
    $this->connection->close();
  }
}


?>
