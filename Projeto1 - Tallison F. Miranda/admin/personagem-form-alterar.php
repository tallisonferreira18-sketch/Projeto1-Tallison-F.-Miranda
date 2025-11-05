<?php
    require_once "config.inc.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM personagens WHERE id = '$id'";
    $resultado = mysqli_query($conexao, $sql);
    if(mysqli_num_rows($resultado) > 0){
        $personagem = mysqli_fetch_array($resultado);

?>

<h2>Cadastro de Personagens</h2>
<form action="?pg=personagem-alterar" method="post">
    <input type="hidden" name="id" value="<?=$personagem['id']?>">
    <label>Nome:</label>
    <input type="text" name="personagem" value="<?=$personagem['personagem']?>"><br>
    <label>Jogador:</label>
    <input type="text" name="jogador" value="<?=$personagem['jogador']?>"><br>
    <label>Espécie:</label>
    <input type="text" name="especie" value="<?=$personagem['especie']?>"><br>
    <label>Classe:</label>
    <input type="text" name="classe" value="<?=$personagem['classe']?>"><br>
    <label>Sub-classe:</label>
    <input type="text" name="subclasse" value="<?=$personagem['subclasse']?>"><br>

    <input type="submit" value="Alterar personagem">
</form>

<?php
    }else{
        echo "<h2>Nenhum personagem cadastrado!</h2>";
    }
?>