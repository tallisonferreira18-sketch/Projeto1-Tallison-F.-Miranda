<?php

    require_once "admin/config.inc.php";

    $sql = "SELECT * FROM personagens";
    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado) > 0){

    echo "<h1>Personagens</h1>";
?>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Jogador</th>
            <th>Espécie</th>
            <th>Classe</th>
            <th>Sub-Classe</th>
        </tr>
    </thead>
    <tbody>
    <?php
        while($dados = mysqli_fetch_array($resultado)){
    ?>
        <tr>
            <td><?=$dados['personagem']?></td>
            <td><?=$dados['jogador']?></td>
            <td><?=$dados['especie']?></td>
            <td><?=$dados['classe']?></td>
            <td><?=$dados['subclasse']?></td>
        </tr>
    <?php
    }
    ?>
    </tbody>
</table>
<?php
    }else{
        echo "<h2>Nenhum Personagem cadastrado no momento.</h2>";
    }