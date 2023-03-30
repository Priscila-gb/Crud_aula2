<?php
include("blades/header.php");
?>
<div class="container border rounded mt-5 p-3 bg-white">
<form action="../controllers/cadastrarAluno.php" method="post">
    <label class="form-label">Nome</label>
    <input type="text" name="alunoNome"><br>

    <label class="form-label">Cidade</label>
    <input type="text" name="alunoCidade"><br>

    <div class="my-3 row">
        <div class="my-3 col">
            <input class="form-check-input" type="radio" name="alunoSexo" value="m">
            <label class="form-label">Masculino</label>
            <input class="form-check-input" type="radio" name="alunoSexo" value="m">
            <label class="form-label">Feminino</label>
        </div>
    </div>
    <input class="btn btn-success" type="submit" value="Cadastrar">
</form>
</div>
<?php
include("blades/footer.php");
?>