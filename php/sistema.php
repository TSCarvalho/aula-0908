<?php

    include "classes/Aluno.php";

    $aluno = new Aluno();

    $aluno->cadastrar(
        $_GET['nome'],
        $_GET['idade'],
        $_GET['sexo']
    );
    echo $aluno->exibir();
