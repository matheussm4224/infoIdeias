<?php
require_once('../controllers/ConteudoController.php');

switch($_GET['url']) {
  case 'conteudo':
    print_r(json_encode(ConteudoController::getConteudo()));
  break;
}


?>
