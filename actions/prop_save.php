<?php
$nome=filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_SPECIAL_CHARS);
$cidade=filter_input(INPUT_POST, 'cidade',FILTER_SANITIZE_SPECIAL_CHARS);
$tel=filter_input(INPUT_POST, 'tel',FILTER_SANITIZE_SPECIAL_CHARS);

require_once '../incluedes/conexao.php';

$sql = "INSERT INTO clientes (nome, cidade, tel) VALUES ('$nome', '$cidade', '$tel')";

$conexao->query($sql);

header('Location:../index.php');