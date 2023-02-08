<?php 

//Incluir A conexao
 include("conexao.php");

//Obter Dados

$obterDados = file_get_contents("php://input");


//Extrair os dados do JSON
$extrair = json_decode($obterDados);


//Separar os Dados do JSON
$idCurso = $extrair->cursos->idCurso;

//SQL
$sql = "DELETE FROM cursos WHERE idCurso=$idCurso";
mysqli_query($conexao, $sql);



?>