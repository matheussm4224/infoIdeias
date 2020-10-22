<?php
  require_once('../daos/ConteudoDAO.php');

  class ConteudoController {

    public static function getConteudo() {
      $conteudoDao = new ConteudoDAO();
      return $conteudoDao->getConteudo();
    }

  }
?>
