<?php

    class Funcionario{
        var $cpf;
        var $nome;
        var $funcao;
        var $foto;
        var $Telefones;
    

        public function __construct($cpf, $nome, $funcao, $foto){
            $this-> cpf= $cpf;
            $this-> nome= $nome;
            $this-> funcao= $funcao;
            $this-> foto= $foto;
            //$this-> Telefones= $Telefones;
        }
    }
?>