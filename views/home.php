
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/styles.css">
    <title>Home Page</title>
    <style>
        
        a{
            text-decoration: none;
        }
        #mes{
            font-size: 40px;
            margin-left: 390px;
        }
        #box{
            background-color: gray;
        }
        .month{
            background-color: #d1ef63;
            padding: 5px 12px;
            width: 100px;
            text-align: center;
            margin: 10px;
            border-radius: 5px;
            float: left;
        }
        .month:hover{
            background-color: #54b216;
        }
    </style>
</head>

<body>
    <header>
        <h1 class="h1-class">hello world</h1>
    </header>

    <div class="sidebar">
        <ul>
            <li><a class="active" href="home.html">Home</a></li>
            <li><a href="clientes.html">Clientes</a></li>
            <li><a href="contasPagar.html">Contas a pagar</a></li>
            <li><a href="estoque.html">Estoque</a></li>
            <li><a href="pagamentos.html">Pagamentos</a></li>
        </ul>
    </div>
    <div class="main">
        <h1>Bem-Vindo, Usuário!
            <!-- variavel que chama o no me do user-->
        </h1>
        <br>
        
        
            <h2 id="mes">Meses</h2>
        <div class="calender">
            <div id="box">
                <a class="a1" href="#">
                    <div class="month">
                        <h2>Janeiro</h2>
                    </div>
                </a>
            </div>
            <div id="box">
                <a class="a1" href="">
                    <div class="month">
                        <h2>Fevereiro<h2>
                    </div>
                </a>
            </div>
            <div id="box">
                <a class="a1" href="">
                    <div class="month">
                        <h2>Março<h2>
                    </div>
                </a>
            </div>
            <div id="box">
                <a class="a1" href="">
                    <div class="month">
                        <h2>Abril<h2>
                    </div>
                </a>
            </div>
            <div id="box">
                <a class="a1" href="">
                    <div class="month">
                        <h2>Maio<h2>
                    </div>
                </a>
            </div>
            <div id="box">
                <a class="a1" href="">
                    <div class="month">
                        <h2>Junho<h2>
                    </div>
                </a>
            </div>
            <div id="box">
                <a class="a1" href="">
                    <div class="month">
                        <h2>Julho<h2>
                    </div>
                </a>
            </div>
            <div id="box">
                <a class="a1" href="">
                    <div class="month">
                        <h2>Agosto<h2>
                    </div>
                </a>
            </div>
            <div id="box">
                <a class="a1" href="">
                    <div class="month">
                        <h2>Setembro<h2>
                    </div>
                </a>
            </div>
            <div id="box">
                <a class="a1" href="">
                    <div class="month">
                        <h2>Outubro<h2>
                    </div>
                </a>
            </div>
            <div id="box">
                <a class="a1" href="">
                    <div class="month">
                        <h2>Novembro<h2>
                    </div>
                </a>
            </div>
            <div id="box">
                <a class="a1" href="">
                    <div class="month">
                        <h2>Dezembro<h2>
                    </div>
                </a>
            </div>
        </div>
    </div>
</body>

</html>