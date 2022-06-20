<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <title>Clientes</title>
</head>
<body>

    <header>
        <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. A illo magnam eligendi necessitatibus odio dignissimos consequatur nulla quod. Corrupti molestias aliquam quod. Atque asperiores voluptate dignissimos? Harum nemo doloribus adipisci.
        </p>
        <h1>Header</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus harum, hic voluptas aperiam soluta nobis quasi distinctio rerum neque minus, voluptate nostrum possimus quaerat blanditiis expedita autem reiciendis quod dignissimos?</p>
    </header>

    <div id="sidebar">
        <ul>
            <li><a href="home.html">Home</a></li>
            <li><a class="active" href="clientes.html">Clientes</a></li>
            <li><a href="contasPagar.html">Contas a pagar</a></li>
            <li><a href="estoque.html">Estoque</a></li>
            <li><a href="pagamentos.html">Pagamentos</a></li>
        </ul>
    </div>
    <div id="content">
        <h1 class="title-main">Clientes</h1>
        <table id="customers">
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
                    <td>175,00</td>
                    <td>20/12/2021</td>
                    <td>
                        <div class="table-edit-del" id="popupEdit">
                            <a href="#"><button class="open-button" onclick="openEdit()">Editar</button></a>
                            <a href="#"><button onclick="">Excluir</button></a>
                            <div class="form-popup" id="editForm">
                                <form action="edit.php" class="form-container">
                                    <label for="name"><b>Nome</b></label>
                                    <input type="text" placeholder="Adicione o Nome" name="nome" required>

                                    <label for="contact"><b>Contato</b></label>
                                    <input type="text" placeholder="Adicione o contato" name="contato" required>

                                    <button type="submit" class="btn-submit">Editar</button>
                                    <button type="button" class="btn-cancel" onclick="closeEdit()">Fechar</button>
                                </form>
                            </div>
                        </div>

                    </td>
                </tr>

                <tr class="rodape">
                    <td class="delete"><a href="#" id="del-minus">-</a></td>
                    <td></td>
                    <td></td>
                    <td class="rodape"><b>175,00</b></td>
                    <td></td>
                </tr>
            </table>

            <div id="adic">
                <a id="adic-link" href="clienteCad.php"><button class="btn green">Adicionar Cliente</button></a>
            </div>

            <h3 id="verde">Saldo Total: 00,00</h3>

    </div>
    <script>
        function openEdit(){
            document.getElementById("popupEdit").style.display = "block";
        }

        function closeEdit(){
            document.getElementById("popupEdit").style.display = "none";
        }
    </script>
    <script src="assets/js/script.js"></script>
</body>

</html>
