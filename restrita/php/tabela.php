<?php

    $hostname = "localhost";
    $database = "test";
    $username = "root";
    $password = "ccrviaquatro";	

    try{
        $conn = mysqli_connect($hostname, $username, $password, $database);
    }catch(Exception $strErrorMessage){
        echo "Não foi possível estabelecer uma conexão com o Banco de Dados. CD01 <br>";
        echo $strErrorMessage;
    }

    if (!$conn){
        echo "Não foi possível estabelecer uma conexão com o Banco de Dados. CD02";
        exit;
    };

    $strQuery = "SELECT * FROM ALUNOS";

    $resultado = mysqli_query($conn,$strQuery);

    while ($row = mysqli_fetch_assoc($resultado)){
        echo $row["nome"];
        echo "<br>";
        
        echo $row["cpf"];
        echo "<br><br>";
    }

    $tab = ["teste" => "ok", "teste1" => "not ok"];


    echo $tab["teste1"];

?>