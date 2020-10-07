<!DOCTYPE HTML>
 <html lang="pt-br">
<head>
    <meta charset="iso-8859-1"/>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <title> Funcionários - System </title>
    <link href="./arquivosCSS/geral.css" rel="stylesheet"/>
</head>
<body>
    <div class="faixa-cabecalho">
    </div>
    <div class="painel-principal">
        <header>
            <div class="cabecalho-titulo">
                <h1> Funcionários </h1>
                <br>
                <h3> Gestão de cadastro de funcionários </h3>
                <br><br>
            </div>	    
        </header>
    
        <section>
            <p> Sistema desenvolvido para efetuar operações básicas CRUD de funcionários de uma empresa. </p>
            <br>
            <p> Tecnologias utilizadas: Ferramenta Wamp Server com HTML, CSS, PHP, Mysql embutidos </p><br>
        </section>
        <h3> Funcionários Cadastrados </h3>
        <br><br>
        <?php
            include('../controller/conexaoBanco.php');
            function listarTudo(){
                $conexao= ConexaoBanco::getConexao();

                $sqlLs= $conexao-> prepare("SELECT id, nome, cpf, funcao, foto from tb_funcionario ORDER BY nome");
                $sqlLs-> execute();
                $res= $sqlLs->fetchAll(PDO::FETCH_ASSOC);

/*
                $sqlLs= $conexao-> prepare("SELECT f.id, f.nome, f.cpf, f.funcao, f.foto, t.ddd, t.numero from tb_funcionario f left join tb_telefone t on f.id= t.funcionario_id ORDER BY f.nome");
                $sqlLs-> execute();
                $res= $sqlLs->fetchAll(PDO::FETCH_ASSOC);
*/
                return $res;
            }
            //var_dump(listarTudo());
        ?>
        
        <div class="sec">
        
     
            <?php foreach( listarTudo() as $re): 
                //var_dump(listarTudo());
                echo "<article>";
                echo '<div><img src="../Imagens/'.$re['foto'].'" width= "100px" height= "100px"/></div><br>';
                echo "<label> CPF: ".$re['cpf']."</label><br>";
                echo "<label> Nome: ".$re['nome']."</label><br>";
                echo "<label> Função: ".$re['funcao']."</label><br>";


                $conn= ConexaoBanco::getConexao();
                $sqlLs= $conn-> prepare("SELECT id, ddd, numero FROM tb_telefone WHERE funcionario_id = :i ORDER BY numero");
                $sqlLs-> bindValue(':i', $re['id'], PDO::PARAM_INT);
                $sqlLs-> execute();
                $resp= $sqlLs->fetchAll(PDO::FETCH_ASSOC);

                foreach($resp as $tl):
                    echo "<label> Tel: ".$tl['ddd']." ".$tl['numero']."</label> ";
                    echo '<a href="../controller/excluirTelDTO.php?id='.$tl['id'].'" style="color: red; font-size: 10px"> EXCLUIR </a><br>';
                endforeach;


                echo "<button class='btn-edit'> <a href='./adicionarTelefone.php?id=".$re['id']."'> Adicionar telefone </a> </button><br><br>";
                echo "<button class='btn-edit'> <a href='./editar.php?id=".$re['id']."'> Editar </a> </button><br><br>";
                echo "<button class='btn-exc'> <a href='../controller/excluiDTO.php?id=".$re['id']."'> Excluir </a> </button><br><br>";
                echo "<hr style='background: black; height: 2px;'>";
                echo "<br><br>";
                echo "</article>";
             endforeach  ?>

            <button type="button"> <a href="./index.php"> <b> Home </b> </a> </button>
        </div>
        <br><br><br><br>



    </div>
 
	<footer>
	    <p>Funcionarios - System©</p>
	</footer>
</body>
</html>