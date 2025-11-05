<?php

    require_once "config.inc.php";
    $id = (int)$_GET['id'];

    $sql = "DELETE FROM jogadores WHERE id = $id";

    $resultado = mysqli_query($conexao, $sql);
    if($resultado){
       echo "<h2>Registro excluido com sucesso!</h2>";
       echo "<br><a href='?pg=jogador-admin'>Listar Jogadores</a>";
    }else{
        echo "<h2>Erro ao excluir registro!</h2>";
        echo "<br><a href='?pg=jogador-admin'>Voltar</a>";
    }