<html>
    <!-- VITOR ROBERTO NUNES    RA: 00097747 -->
    <head>
        <title>Cadastro Curriculo</title>
        <link rel="stylesheet" type="text/css" href="css/cabecalho1.css"/> <!-- importando as informaçoes desenvolvidadas na pagina css-->
        <link rel="stylesheet" type="text/css" href="css/menu1.css"/>
        <link rel="stylesheet" type="text/css" href="css/principal1.css"/>
        <link rel="stylesheet" type="text/css" href="css/conteudo1.css"/>
        <link rel="stylesheet" type="text/css" href="css.css" />
        <style> /* a tag style esta sendo utilizada para alterao as configuraçoes destas tag somente nesta pagina*/
            h1{/* modificando as caracteristicas do h1 */
                text-align: center;
                text-decoration-line: overline ;
                text-decoration-style: double;                
            }
            .underline{ /* modificando o texto colocando duas linhas emcima e embaico da palavra */
                text-decoration-line: underline ;
                text-decoration-style: double; 
            }
        </style>

        <style>
            td,tr, th{ /* modificação das linhas, colunas e as palavras do cabeçalho da tabela */
                padding: 15px; /*Espaçamento dentro dos limites do conteudo*/   
                border-style: outset;    
                text-align: center;
                text-emphasis-color: white;
    /*o padding esta dando um espaçamento entre o texto da tabela e a tabela*/ 
                    }

        table{ /* aqui estou modificando a tabela, enquanto sua aparencia, cor, borda entre outras coisas */
            border-width: 3px 3px 3px 3px;
            border-style: solid;
            caption-side: top;
            margin-left: 50px;/*Espaçamento fora do conteúdo*/
            border-color: black;
        }


        </style>


    </head>

    <body>
        <form id="dados">
            <?php 
            include '../formulario/pagina_cadastro/conexao.php'; //Incluindo os comando php atraves do include (no caso a conexao do com o banco de dados)
            
            session_start(); print_r($_SESSION);?> <!-- para utilizar a função $_SESSION devemos chamala pela comando sessino_start()-->


        <div id="menu1" > <!-- os ids sao utilizados no caso de houver alguma alteração nas caracteristicas dos codigos, como h1 por exemplo -->
            <!-- a tag <a> é utilizada para redirecionar uma palavra para um site-->
            
            <?php if($_SESSION['usuario']){?> <!-- se o usuario estiver logado podera ter acesso a todas opçoes, se não fica na pagina inicial até o momento em que logar -->

            <a href="#">Principal</a> <!-- ao cliclar nesta palavra, o usuario entraria na pagina principal -->
            <a href="#">Pesquise</a> <!-- ao clilar nesta palavra o usuario iria poder fazer uma busca -->
            <a href="modelo_curriculo.html">Modelo Curriculo</a> <!-- ao clicar nesta palavra o usuario entraria em uma pagina onde estaria o modelo de um curriculo ja com as informaçoes preenchidas-->
            <a href="Cadastro.html">Cadastrar Curriculo</a> <!-- ao clicar nesta palavra o usuario iria fazer o cadastro de seu curriculo -->
            <a href="http://localhost/formulario/login/logout.php" style="float: right;">Logout</a>

            <?php } ?>

            <?php if(!$_SESSION['usuario']){?>

            <a href="http://localhost/formulario/login/login.php" style="float: right;">Login</a> <!-- o usuario iria entrar em seu login ao clicar nesta palavra-->
            
            <?php } ?>
            
        </div>
        
        <p>
            <table>  <!-- criando e implantando uma tabelade cadastro-->
                <caption><h1><span class = underline >Cadastre-se AQUI</span></h1></caption> <!-- titulo da tabela -->
    
                <tr> <!-- esta tag é utilizada para criar uma linha na tabela -->
                    <th>Dados Pessoais</th> <!-- a tag th utilizada para o cabeçalho da tabela-->
                    <th>Telefone de Contato</th>
                    <th>Email</th>
                    <th>Perfil do linkedin</th>     
                </tr>


                <tr>
                    <td><a href="Dados_Pessoais.html">Cadastre</a></td> <!-- ao clicar na palavra o usuario é encaminhado para a pagina de dados pessoais na qual ira cadastrar suas informações-->
                    <td><a href="telefone_de_contato.html">Cadastre</a></td> <!-- ao clicar na palavra o usuario é encaminhado para a pagina de telefone_de_contato na qual ira cadastrar suas informações-->                   
                    <td><a href="email.html">Cadastre</a></td> <!-- ao clicar na palavra o usuario é encaminhado para a pagina de email na qual ira cadastrar suas informações-->                   
                    <td><a href="linkdin.html">Cadastre</a></td> <!-- ao clicar na palavra o usuario é encaminhado para a pagina do linkdin na qual ira cadastrar suas informações -->              
                    
                </tr>

                
                <table>
                <tr>
                    <th>Resumo/Apresentacao</th> 
                    <th>Experiencia Profissional</th>
                    <th>Formação Academica</th>
                    <th>Idioma</th>        
                </tr>


                <tr>
                    <td><a href="apresentacao.html">Cadastre</a></td> <!-- ao clicar na palavra o usuario é encaminhado para a pagina de apresentação na qual ira cadastrar suas informações-->   
                    <td><a href="experiencia_profissional.html">Cadastre</a></td> <!-- ao clicar na palavra o usuario é encaminhado para a pagina de experiencia_profissional na qual ira cadastrar suas informações-->                   
                    <td><a href="formacao_academica.html">Cadastre</a></td> <!-- ao clicar na palavra o usuario é encaminhado para a pagina de formacao_academica na qual ira cadastrar suas informações-->                   
                    <td><a href="idioma.html">Cadastre</a></td> <!-- ao clicar na palavra o usuario é encaminhado para a pagina de idioma na qual ira cadastrar suas informações-->
                </tr>
                
                
            </form>
    </body>




</html>