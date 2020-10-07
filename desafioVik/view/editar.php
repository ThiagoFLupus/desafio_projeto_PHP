<!DOCTYPE HTML>
 <html lang="pt-br">
<head>
    <meta charset="utf-8"/>
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
        
        <section class="sec">
            <h3> Editar </h3>
            <br>
            <form action="../controller/editDTO.php" method="POST">
                <?php 
                    $abc= filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

                    include("../controller/conexaoBanco.php");
                    $conexao= ConexaoBanco::getConexao();
                    $sqlFunc= $conexao->prepare("SELECT cpf, nome, funcao, foto FROM tb_funcionario WHERE id= :i");
                    $sqlFunc-> bindValue(':i', $abc, PDO::PARAM_INT); 

                    $sqlFunc-> execute();
                    $re= $sqlFunc->fetch(PDO::FETCH_ASSOC);
                ?>
                <?php echo "<input name='func_id' value='".$abc."' type='hidden'>";?>
                <label> CPF: </label><br>
                <input name="cpf" value="<?php echo $re['cpf'] ?> "><br><br>

                <label> Nome: </label><br>
                <input  name="nome" value="<?php echo $re['nome'] ?> "><br><br>

                <label> Função: </label><br>
                <input name="funcao" value="<?php echo $re['funcao'] ?> "><br><br>
                <!--
                <label> Foto: </label><br>
                <input name="foto" type="file"><br><br>-->
                <button type="submit"> <b> Atualizar </b> </button>
            </form>
            
            <br><br>
            <button type="button"> <a href="./cadastrados.php"> <b> Cancelar </b> </a> </button><br><br>
            <button type="button"> <a href="./index.php"> <b> Home </b> </a> </button>
        </section>
        <br><br><br><br>
    </div>
 
	<footer>
	    <p>Funcionarios - System©</p>
	</footer>
</body>
</html>