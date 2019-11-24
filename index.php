<?php

require_once ("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setName("Josué Francisco");
$cad->setEmail("josuefrancisco@gmail.com");
$cad->setPassword("12345");

$cad->registrarVenda();

?>