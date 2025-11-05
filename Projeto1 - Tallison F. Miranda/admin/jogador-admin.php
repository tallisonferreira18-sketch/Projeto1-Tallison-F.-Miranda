<?php

    require_once "config.inc.php";

    echo "<a href='?pg=jogador-form'>Cadastrar jogadores</a>";

    echo "<h1>Lista de jogadores</h1>";

    $sql = "SELECT * FROM jogadores";
    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado) > 0){
        while($dados = mysqli_fetch_array($resultado)){
            echo "ID: ".$dados['id']."<br>";
            echo "Nome: ".$dados['jogador']."<br>";
            echo "Personagem: ".$dados['personagem']."<br>";
            echo " <a href='?pg=jogador-form-alterar&id=$dados[id]'>Editar</a>";
            echo " <a href='?pg=jogador-excluir&id=$dados[id]'>Excluir</a>";
            echo "<hr>";
        }
    }else{
        echo "<h3>Nenhum jogador cadastrado!</h3>";
    }