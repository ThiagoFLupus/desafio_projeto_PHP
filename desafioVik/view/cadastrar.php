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
            <p> Tecnologias utilizadas: Ferramenta Wamp Server com HTML, CSS, PHP, Mysql embutidos </p><br>
        </section>
        <h3> Cadastrar Funcionário </h3>
        <br><br>
        <section class="sec">
            <form action="../controller/envioDTO.php" method="POST" enctype="multipart/form-data">
                <label> CPF:<span class="obrig">*</span> </label><br>
                <input name="cpf" placeholder="CPF do funcionário - Apenas números" required="true"><br><br>

                <label> Nome:<span class="obrig">*</span> </label><br>
                <input name="nome" placeholder="Digite seu nome" required="true"><br><br>

                <label> Função:<span class="obrig">*</span> </label><br>
                <input name="funcao" placeholder="Função do funcionário" required="true"><br><br>

                <label> Foto:<span class="obrig">*</span> </label><br>
                <input name="foto" type="file" required="true"><br><br>

                <button type="submit"> <b> Cadastrar </b> </button>
            </form>
            <br>
            <br><br>
            <button type="button"> <a href="./index.php"> <b> Home </b> </a> </button>
        </section>
        <br><br><br><br>
    </div>
 
	<footer>
	    <p>Funcionarios - System©</p>
	</footer>
</body>
</html>