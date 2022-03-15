<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Cadastrar Pagamento</title>
    <style>
        *{
            font-family: Candara;
        }
        body{
            background-color: whitesmoke;
        }
        form{
            background-color: #144942;;
            width: 350px;
            margin: 100px auto;
            padding-top: 5px;
            padding-bottom: 5px;
            border-radius: 10px;
        }
        h1{
            color: whitesmoke;
            text-align: center;
        }
        input{
            display: block;
            width: 300px;
            padding: 10px;
            outline: none;
            margin: 15px;
        }
        #cadastro{
            width: 325px;
        }
    </style>
</head>
<body>
    <form action="clientesCadastrados.php" method="POST">
        <h1>Cadastrar Cliente</h1>
        <input type="text" name="nome" maxlength="100" placeholder="Nome do Cliente">
        <input type="text" name="desc" maxlength="100" placeholder="Contato">
        <input type="text" name="valor" maxlength="12" placeholder="Dívida">
        <input type="text" name="recebimento" placeholder="Data de Recebimento">
        <input type="submit" id="cadastrar" value="Cadastrar"> 
    </form>
</body>
</html>