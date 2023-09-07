<?php isset($check)?true:die('acesso negado'); ?>


<h1>Clientes</h1>


<?php
require_once 'incluedes/conexao.php';

$sql = "SELECT nome, cidade, tel
        FROM clientes";
        

$imovel = $conexao->query($sql);

foreach ($imovel as $i){
    echo '<div class="imovel">';
    echo'<h3>'.$i ['nome']. '</h3>';
    echo '<p>'.$i['cidade'].'</p>';
    echo '<p>' .$i['tel'].'</p>';
    echo '</div>';
}

