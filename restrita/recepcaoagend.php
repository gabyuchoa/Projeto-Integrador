<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">

    <!-- <script defer src="js/script.js"></script> -->

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">

    <?php
        require("../php/conexao.php");
        require("../php/validasessao.php");

        $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);

        $strQueryLog = "INSERT INTO LOGACESSO (MAQUINA, DATAHORA, PAGINA) VALUES ('$hostname', SYSDATE(), 'PAGINA DE CONSULTA DE AGENDAMENTOS');";
        $resultado = mysqli_query($conn, $strQueryLog);

        if($tipouser != 1){
            echo "<script>alert('Você não tem permissão para acessar essa página!'); document.location = \"../index.php\";</script>";
        };

        mysqli_close($conn);

    ?>

    <title>Recepção</title>
</head>
<body>
    <div class="box head" style="display: block">
        <h1>Consultar Agendamentos - Recepção</h1>
    </div>

    <div class="box">
        <a href="recepcao.php"><button name="voltar" class="botoes btn-fechar btn-vm">Fechar</button></a>
        <a href="../php/logout.php"><button name="voltar" class="botoes btn-fechar btn-vm">Sair</button></a>
        <form action="" method="get" class="form family">
            <h2 class="family-head">Buscar agendamento por cliente</h2>
            <p class="family-head">Informações do cliente</p>

                Código:
                <input type="text" class="campos codcli" name="codcli" placeholder="..."></input>

                Nome do cliente:
                <input type="text" class="campos nome" name="nome" placeholder="..."></input>

                CPF:
                <input type="text" class="campos cpf" name="cpf" placeholder="..."></input>

            <button name="buscacli" type="submit" class="botoes btn-bl">Buscar</button>
        </form>
    </div>

    <div class="">
        <div class="box">
            <?php
                require("php/tabagendamentos.php");
            ?>
        </div>
    </div>

    <!-- <div class="teste"><button id="show-hide" class="botoes">Menu</button></div> -->
</body>
</html>