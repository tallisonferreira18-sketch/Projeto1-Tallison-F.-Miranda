<?php
    //1ª etapa - conectando com servidor
    $conexao = mysqli_connect("localhost","root","");
    //2ª etapa - selecionando banco de dados
    $db = mysqli_select_db($conexao,"projeto_1_tallison_f_miranda_");

    if(!$conexao){
        echo "<h2>Erro ao conectar o banco de dados</h2>";
    }