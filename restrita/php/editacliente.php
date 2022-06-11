<?php

    //echo "<script>alert('Voce já está cadastrado na Escola ALEA!!\\nSeu R.A. É: $ra.'); document.location = \"login.php\";</script>";

    if(isset($_POST["editclient"])){

        $CPF           = $_POST["cpf"];
        $FANTASIA      = $_POST["fantasia"];
        $DTNASC        = $_POST["dtnasc"];

        $ENDERECO      = $_POST["endereco"];
        $NUMERO        = $_POST["numero"];
        $COMPLEMENTO   = $_POST["complem"];
        $BAIRRO        = $_POST["bairro"];
        $CIDADE        = $_POST["cidade"];
        $ESTADO        = $_POST["estado"];
        $PAIS          = $_POST["pais"];

        $ENDERECO = str_replace(",", "", $ENDERECO);
        $CIDADE = str_replace(",", "", $CIDADE);

        $sqlUpdate = "UPDATE CLIENTE SET FANTASIA = '$FANTASIA', CPF = '$CPF', ENDERECO = '$ENDERECO', NUMERO = '$NUMERO',
        DTNASC = STR_TO_DATE('$DTNASC', '%Y-%m-%d'),
        COMPLEMENTO = '$COMPLEMENTO',
        BAIRRO = '$BAIRRO',
        CIDADE = '$CIDADE',
        ESTADO = '$ESTADO',
        PAIS = '$PAIS'
        
        WHERE CODIGO = '$codcli';";
        
        require("../php/conexao.php");

        //echo "$sqlUpdate";

        mysqli_query($conn,$sqlUpdate);

        mysqli_close($conn);

        echo "<script>alert('Cliente $codcli - $fantasia editado com sucesso!!');</script>";
        echo "<script>document.location='editcliente.php?codcli=$codcli';</script>";
    }

?>