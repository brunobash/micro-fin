<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #12091d;
  }

  li {
    float: left;
  }

  li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }

  li a:hover:not(.active) {
    background-color: #363360;
    ;
  }

  .active {
    background-color: #1aafb7;
  }

  /********************* FORM ***************************************/
  form {
    margin-top: 30px;
    border-radius: 10px;
    background-color: #EAE2B6;
  }

  /* Full-width inputs */
  input[type=text],
  input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-sizing: border-box;
  }

  /* Set a style for all buttons */
  button {
    background-color: #558776;
    color: white;
    padding: 14px 20px;
    margin: auto;
    display: block;
    border-radius: 20px; 
    cursor: pointer;
    width: 50%;
  }

  /* Add a hover effect for buttons */
  button:hover {
    opacity: 0.8;
  }

  .formulario{
    margin-left: auto;
    margin-right: auto;
  }
  /* Add padding to containers */
  .container {
    padding: 16px;
    width: 90%;
    margin-left: auto;
    margin-right: auto;
  }

  /* The "Forgot password" text */
  span.psw {
    float: right;
    padding-top: 16px;
  }

  /* Change styles for span and cancel button on extra small screens */
  @media screen and (max-width: 300px) {
    span.psw {
      display: block;
      float: none;
    }

    .cancelbtn {
      width: 100%;
    }
  }
</style>

<body>
  <div>
    <ul>
      <li><a href="index.html">LOGO</a></li>
      <li style="float:right"><a class="active" href="cadastro.php">Cadastrar</a></li>
      <li style="float:right"><a href="login.php">Entrar</a></li>
    </ul>
  </div>
  <div class="conteudo">
    <div class="formulario">
      <form action="home.php" method="post">
        <div class="container">
          <label for="uname"><b>E-mail</b></label>
          <input type="text" placeholder="Seu nome de usuário" name="uname" required>

          <label for="psw"><b>Senha</b></label>
          <input type="password" placeholder="Sua senha" name="psw" required>
          <label for="psw"><b>Confirmar senha</b></label>
          <input type="password" placeholder="Confrime sua senha" name="psw" required>  
          <button type="submit">Confirmar Cadastro</button>
          <div class="container">
            <span class="psw">Já tem uma <a href="login.php">conta?</a></span>
          </div>

        </div>


      </form>
    </div>
  </div>

</body>

</html>