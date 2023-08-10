<?php
class Usuario{
    public $email;
    public $senha;
    public $nome;

    function set_email($email){
        $this->email = $email;
    }
    function get_email(){
        return $this->email;
    }

    function set_senha($senha){
        $this->senha = $senha;
    }
    function get_senha(){
        return $this->senha;
    }

    function set_nome($nome){
        $this->nome = $nome;
    }
    function get_nome(){
        return $this->nome;
    }
    
}
?>