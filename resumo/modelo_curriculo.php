<html>  <!-- apresentação do modelo do curriculo-->
    <!-- VITOR ROBERTO NUNES    RA: 00097747 -->
    <head> <!-- cabeça da pagina ou cabeçalho, nela tambem transportamos dados css e javascript-->
        <title> Curriculo</title>  <!-- titulo da pagina -->

    </head>

    <body> <!-- corpo da pagina -->
        <form> <!-- criando uma estrutura de formulario  -->
            <?php 
            include '../formulario/pagina_cadastro/conexao.php';
            //Para exibirmos variaveis de forma legivel para humanos, podemos utilizar a função
            // print_r
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
        <p><h2> Resumo</h2></p> <!-- apresentação do titulo com um enfase na qual utiliza a tag h2-->
        <ul>  <!-- esta tag cria uma lista nao ordenada -->
        <li>Mais de 10 anos de experiencia profissional</li> <!--esta tag esta ordenando as linhas -->
        <li>Bacharel em Engenharia da Computação e</li>
        <li>Mestrado em Engenharia de Softwares</li>

        </ul>

        <p><h2>Experiencia Profissional</h2></p>
            
            <ol> <!-- esta tag esta criando uma lista ordenada -->
            <li><p><h3>Consultor de Tecnologia da Informatica</h3></p></li>
                <p>Consultoria técnica na área de Administração de redes e sistemas de empresas pequenas<br\></p>
                porte.<br\> <!-- esta tag br esta quebrando a linha do texto -->
                Configuração TCP/IP de maquinas, interfaces de rede e roteamento.

            <li><p><h3>Supervisor de Materiais / TI</h3></p></li>
                <P>Supervisionar a área de planejamento de materiais e planejamento de Produção de forma</P><br\>
                a atender os lead times e prazos estipulados.
            </ol>
        <p><h2>Formação</h2></p>
            <dl> <!--utilizando a lista de definição -->
                <dt><p><h3>Graduação em Engenharia da Computação</h3></p></dt> <!-- titulo da lista -->
                    <dd><p>Uniso-Universidade de Sorocaba</p></dd> <!-- definição do titulo -->
                <dt><p><h3>Mestrado em Engenharia de Software</h3></p></dt>
                    <dd><p>Uniso-Universidade de Sorocaba</p></dd>
            </dl>
        <p><h2>Idioma</h2></p>
            <p><b>Inglês - </b>Fluente</p>
                
            <p><b>Espanhol - </b>Intermediario</p>

            <p></p>
            <p></p>

            <a href="Cadastro.html">CADASTRE-SE</a> <!-- ao clicar nesta palavra levara o usuario a pagina de cadastro-->




                
        </form>

    </body>
</html>