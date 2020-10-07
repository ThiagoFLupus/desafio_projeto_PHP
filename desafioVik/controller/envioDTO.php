<?php
    require('./conexaoBanco.php');
   //require('../model/funcionario.php');
    //require('../model/telefone.php');

    $cpf= $_POST['cpf'];
    $nome= $_POST['nome'];
    $funcao= $_POST['funcao'];
    $fotoArquivo= $_FILES['foto']['tmp_name'];
    $fotoNome= $_FILES['foto']['name'];


    if($cpf != null && $nome != null && $funcao != null && $fotoArquivo != null){

        $conexao=  ConexaoBanco::getConexao();
        //var_dump($conexao);

        $sqMax= $conexao-> prepare("SELECT MAX(id) + 1 as max FROM tb_funcionario");

        if($sqMax-> execute()){
            $MaxId= $sqMax-> fetch();
            echo $MaxId['max'];
            echo "<br>";
            if($MaxId['max'] != null){
                $fotoNome= $MaxId['max']."_".$fotoNome;
            } else {
                $fotoNome= "1_".$fotoNome;
            }

            $sqlFunc= $conexao->prepare("INSERT INTO tb_funcionario (cpf, nome, funcao, foto) VALUES (:c, :n, :f, :t)");
            $sqlFunc-> bindValue(':c', $cpf, PDO::PARAM_INT);
            $sqlFunc-> bindValue(':n', $nome, PDO::PARAM_STR);
            $sqlFunc-> bindValue(':f', $funcao, PDO::PARAM_STR);
            $sqlFunc-> bindValue(':t', $fotoNome, PDO::PARAM_STR);
        
            if($sqlFunc-> execute()){
                $id= $conexao-> lastInsertId();
                move_uploaded_file($fotoArquivo, '../Imagens/'.$fotoNome);
                header("location: ../view/adicionarTelefone.php?id=".$id);
                //echo "<br> ok";
            }else{
                header("location: ../view/cadastrar.php");
            }
            die();
        }
    }
?>