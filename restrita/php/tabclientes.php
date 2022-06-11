<?php

    //conecta ao banco de dados
    require("../php/conexao.php");

    //trata as variáveis de busca

    $strWhereCodigo = '';
    $strWhereCPF    = '';
    $strWhereFantasia   = '';

    if(isset($_GET["buscacli"])){

        if ($_GET["codcli"] != ""){
            $strWhereCodigo = 'AND CODIGO = "'.$_GET["codcli"].'"';
        }

        if ($_GET["nome"] != ""){
            $strWhereFantasia = 'AND upper(FANTASIA) LIKE "%'.$_GET["nome"].'%"';
        }

        if ($_GET["cpf"] != ""){
            $strWhereCPF = 'AND CPF = "'.$_GET["cpf"].'"';
        }

    }

    $strQuerySQL = 
        "SELECT 
            CODIGO, FANTASIA, CPF, DATE_FORMAT(DTCADASTRO, '%d/%m/%Y') AS DTCADASTRO 
        FROM 
            CLIENTE 
        WHERE 1=1
            $strWhereCodigo
            $strWhereFantasia
            $strWhereCPF
        ORDER BY FANTASIA
        ;";
    
    //echo $strQuerySQL;

    $strQuerySQL_Count = "SELECT COUNT(*) as TOTAL       FROM USUARIOS WHERE ATIVO = 1";

    $registros       = mysqli_query($conn, $strQuerySQL);
    $registros_Count = mysqli_query($conn, $strQuerySQL_Count);

    $row = mysqli_fetch_assoc($registros_Count);

    if($registros && $row['TOTAL'] > 0){

        echo"
            <table class=\"family clientes\">
                <caption class=\"family-head\">Resultado da busca - Clientes<br><br></caption>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Ultima Visita</th>
                    <th>Proxima Visita</th>
                    <th></th>
                </tr>
            
            ";

        while($row = mysqli_fetch_assoc($registros)){
            
            echo "
            <tr>
                <td>{$row['CODIGO']}</td>
                <td>{$row['FANTASIA']}</td>
                <td>{$row['CPF']}</td>
                <td>{$row['DTCADASTRO']}</td>
                <td>{$row['DTCADASTRO']}</td>
                <td><a href=\"editcliente.php?codcli={$row['CODIGO']}\"><button type=\"button\" class = \"botoestable\">Alterar</button></a>
            </tr>
            ";

        }

        echo "</table>";
    }else{
        echo "NÃO <br>";
    }

?>