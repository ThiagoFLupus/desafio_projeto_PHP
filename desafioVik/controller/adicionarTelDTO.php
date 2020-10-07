<?php 
    include("./conexaoBanco.php");
    
    $funcionario_id= $_POST['funcionario_id'];
    $ddd= $_POST['ddd'];
    $numero= $_POST['numero'];

    if ($funcionario_id != null && $ddd != null && $numero != null){
        $conexao=  ConexaoBanco::getConexao();

        $sqlTel= $conexao->prepare("INSERT INTO tb_telefone (ddd, numero, funcionario_id) VALUES (:d, :n, :f)");
        $sqlTel-> bindValue(':d', $ddd, PDO::PARAM_INT);
        $sqlTel-> bindValue(':n', $numero, PDO::PARAM_INT);
        $sqlTel-> bindValue(':f', $funcionario_id, PDO::PARAM_INT);
     
        if($sqlTel-> execute()){
            //$id= $conexao-> lastInsertId();
            header("location: ../view/cadastrados.php");
            //echo "Executou";
        }else{
            header("location: ../view/adicionarTelefone.php");            
            //echo "Não Executou";
        }
        die();
    }
?>