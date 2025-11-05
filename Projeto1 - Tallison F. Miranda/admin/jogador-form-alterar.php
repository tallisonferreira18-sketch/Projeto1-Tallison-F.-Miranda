<?php
    require_once "config.inc.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM jogadores WHERE id = '$id'";
    $resultado = mysqli_query($conexao, $sql);
    if(mysqli_num_rows($resultado) > 0){
        $jogador = mysqli_fetch_array($resultado);

?>

<h2>Cadastro de Jogadores</h2>
<form action="?pg=jogador-alterar" method="post">
    <input type="hidden" name="id" value="<?=$jogador['id']?>">
    <label>Nome:</label>
    <input type="text" name="jogador" value="<?=$jogador['jogador']?>"><br>
    <label>personagem:</label>
    <input type="text" name="personagem" value="<?=$jogador['personagem']?>"><br>

    <input type="submit" value="Alterar jogador">
</form>

<?php
    }else{
        echo "<h2>Nenhum jogador cadastrado!</h2>";
    }
?>