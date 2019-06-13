
<?php
// Incluimos o arquivo de validação
include("inc/validacao.php");
 
// Obtemos os dados do formulário
$nome = $_GET["nome"];

 
// Instanciamos a classe
$v = new validacao;
echo $v->validarCampo("Nome", $nome, "25", "2");

/* Caso não haja nenhum erro,
realizamos as ações necessárias com os dados */
if ($v->verifica()) {
echo "Os dados estão OK";
}
?>