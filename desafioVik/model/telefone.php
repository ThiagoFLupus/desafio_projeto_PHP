<?php

class Telefone{
    var $id;
    var $ddd;
    var $numero;
    var $funcionario_id;

    public function __construct($ddd, $numero){
        $this-> ddd= $ddd;
        $this-> numero= $numero;
    }
    
}

?>