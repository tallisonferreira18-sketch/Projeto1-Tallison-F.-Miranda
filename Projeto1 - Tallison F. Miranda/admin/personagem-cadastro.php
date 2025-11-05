<?php

    require_once "config.inc.php";

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $personagem = $_POST["personagem"];
        $jogador = $_POST["jogador"];
        $especie = $_POST["especie"];
        $classe = $_POST["classe"];
        $subclasse = $_POST["subclasse"];

        $sql = "INSERT INTO personagens (personagem, jogador, especie, classe, subclasse)
            VALUES ('$personagem', '$jogador', '$especie', '$classe', '$subclasse')";
        $executa = mysqli_query($conexao, $sql);
        if($executa) {
            echo "<h2>Cadastro realizado com sucesso.</h2>";
            echo "<a href='?pg=personagem-admin'>Voltar</a>";
        }else{
            echo "<h2>Erro ao cadastrar.</h2>";
            echo "<a href='?pg=personagem-admin'>Voltar</a>";
        }
    }else{
        echo "<h2>Acesso negado.</h2>";
        echo "<a href='?pg=personagem-admin'>Voltar</a>";
    }