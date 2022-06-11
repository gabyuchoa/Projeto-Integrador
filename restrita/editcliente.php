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

    <script defer src="js/script.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">

    <?php
        require("../php/conexao.php");
        require("../php/validasessao.php");

        $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);

        $strQueryLog = "INSERT INTO LOGACESSO (MAQUINA, DATAHORA, PAGINA) VALUES ('$hostname', SYSDATE(), 'EDITAR CLIENTE ACESSADO');";
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
        <h1>Consultar Clientes - Recepção</h1>
    </div>

    <div class = "box-menu">
        <a href="recepcao.php"><button name="voltar" class="botoes btn-fechar btn-vm">Fechar</button></a>
        <a href="../php/logout.php"><button name="voltar" class="botoes btn-fechar btn-vm">Sair</button></a>
        <form action="" method="post" class="form family">

        <?php
        try {
            require("php/obtemdadoscli.php");
        }catch(Exception $e){
            echo "<br>Nenhum cliente foi selecionado!";
        }
        ?>
            <h2 class="family-head">Agendamentos</h2>

            <table class="family clientes">
                    <tr>
                        <td>Ultima visita:</td>
                        <th><input type="date" class="campos" name="codigo" value="<?php  ?>" disabled></input></th>
                    </tr>

                    <tr>
                        <th>Próxima visita:</th>
                        <th><input type="date" class="campos" name="fantasia" value="<?php ?>" disabled></input><br></th>
                    </tr>
                    <tr>
                        <th><a href="agendarrecep.php?codcli=<?php echo $codcli ?>" class="botoes btn-vd btn-vm">Agendar</a></th>
                    </tr>
                </table>

            <h2 class="family-head">Alterar/Visualizar cadastro de cliente</h2>
            <h3>Dados do Cliente</h3>
            <div>
                <table class="family clientes">
                    <tr>
                        <td>Código:</td>
                        <th><input type="text" class="campos codcli" name="codigo" value="<?php echo $codcli ?>" disabled></input></th>
                    </tr>

                    <tr>
                        <th>Cliente:</th>
                        <th><input type="text" class="campos" name="fantasia" value="<?php echo $fantasia ?>" required></input><br></th>
                    </tr>

                    <tr>
                        <th>CPF:</th>
                        <th><input type="text" class="campos" name="cpf" value="<?php echo $cpf ?>" required></input><br></th>
                    </tr>

                    <tr>
                        <th>Data de Nascimento:</th>
                        <th><input type="date" class="campos" name="dtnasc" value="<?php echo $dtnasc ?>" required></input><br></th>
                    </tr>

                </table>
            </div>

            <h3>Endereço</h3>
            <div>
                <table class="family clientes">
                    <tr>
                        <th>Endereço:</th>
                        <th><input type="text" class="campos" name="endereco" value="<?php echo $endereco ?>"></input><br></th>

                    <tr>
                        <th>Número:</th>
                        <th><input type="text" class="campos" name="numero" value="<?php echo $numero ?>" required></input><br></th>
                    </tr>

                    <tr>
                        <th>Complemento:</th>
                        <th><input type="text" class="campos" name="complem" value="<?php echo $complemento ?>"></input><br></th>
                    </tr>

                    <tr>
                        <th>Bairro:</th>
                        <th><input type="text" class="campos" name="bairro" value="<?php echo $bairro ?>" required></input><br></th>
                    </tr>

                    <tr>
                        <th>CEP:</th>
                        <th><input type="text" class="campos" name="cep" value="<?php echo $cep ?>" required></input><br></th>
                    </tr>

                    <tr>
                        <th>Cidade:</th>
                        <th><input type="text" class="campos" name="cidade" value="<?php echo $cidade ?>" required></input><br></th>
                    </tr>

                    <tr>
                        <th>Estado:</th>
                        <th><input type="text" class="campos" name="estado" value="<?php echo $estado ?>" required></input><br></th>
                    </tr>

                    <tr>
                        <th>País:</th>
                        <th><input type="text" class="campos" name="pais" value="<?php echo $pais ?>" required></input><br></th>
                    </tr>
                </table>
            </div>

            <button type="submit" name="editclient" class="botoes btn-vd">Salvar</button>

            <?php require("php/editacliente.php"); ?>

        </form>
        
    </div>
</body>
</html>