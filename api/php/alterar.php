<?php 

//Incluir A conexao
 include("conexao.php");

//Obter Dados

$obterDados = file_get_contents("php://input");


//Extrair os dados do JSON
$extrair = json_decode($obterDados);


//Separar os Dados do JSON
$idCurso = $extrair->cursos->idCurso;
$nomeCurso = $extrair->cursos->nomeCurso;
$valorCurso = $extrair->cursos->valorCurso;

//SQL
$sql = "UPDATE cursos SET nomeCurso ='$nomeCurso', valorCurso = $valorCurso WHERE idCurso=$idCurso";
mysqli_query($conexao, $sql);


//Exportar os Dados cadastrados
$curso = [
    'idCurso' = $idCurso,
    'nomeCurso' => $nomeCurso,
    'valorCurso' => $valorCurso
]


//JSON

json_encode(['curso'] => $curso );


?>