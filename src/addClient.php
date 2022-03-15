<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Cliente</title>
    <style>
        *{
            font-family: Candara;
        }
        body{
            background-color: whitesmoke
        }
        form{
            background-color: #363360;
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
            border-radius: 10px;
            cursor: pointer;
        }
        #cadastro:hover{
            background-color: #1aafb7;
        }
    </style>
</head>
<body>
    <?php
        
    
    ?>
    <form method="POST" >
        <h1>Cadastrar Cliente</h1>
        <input type="text" name="nome" maxlength="100" placeholder="Nome do Cliente">
        <input type="text" name="num_tel" maxlength="100" placeholder="Número de Telefone">
        <input type="text" name="divida" maxlength="100" placeholder="Dívida">
        <input type="text" name="endereco" maxlength="100" placeholder="Endereço">
        <input type="submit" name="cadastrar" id="cadastro"> 
    </form>
</body>
</html>