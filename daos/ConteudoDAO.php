<?php
  require_once('../config/Connection.php');
  class ConteudoDAO {
    private $mysqli;


    public function __construct()
    {
      $this->mysqli = (new Connection())->connection();
    }

    public function getConteudo() {
      $sql = "SELECT * FROM conteudo WHERE imobiliariaid = 99901 ORDER BY ConteudoID";
      $result = $this->mysqli->query($sql);

      return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
  }

?>
