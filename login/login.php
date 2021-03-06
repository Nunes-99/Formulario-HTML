<html>
    <head>
        <title>LOGIN</title> <!-- Titulo, exibido na barra no navegador-->
        <link rel="stylesheet" type="text/css" href="../css/cabecalho1.css"/> <!-- tranporte das modificações feitas no css-->
        <link rel="stylesheet" type="text/css" href="../css/menu1.css"/>
        <link rel="stylesheet" type="text/css" href="../css/principal1.css"/>
        <link rel="stylesheet" type="text/css" href="../css/conteudo1.css"/>
        
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" src="/js/login.js"></script>

    </head>

    <body>
        <form id=dados method="post" action="cadastro.php">
            <div id="cabecalho1" >  <!-- a div esta sendo usada para 
                agrupar as informações, separando os elementos e
                organizando o formato da página, preenchendo os espaços disponiveis-->
                <h1>Send Curriculum</h1>  <!-- Titulo da pagina inicial, seria o nome da empresa que cadastra e envia os curriculos -->
                <p>Não perca mais tempo e cadastre agora seu currilo</p>
            </div>
    
            <?php 
            
            session_start(); print_r($_SESSION);?>


        <div id="menu1" > <!-- os ids sao utilizados no caso de houver alguma alteração nas caracteristicas dos codigos, como h1 por exemplo -->
            <!-- a tag <a> é utilizada para redirecionar uma palavra para um site-->
            
            <?php if($_SESSION['usuario']){?><!-- se o usuario estiver logado podera ter acesso a todas opçoes, se não fica na pagina inicial até o momento em que logar -->

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

        <div id=conteudo class="row"> 
            <form id=dados method="post" action="cadastro.login">
                <div class="coluna_esquerda">
                    <div class="card">    
                        <h3>Insira um e-mail</h3>                        
                        <p>E-mail: <input id="em_cad" type="text" id="editTexto" name="em_cad"> </p>                        
                    </div> 

                    <div class="card">                    
                        <h3>Insira uma senha</h3>
                        <p>Senha: <input id="senha_cad" type="password" id="senha" name="senha_cad"> </p>
                    </div> 

                    <?php

                            include '../formulario/pagina_cadastro/conexao.php';

                            //recuperamos as informações enviadas pelo usuário no browser
                            

                            $em_cad = $_POST['em_cad'];
                            $senha_cad = $_POST['senha_cad'];

                            echo '<h3>';
                            //echo nos permite modificar a página
                            //exibimos as informações que foram enviadas

                            echo '<p>E-mail: ' . $em_cad;
                            echo '<p>Senha: ' . $senha_cad;

                            echo '</h3>';

                            /*Para inserirmos alguma informação no banco de dados precisamos montar o comando
                            SQL para executar a operação. No caso da inserção de dados, utilizamos o insert. */
                            $query = "INSERT INTO cadastro_curriculo " .
                                    "(" .
                                    "em_cad, senha_cad) " .
                                    "VALUES( " .
                                    "'$em_cad'," . 
                                    "'$senha_cad'," . 
                                    ")";

                            $resultado = mysqli_query($banco_dados, $query);
                            /* Para executar o comando SQL utilizamos o comando mysqli_query. Nele precisamos
                            passar como parametro a conexão com o banco e também passamos a string com o 
                            comando SQL que será executado.*/

                            if($resultado){
                                echo '<br> CADASTRO COM SUCESSO';
                            }else{
                                echo '<br>ERRO';
                            }

                            mysqli_close($banco_dados); //finalizar a conexao com o banco de dados
                            
                        ?>
                </div>

                    <div class = "coluna_esquerda">
                        <p></p>
                        
                            <p><input id="ELOG" type="submit" value="Cadastrar"> </p>
                            <p></p>

                            <p><input id="LLOG" type="reset" value="Limpar"> </p>
                    </div>
            </form>
        </div>
        </form>
        
    </body>

</html>