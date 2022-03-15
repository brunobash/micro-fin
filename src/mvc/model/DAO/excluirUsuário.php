<?php
require_once "../model/DAO/UsuarioDAO.php";
$id = $_GET["id"];
$usuarioDAO = new UsuarioDAO();
$retorno = $usuarioDAO->excluirPorId($id);

?>
