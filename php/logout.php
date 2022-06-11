<?php
    session_start();
    session_destroy();

    unset($_SESSION["hostname"]);
    unset($_SESSION["tipo"]);

    require("../php/conexao.php");

    $strQueryLog = "INSERT INTO LOGACESSO (MAQUINA, DATAHORA, PAGINA) VALUES ('$hostname', SYSDATE(), 'LOGOFF SESSAO');";
    $resultado = mysqli_query($conn, $strQueryLog);

    mysqli_close($conn);

    header("location: http://dentech.freevar.com/");
?>