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

        <section>
            <p> Sistema desenvolvido para efetuar operações básicas CRUD de funcionários de uma empresa. </p>
            <br>
            <p> Tecnologias utilizadas: Ferramenta Wamp Server com HTML, CSS, PHP, Mysql embutidos </p>
        </section>
        <br><br>
        <section class="sec">
            <h3> Cadastrar Telefone</h3><br>
            <form action="../controller/adicionarTelDTO.php" method="POST">
            <?php $abc= filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
            ?>
                <label> Telefone: (DDD e número) </label><br>
                <?php echo "<input name='funcionario_id' value='".$abc."' type='hidden'>";?>
                <input name="ddd" placeholder="XX" required="true">  <br><br>
                <input name="numero" placeholder="XXXXXXXXX" required="true"><br><br>

                <button type="submit"> <b> Adicionar </b> </button>
            </form>
            <br>
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