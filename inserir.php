<?php

    include_once 'classe_aluno.php';

    $aluno = new Aluno;
    $aluno->matricula(7);
    $aluno->nome("Otávio Silva Magalhães");
    $aluno->nota1(7);
    $aluno->nota2(10);
    $aluno->trabalho(6);

    echo "ID Matrícula aluno: " . $aluno->ver_matricula() . "<br>";
    echo "Nome do aluno: " . $aluno->ver_nome() . "<br>";
    echo "Nota da 1º prova: " . $aluno->ver_nota1() . "<br>";
    echo "Nota da 2º prova: " . $aluno->ver_nota2() . "<br>";
    echo "Nota do trabalho: " . $aluno->ver_trabalho() . "<br>";
    echo $aluno->media();

?>