<?php

    //Incluir a Conexão

    include("conexao.php");

    //Sql

    $sql = "SELECT * FROM cursos";

    //Executar comando

    $executar = mysqli_query($conexao, $sql);

    //Vetor
    $cursos = [];

    //índice

    $indice = 0;

    //Laço

    while ($linha = mysqli_fetch_assoc($executar)) {
        # code...
        $cursos[$indice]['idCurso'] = $linha['idCurso'];
        $cursos[$indice]['nomeCurso']= $linha['nomeCurso'];
        $cursos[$indice]['valorCurso']= $linha['valorCurso'];
        
        
        $indice++;
    }

    //Json

    json_encode(['cursos' =>$cursos]);

?>