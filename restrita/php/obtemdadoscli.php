<?php
    
$codcli = $_GET["codcli"];

require("../php/conexao.php");

$strQuery = "SELECT * FROM CLIENTE WHERE CODIGO = $codcli";

$objRetornoQuery = mysqli_query($conn, $strQuery);

$arrResultado = mysqli_fetch_assoc($objRetornoQuery);

$cpf = $arrResultado['CPF'];
$dtnasc = $arrResultado['DTNASC'];
$fantasia = $arrResultado['FANTASIA'];
$email = $arrResultado['EMAIL'];

$endereco = $arrResultado['ENDERECO'];
$numero = $arrResultado['NUMERO'];
$complemento = $arrResultado['COMPLEMENTO'];
$bairro = $arrResultado['BAIRRO'];
$cep = $arrResultado['CEP'];
$cidade = $arrResultado['CIDADE'];
$estado = $arrResultado['ESTADO'];
$pais = $arrResultado['PAIS'];


?>

