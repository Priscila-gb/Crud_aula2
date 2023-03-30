<?php
include("../models/conexao.php");
include("blades/header.php");
?>

<?php

    $query = mysqli_query($conexao, "SELECT * FROM alunos WHERE codigo = 2");
    $exibe = mysqli_fetch_array($query);

?>
<div class="container border rounded mt-5 p-3 bg-white">
<form action="../controllers/atualizarAluno.php" method="post">
    <input type="hidden" name="alunoCodigo" value = "<?php echo $exibe[0] ?>"><br>
    <label>Nome</label>
    <input type="text" name="alunoNome" value = "<?php echo $exibe[1] ?>"><br>
    <label>Cidade</label>
    <input type="text" name="alunoCidade" value= "<?php echo $exibe[2] ?>"><br>
    <label>Sexo</label>
    M<input type="radio" name="alunoSexo" value="m" <?php echo ($exibe[3]=="m")? "checked" : ""; ?>>
    F<input type="radio" name="alunoSexo" value="f" <?php echo ($exibe[3]=="f")? "checked" : ""; ?>>
    <input type="submit" value="Atualizar">
</form>
</div>
<?php
include("blades/footer.php");
?>