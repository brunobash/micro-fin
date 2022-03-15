<?php
/*
Essa classe representa o modelo da tabela 
DTO - Data Transfer Object
*/
class UsuarioDTO{
    private $idUsuario;
    private $login;
    private $senha;

    public function getIdUsuario(){
        return $this->idUsuario;
    }
    public function getLogin(){
        return $this->login;
    }
    public function getSenha(){
        return $this->senha;
    }
    public function setIdUsuario($idUsuario){
        $this->idUsuario = $idUsuario;
    }
    public function setLogin($login){
        $this->login = $login;
    }
}















?>