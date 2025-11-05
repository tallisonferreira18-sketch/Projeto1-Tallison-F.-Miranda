<?php

    require_once "admin/config.inc.php";

    $sql = "SELECT * FROM jogadores";
    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado) > 0){

    echo "<h1>Jogadores</h1>";
?>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Jogador</th>
            <th>Personagem</th>
        </tr>
    </thead>
    <tbody>
    <?php
        while($dados = mysqli_fetch_array($resultado)){
    ?>
        <tr>
            <td><?=$dados['jogador']?></td>
            <td><?=$dados['personagem']?></td>
        </tr>
    <?php
        }
    ?>
    </tbody>
</table>
<?php
    }else{
        echo "<h2>Nenhum jogador cadastrado no momento.</h2>";
    }