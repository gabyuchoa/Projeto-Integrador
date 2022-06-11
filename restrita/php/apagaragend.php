<?php

    require("../../php/conexao.php");

    $codagend = $_GET['codagend'];

    $sqlUpdate = "UPDATE AGENDAMENTOS SET DTEXCLUSAO = SYSDATE() WHERE CODAGEND = $codagend";

    mysqli_query($conn, $sqlUpdate);

    

    header("location: ../recepcaoagend.php");

    mysqli_close($conn);

?>