<?php

    //se o post for login (login é o name do button submit entrar)
    if(isset($_POST["login"])){

        //solicita a conexão com o banco de dados
        require("conexao.php");

        //obtem do post as credenciais inseridas e atribui as variáveis
        $strUsuario = $_POST['usuario'];
        $strSenha   = $_POST['senha'];

        $strQuery = "SELECT TIPO FROM USUARIOS 
                     WHERE USUARIO = '$strUsuario' AND SENHA = '$strSenha'
                     AND ATIVO = 1
                    ";

        //executa a query conectando ao banco de dados
        $objRetornoQuery = mysqli_query($conn, $strQuery);

       echo "<script>alert('$strQuery');</script>";

        echo "<div class='btn-primary rounded p-3 -5'>";

          if($arrResultado = mysqli_fetch_assoc($objRetornoQuery)){
        //if($arrResultado = true){
            $tipo = $arrResultado['TIPO'];
            echo "Seu tipo de usuário é: ".$tipo."<br>";

            if($tipo == 1){
                session_start();

                $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
                $_SESSION["hostname"] = $hostname;
                $_SESSION["tipo"] = 1;

                $strQueryLog = "INSERT INTO LOGACESSO (MAQUINA, DATAHORA, PAGINA) VALUES ('$hostname', SYSDATE(), 'LOGIN TIPO USER 1');";
                $resultado = mysqli_query($conn, $strQueryLog);

                mysqli_close($conn);

                header("location: restrita/recepcao.php");

            }elseif($tipo == 2){
                session_start();

                $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
                $_SESSION["hostname"] = $hostname;
                $_SESSION["tipo"] = 2;

                $strQueryLog = "INSERT INTO LOGACESSO (MAQUINA, DATAHORA, PAGINA) VALUES ('$hostname', SYSDATE(), 'LOGIN TIPO USER 2')";
                $resultado = mysqli_query($conn, $strQueryLog);

                mysqli_close($conn);

                header("location: restrita/agendarcli.php");

            }else{
                echo "Ocorreu um erro inesperado! Contate o administrador do sistema.";
            };

        }else{
            echo "Senha incorreta! $strQuery ";
        }

        

        echo "</div>";

    }

?>	