<?php

    $codcli = $_GET['codcli'];

    if(isset($_POST["plano"])){

        $plano = $_POST['plano'];
        $telefone = $_POST['tel'];
        $doutor = $_POST['doutor'];
        $email = $_POST['email'];
        $data = $_POST['data'];
        $obervacao = $_POST['obs'];


        $sqlInsert = "INSERT INTO AGENDAMENTOS (CODIGO, PLANO, TELEFONE, DOUTOR, EMAIL, DATA, OBSERVACAO) VALUES ('$codcli', '$plano', '$telefone', '$doutor', '$email', STR_TO_DATE('$data', '%Y-%m-%d'), '$obervacao')";

        mysqli_query($conn,$sqlInsert);

        echo "<script>alert('Agendado com sucesso!');</script>";
        header("location: recepcaoagend.php");

    }


?>