<hmtl>
    <head>
        <title>Telefone_Cadastro</title>
        <link rel="stylesheet" type="text/css" href="../css/cabecalho1.css"/> <!-- tranporte das modificações feitas no css-->
        <link rel="stylesheet" type="text/css" href="../css/menu1.css"/>
        <link rel="stylesheet" type="text/css" href="../css/principal1.css"/>
        <link rel="stylesheet" type="text/css" href="../css/conteudo1.css"/>

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" src="experiencia_profissional.js"></script>

    </head>



    <body>
        <div id=conteudo>
            <h2>Preencha a Experiencia Profissional</h2>
            <form id=dados method="post" action="cadastro.php">
                
                <div class="coluna_esquerda">
                    <div class="card">                    
                        <h3>Experiencia Profissional</h3>
                        <p>Cargo: <input type="text" id="cargo" name="cargo"> </p> <!--utilizando o input para criar uma caixa de texto para o usuario preencher-->
                        <p>Nome da Empresa: <input type="text" id="empresa" name="empresa"> </p> <!--utilizando o input para criar uma caixa de texto para o usuario preencher-->
                        <p>O que desenvolveu ou fez : </p>
                        <p><textarea rows=4 cols=50 id="textod" name="textod">Texto inicial</textarea></p> <!--utilizando o input para criar uma caixa de texto com 4 linha e 50 colunas para o usuario preencher, informando informaçoes relevantes sobre o que desenvolveu-->
                    
                        <?php

                            include '../formulario/pagina_cadastro/conexao.php'; //Incluindo os comando php atraves do include (no caso a conexao do com o banco de dados)
                            include '../formulario/pagina_cadastro/cadastro.php';//Incluindo os comando php atraves do include (no caso a pagina cadastro.php)
                            

                            /* utilizamos os codigos a baixo para nao nos preocuparmos com os ataques de SQL Injection. */
                            $cargo = mysqli_real_escape_string($banco_dados, $_POST['cargo']);
                            $empresa = mysqli_real_escape_string($banco_dados, $_POST['empresa']);
                            $textod = mysqli_real_escape_string($banco_dados, $_POST['textod']);

                            /* Se a validação falhar, redirecionamos para a tela inicial.
                                A função header redireciona para um novo endereço e a função exit() 
                                interromente o resto do processamento
                            */
                            if(empty($cargo) ||
                                empty($empresa) ||
                                empty($textod) ||
                                ){         
                                    

                                echo "<h1>Dados Faltantes, volte para a tela de cadastro:";
                                "  <a href='http://localhost/cadastro.php'>";
                                echo "Cadastro de chamado </a>" ;
                                echo "</h1>";
                                exit();
                            } 
                            
                            echo '<h3>';
                            //echo nos permite modificar a página
                            //exibimos as informações que foram enviadas
                            echo '<p>Cargo: ' . $cargo;
                            echo '<p>Nome da empresa: ' . $empresa;
                            echo '<p>Projetos e desenvolvimentos na empresa: ' . $textod;

                            echo '</h3>';

                            /*Para inserirmos alguma informação no banco de dados precisamos montar o comando
                            SQL para executar a operação. No caso da inserção de dados, utilizamos o insert. */
                            $query = "INSERT INTO cadastro_curriculo " .
                                    "(" .
                                    "cargo, empresa, desenvolvimento) " .
                                    "VALUES( " .
                                    "'$cargo'," . 
                                    "'$empresa'," .
                                    "'$textod'," .
                                    ")";

                            /* Para executar o comando SQL utilizamos o comando mysqli_query. Nele precisamos
                            passar como parametro a conexão com o banco e também passamos a string com o 
                            comando SQL que será executado.*/
                            $resultado = mysqli_query($banco_dados, $query);
                            if($resultado){
                                echo '<br> CADASTRO COM SUCESSO';
                            }else{
                                echo '<br>ERRO';
                            }

                            mysqli_close($banco_dados); //finalizar a conexao com o banco de dados
                            
                        ?>

                    </div>
                </div>

                <div class = "coluna_esquerda"> <!--utilizando as classes coluna esquerda para estruturar as informações-->
                    <p></p>
                    <p>Enviar Dados</p>
                        <p><input id="EEP" type="submit" value="Enviar"> </p>
                        <p></p>
                        <p>Limpar Dados </p>
                        <p><input id="LEP" type="reset" value="Limpar"> </p>
                </div>
            </form>
    </body>
</hmtl>