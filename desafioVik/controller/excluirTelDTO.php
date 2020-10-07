<?php 

    include("./conexaoBanco.php");

    $abc= filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

    $conexao= ConexaoBanco::getConexao();

    $sqlLs= $conexao-> prepare("DELETE FROM tb_telefone WHERE id = :i");
    $sqlLs-> bindValue(':i', $abc, PDO::PARAM_INT);

    if($sqlLs-> execute()){
        header("location: ../view/cadastrados.php");
    }else{
        echo "Error";
    }
?>