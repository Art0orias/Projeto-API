<?php 

//Incluir A conexao
 include("conexao.php");

//Obter Dados

$obterDados = file_get_contents("php://input");


//Extrair os dados do JSON
$extrair = json_decode($obterDados);


//Separar os Dados do JSON
$nomeCurso = $extrair->cursos->nomeCurso;
$valorCurso = $extrair->cursos->valorCurso;

//SQL
$sql = "INSERT INTO cursos (nomeCurso, valorCurso) VALUES ('$nomeCurso', $valorCurso)";
mysqli_query($conexao, $sql);


//Exportar os Dados cadastrados
$curso = [
    'nomeCurso' => $nomeCurso,
    'valorCurso' => $valorCurso
]


//JSON

json_encode(['curso'] => $curso );


?>