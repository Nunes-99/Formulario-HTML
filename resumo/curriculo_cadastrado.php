<html>  <!-- apresentação do modelo do curriculo-->
    <!-- VITOR ROBERTO NUNES    RA: 00097747 -->
    <head> <!-- cabeça da pagina ou cabeçalho, nela tambem transportamos dados css e javascript-->
        <title> Curriculo</title>  <!-- titulo da pagina -->

    </head>

    <body> <!-- corpo da pagina -->
        <form> <!-- criando uma estrutura de formulario  -->
            <?php 
            include '../formulario/pagina_cadastro/conexao.php';
            //ja esta informado na pagina cadastro.php
            session_start(); print_r($_SESSION);?>


        <div id="menu1" > <!-- os ids sao utilizados no caso de houver alguma alteração nas caracteristicas dos codigos, como h1 por exemplo -->
            <!-- a tag <a> é utilizada para redirecionar uma palavra para um site-->
            
            <?php if($_SESSION['usuario']){?>

            <a href="#">Principal</a> <!-- ao cliclar nesta palavra, o usuario entraria na pagina principal -->
            <a href="#">Pesquise</a> <!-- ao clilar nesta palavra o usuario iria poder fazer uma busca -->
            <a href="modelo_curriculo.html">Modelo Curriculo</a> <!-- ao clicar nesta palavra o usuario entraria em uma pagina onde estaria o modelo de um curriculo ja com as informaçoes preenchidas-->
            <a href="Cadastro.html">Cadastrar Curriculo</a> <!-- ao clicar nesta palavra o usuario iria fazer o cadastro de seu curriculo -->
            <a href="http://localhost/formulario/login/logout.php" style="float: right;">Logout</a>

            <?php } ?>

            <?php if(!$_SESSION['usuario']){?>

            <a href="http://localhost/formulario/login/login.php" style="float: right;">Login</a> <!-- o usuario iria entrar em seu login ao clicar nesta palavra-->
            
            <?php } ?>
            

        <center><h1><b>Vitor Roberto Nunes</b><h1\></center>
                        <!-- centralizando uma imagem que ao clicar nela ira levar o usuario a pagina de cadastro  -->
        <center><a 
            href="avatar.jpg" 
            target="_blank">
            <img src="Cadastro.html" alt="imagem"  width="350" height="350"/>
        </a></center>

        <p><h2> Dados pessoais</h2></p>
        <?php 
                //todos os dados que o usuario cadastrou no banco de dados serao retornados aqui
                //aqui seão retornados os dados pessoais, o email do linkdin e o telefone de contato
        include '../formulario/pagina_cadastro/dados_pessoais/dados_pessoais.php';
        include '../formulario/pagina_cadastro/linkdin/linkdin.php';
        include '../formulario/pagina_cadastro/telefone_de_contato/telefone_de_contato.php';

        ?>

        <p><h2> Email</h2></p>
        <?php 
        //todos os dados que o usuario cadastrou no banco de dados serao retornados aqui
        // aqui sera retornado o email
        include '../formulario/pagina_cadastro/email/email.php'; 
        
        ?>

        <p><h2> Resumo</h2></p> <!-- apresentação do titulo com um enfase na qual utiliza a tag h2-->
        <?php 
         //todos os dados que o usuario cadastrou no banco de dados serao retornados aqui
        //será retornado as informaçoes fornecidas pelo usuario na pagina de apresentação
        include '../formulario/pagina_cadastro/apresentacao/apresentacao.php'; 
        
        ?>
    
        <p><h2>Experiencia Profissional</h2></p>
        <?php 
        //todos os dados que o usuario cadastrou no banco de dados serao retornados aqui
        //será retornado as informaçoes fornecidas pelo usuario na pagina de experiencia_profissional
        include '../formulario/pagina_cadastro/experiencia_profissional/experiencia_profissional.php'; 
        
        ?>
            
        <p><h2>Formação</h2></p>
        <?php 
        //todos os dados que o usuario cadastrou no banco de dados serao retornados aqui
        //será retornado as informaçoes fornecidas pelo usuario na pagina de formacao_academica
        include '../formulario/pagina_cadastro/formacao_academica/formacao_academica.php'; 
        
        ?>

        <p><h2>Idioma</h2></p>
        <?php 
        //todos os dados que o usuario cadastrou no banco de dados serao retornados aqui
        //será retornado as informaçoes fornecidas pelo usuario na pagina de idioma
        include '../formulario/pagina_cadastro/idioma/idioma.php'; 
        
        ?>

            <p></p>
            <p></p>

            <a href="Cadastro.html">CADASTRE-SE</a> <!-- ao clicar nesta palavra levara o usuario a pagina de cadastro-->




                
        </form>

    </body>
</html>
