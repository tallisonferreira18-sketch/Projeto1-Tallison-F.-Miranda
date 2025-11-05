<?php

    require_once "config.inc.php";
    $id = (int)$_GET['id'];

    $sql = "DELETE FROM personagens WHERE id = $id";

    $resultado = mysqli_query($conexao, $sql);
    if($resultado){
       echo "<h2>Registro excluido com sucesso!</h2>";
       echo "<br><a href='?pg=personagem-admin'>Listar Personagens</a>";
    }else{
        echo "<h2>Erro ao excluir registro!</h2>";
        echo "<br><a href='?pg=personagem-admin'>Voltar</a>";
    }