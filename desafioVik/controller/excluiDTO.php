<?php
    include('./conexaoBanco.php');

        if ($_GET['id'] != null){
            $abc= $_GET['id'];

            $conexao= ConexaoBanco::getConexao();
            $sqlT= $conexao-> prepare("DELETE FROM tb_telefone WHERE funcionario_id = :i");
            $sqlT-> bindValue(':i', $abc, PDO::PARAM_INT);
            $sqlT-> execute();

            $sqlF= $conexao-> prepare("DELETE FROM tb_funcionario WHERE id = :i");
            $sqlF-> bindValue(':i', $abc, PDO::PARAM_INT);
            $sqlF-> execute();
         }

        header("location: ../view/cadastrados.php");
        die();
?>