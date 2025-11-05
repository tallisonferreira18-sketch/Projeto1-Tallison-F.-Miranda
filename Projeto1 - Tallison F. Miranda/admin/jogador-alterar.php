<?php

require_once "config.inc.php";

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $jogador = $_POST["jogador"];
    $personagem = $_POST["personagem"];
    $id = $_POST["id"];

    $sql = "UPDATE jogadores SET 
            jogador = '$jogador',
            personagem = '$personagem'
            WHERE id = '$id'";

    $executa = mysqli_query($conexao, $sql);
    if($executa) {
        echo "<h2>Alteração realizada com sucesso.</h2>";
        echo "<a href='?pg=jogador-admin'>Voltar</a>";
    }else{
        echo "<h2>Erro ao alterar cadastro.</h2>";
        echo "<a href='?pg=jogador-admin'>Voltar</a>";
    }
}else{
    echo "<h2>Acesso negado.</h2>";
    echo "<a href='?pg=jogador-admin'>Voltar</a>";
}