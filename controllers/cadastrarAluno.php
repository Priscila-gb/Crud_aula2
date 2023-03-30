<?php
    include("../models/conexao.php");

    $varAlunoNome = $_POST["alunoNome"];
    $varAlunoCidade = $_POST["alunoCidade"];
    $varAlunoSexo = $_POST["alunoSexo"];

    mysqli_query($consexao, "INSERT INTO alunos (nome, cidade, sexo) VALUES ('alunoNome', 'alunoCidade', 'alunoSexo')");

    header("location:../index.php");
?>