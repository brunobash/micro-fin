<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Clientes</title>
    <style>
        #content{
            margin-left: 400px;
        }
        h1{
            margin: auto;
            margin-left: 350px;
        }
        #adic{
            margin-top: 45px;
            margin-left: -50px;

        }
        #adic-link{
            text-decoration: none;
        }
        .btn {
        
        border: 2px solid black;
        border-radius: 5px;
        background-color: white;
        color: black;
        padding: 14px 28px;
        font-size: 16px;
        cursor: pointer;
        }

        /* Green */
        .green {
        border-color: #04AA6D;
        color: green;
        }

        .green:hover {
        background-color: #54b216;
        color: white;
        }
        h1{
            margin: auto;
            margin-left: 600px;
        }
        table{
            margin: auto;
            color: black;
            border-collapse: collapse;
            background-color: burlywood;
        }
        td{
            width: 150px;
            font-size: 12pt;
            
        }
        tr:hover{
            background-color: #ffffb8;
        }
        .title{
            background-color: cadetblue;
        }
        .adic{
            text-align: center;
            margin:0px 0px 10px 300px ;
            margin-top: 10px;
            width: 50px;
            background-color: black;
            color: white;   
            font-size: 15pt;
            border-radius: 5px;
        }
        .adic:hover{
            background-color: gray;
            cursor: pointer;
        }
        .delete{
            display: block;
            background-color: black;
            width: 25px;
            text-align: center;
            padding: 5px;
            border-radius: 5px;
        }
        #del-minus{
            color: white;
        }
        .delete:hover{
            background-color: gray;
            cursor: pointer;
        }
        .rodape:hover{
            background-color: burlywood;
        }
        b{
            background-color: whitesmoke;
            border-radius: 3px;
            padding: 2px;
        }
        h3{
            color: #12091d;
            width: 100px;
            margin: 50px auto ;
            padding: 10px;
            text-align: center;
            border-radius: 5px;
        }
        #verde{
            background-color: greenyellow;
        }
        #vermelho{
            background-color: red;
        }
    </style>
</head>
<body>
    <div id="sidebar">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a class="active" href="clientes.php">Clientes</a></li>
            <li><a href="contasPagar.php">Contas a pagar</a></li>
            <li><a href="estoque.php">Estoque</a></li>
            <li><a href="pagamentos.php">Pagamentos</a></li>
        </ul>
    </div>

    <div id="content">
        <h1>Clientes</h1>
        
       <div id="adic">
       <a id="adic-link" href="clienteCad.php"><button class="btn green">Adicionar Cliente</button></a>
       </div>

       <table>
            <tr>
                <td class="title"></td>
                <td class="title">Nome</td>
                <td class="title">Contato</td>
                <td class="title">Dívida(R$)</td>
                <td class="title">Data de Recebimento</td>
                <td class="title"></td>
            </tr>
            <tr>
                <td class="delete"><a href="" id="del-minus">-</a></td>
                <td>Luiza</td>
                <td>(55) 95555-5555</td>
                <td>100,00</td>
                <td>20/12/2021</td>
                <td><a href="editarCliente.php">Editar</a></td>
            </tr>

            <tr class="rodape">
                <td class="delete"><a href="" id="del-minus">-</a></td>
                <td>Sandro</td>
                <td>555</td>
                <td class="rodape"><b>70,00</b></td>
                <td>20/01/2022</td>
                <td><a href="editarCliente.php">Editar</a></td>
            </tr>
        </table>
            

        <h3 id="verde">Saldo Total: R$ 170,00</h3>
    </div>
</body>

</html>