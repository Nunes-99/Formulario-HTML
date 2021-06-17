<html>
    <!-- VITOR ROBERTO NUNES    RA: 00097747 -->
    <head>
        <title>Cadastro Curriculo</title> <!-- Titulo, exibido na barra no navegador-->
        <link rel="stylesheet" type="text/css" href="css/cabecalho1.css"/> <!-- tranporte das modificações feitas no css-->
        <link rel="stylesheet" type="text/css" href="css/menu1.css"/>
        <link rel="stylesheet" type="text/css" href="css/principal1.css"/>
        <link rel="stylesheet" type="text/css" href="css/conteudo1.css"/>

    </head>



    <body>
        <form id="dados">
        <div id="cabecalho1" >  <!-- a div esta sendo usada para 
            agrupar as informações, separando os elementos e
            organizando o formato da página, preenchendo os espaços disponiveis-->
            <h1>Send Curriculum</h1>  <!-- Titulo da pagina inicial, seria o nome da empresa que cadastra e envia os curriculos -->
            <p>Não perca mais tempo e cadastre agora seu currilo</p>
        </div>

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
            
        </div>

        <p></p><p></p><p>
        
            <div id=conteudo >
            <div class = "coluna_esquerda"> <!-- os seletores class tambem estao sendo utilizados para modificar as caracteristicas de alguns codigos -->
                <div class="card">
                    <h1> Empresa</h1>
                    <p>Noticia sobre a mesma</p>
                </div>
            </div>

            <?php 

            include '../formulario/pagina_cadastro/conexao.php';

             /* Fazemos uma consulta */
            $consulta_locais = "SELECT * FROM local";

            $result = mysqli_query($banco_dados, $consulta_locais); 
            //aqui serao retornados os ids de um resource.

                                /* exibir as informações da tabela na forma de um select */
                                echo "<select name = 'local'>";

                                /* a função mysqli_fetch_array esta sendo utilizada para recuperar as informações
                                da váriavel $result. */
                                while($row = mysqli_fetch_array($result)){
                                
                                    
                                    echo "<option value = '";
                                    echo  $row['id_local'];
                                    echo "'>";
                                    echo $row['descricao'];
                                    echo "</option>";                                    
                                    
                                }

                                echo "</select>";
                                mysqli_close($banco_dados);
                            
                            ?>


            <div id=conteudo >
                <div class = "coluna_esquerda"> <!-- a class coluna_esquerda coloca todas as informaçoes ali presentes no campo do lado esquerdo da pagina -->
                    <div class="card">     <!-- o center esta centralizando a imagem na pagina, de acordo com a estrutura -->
                        <center><a href="avatar.jpg"   
                            target="_blank">
                            <img src="Cadastro.html" alt="imagem"  width="350" height="350"/> <!--utilização da tag img para inserir uma imagem, ao clicar nela o usuario é dirigido a pagina de cadastro-->
                        </a></center>
                    </div>
                </div>

            



        </div>


    </form>

    </body>


</html>