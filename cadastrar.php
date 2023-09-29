<?php
require "conexao.php";
require "aviao.php";
require "RepositorioAviao.php";
$repAutor = new RepositorioAviao();

$autor1 = new aviao("Cmpaerea","cdp ","velomax","autonomia","modelo");

$repAutor->cadastrar($banco,$aviao);

?>
