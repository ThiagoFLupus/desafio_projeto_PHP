<<?php
    require('./conexaoBanco.php');
    class Abc{
    function listarTudo(){
        $conexao= ConexaoBanco::getConexao();

        $sqlLs= $conexao-> prepare("SELECT id, nome, cpf, funcao from tb_funcionario");
        $sqlLs-> execute();
        $res= $sqlLs->fetchAll(PDO::FETCH_ASSOC);

        return $res;
    }
}
?>