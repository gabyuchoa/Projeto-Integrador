<?php
    session_start();

    //$codtipouser = "ok";

    if(!isset($_SESSION['tipo'])){
        echo "<script>alert('Faça o login!'); document.location = \"index.php\";</script>";
    }else{
        $tipouser = $_SESSION['tipo'];
    };
?>