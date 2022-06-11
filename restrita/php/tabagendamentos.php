<?php

    //conecta ao banco de dados
    require("../php/conexao.php");

    //trata as variáveis de busca

    $strWhereCodigo = '';
    $strWhereCPF    = '';
    $strWhereFantasia   = '';

    if(isset($_GET["buscacli"])){

        if ($_GET["codcli"] != ""){
            $strWhereCodigo = 'AND A.CODIGO = "'.$_GET["codcli"].'"';
        }

        if ($_GET["nome"] != ""){
            $strWhereFantasia = 'AND upper(C.FANTASIA) LIKE "%'.$_GET["nome"].'%"';
        }

        if ($_GET["cpf"] != ""){
            $strWhereCPF = 'AND C.CPF = "'.$_GET["cpf"].'"';
        }

    }

    $strQuerySQL = 
        "SELECT
            A.*, C.FANTASIA, C.CPF
        FROM
            AGENDAMENTOS A
            LEFT JOIN CLIENTE C ON A.CODIGO = C.CODIGO
        WHERE 1=1
            $strWhereCodigo
            $strWhereFantasia
            $strWhereCPF
            AND A.DTEXCLUSAO IS NULL
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
                    <th>Plano</th>
                    <th>Doutor</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>Observacao</th>
                    <th></th>
                </tr>
            
            ";

        while($row = mysqli_fetch_assoc($registros)){
            
            echo "
            <tr>
                <td>{$row['CODIGO']}</td>
                <td>{$row['FANTASIA']}</td>
                <td>{$row['CPF']}</td>
                <td>{$row['PLANO']}</td>
                <td>{$row['DOUTOR']}</td>
                <td>{$row['TELEFONE']}</td>
                <td>{$row['EMAIL']}</td>
                <td>{$row['OBSERVACAO']}</td>
                <td><a href=\"php\apagaragend.php?codagend={$row['CODAGEND']}\"><button type=\"button\" class = \"btn-vm\">Apagar</button></a>
            </tr>
            ";

        }

        echo "</table>";
    }else{
  
    echo "Nenhum agendamento para exibir.";

    }


?>	