<?php 
    include("./conexaoBanco.php");
    
    $id= $_POST['func_id'];
    $cpf= $_POST['cpf'];
    $nome= $_POST['nome'];
    $funcao= $_POST['funcao'];
    //$foto= $_POST['foto'];
    
    $conexao=  ConexaoBanco::getConexao();

    //$sqlFunc= $conexao->prepare("UPDATE tb_funcionario SET cpf= :c, nome= :n, funcao= :f, foto= :t where id= :i");
    $sqlFunc= $conexao->prepare("UPDATE tb_funcionario SET cpf= :c, nome= :n, funcao= :f where id= :i");
    $sqlFunc-> bindValue(':c', $cpf, PDO::PARAM_INT);    
    $sqlFunc-> bindValue(':n', $nome, PDO::PARAM_STR);
    $sqlFunc-> bindValue(':f', $funcao, PDO::PARAM_STR);
    //$sqlFunc-> bindValue(':t', $foto, PDO::PARAM_INT);
    $sqlFunc-> bindValue(':i', $id, PDO::PARAM_INT);
     
    if($sqlFunc-> execute()){
           //$id= $conexao-> lastInsertId();
        header("location: ../view/cadastrados.php");
            //echo "Executou";
    }else{
        //header("location: ../view/editar.php");            
            //echo "Não Executou";
    }
    die();
?>