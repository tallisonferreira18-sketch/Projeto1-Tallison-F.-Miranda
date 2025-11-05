<?php

    require_once "config.inc.php";

    echo "<a href='?pg=personagem-form'>Cadastrar Personagem</a>";

    echo "<h1>Lista de Personagens</h1>";

    $sql = "SELECT * FROM Personagens";
    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado) > 0){
        while($dados = mysqli_fetch_array($resultado)){
            echo "ID: ".$dados['id']."<br>";
            echo "Nome: ".$dados['personagem']."<br>";
            echo "Jogador: ".$dados['jogador']."<br>";
            echo "Espécie: ".$dados['especie']."<br>";
            echo "Classe: ".$dados['classe']."<br>";
            echo "Sub-classe: ".$dados['subclasse']."<br>";
            echo " <a href='?pg=personagem-form-alterar&id=$dados[id]'>Editar</a>";
            echo " <a href='?pg=personagem-excluir&id=$dados[id]'>Excluir</a>";
            echo "<hr>";
        }
    }else{
        echo "<h3>Nenhum personagem cadastrado!</h3>";
    }