<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/styles.css">
    <title>Pagamentos</title>
    <style>
        h1{
            margin: auto;
            margin-left: 600px;
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
            <li><a href="home.html">Home</a></li>
            <li><a href="clientes.html">Clientes</a></li>
            <li><a href="contasPagar.html">Contas a pagar</a></li>
            <li><a href="estoque.html">Estoque</a></li>
            <li><a class="active"  href="pagamentos.html">Pagamentos</a></li>
        </ul>
    </div>
    <div id="content">
        <h1>Pagamentos</h1>
            <table id="customers">
                <tr>
                    <td class="title"></td>
                    <td class="title">Tipo</td>
                    <td class="title">Descrição</td>
                    <td class="title">Valor(R$)</td>
                    <td class="title">Data de Recebimento</td>
                </tr>
                <tr>
                    <td class="delete"><a href="" id="del-minus">-</a></td>
                    <td>PIX</td>
                    <td>Luiza</td>
                    <td>175,00</td>
                    <td>20/12/2021</td>
                </tr>

                <tr class="rodape">
                    <td class="delete"><a href="" id="del-minus">-</a></td>
                    <td></td>
                    <td></td>
                    <td class="rodape"><b>175,00</b></td>
                    <td></td>
                </tr>
        </table>

        <a href="addPagamento.php"><div class="adic">+</div></a>
        
        <h3 id="verde">Saldo Total: 00,00</h3>
    </div>
        
</body>

</html>