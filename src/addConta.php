<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Cadastrar Conta</title>
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
    <form action="">
        <h1>Cadastrar Conta</h1>
        <input type="text" name="tipo" maxlength="100" placeholder="Tipo">
        <input type="text" name="desc" maxlength="100" placeholder="Descrição">
        <input type="text" name="valor" maxlength="12" placeholder="Valor">
        <input type="date" name="validade" >
        <input type="submit" name="cadastrar" id="cadastro"> 
    </form>
</body>
</html>