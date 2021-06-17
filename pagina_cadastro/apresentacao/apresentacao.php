<hmtl>
    <head>
        <title>Apresentacao</title> <!-- titulo da pagina -->
        <link rel="stylesheet" type="text/css" href="../css/cabecalho1.css"/> <!-- tranporte das modificações feitas no css-->
        <link rel="stylesheet" type="text/css" href="../css/menu1.css"/>
        <link rel="stylesheet" type="text/css" href="../css/principal1.css"/>
        <link rel="stylesheet" type="text/css" href="../css/conteudo1.css"/>

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" src="/apresentacao.js"></script>

    </head>



    <body>
        <div id=conteudo>
            <h2>Apresente-se</h2>
            <form id=dados method="post" action="cadastro.php">
                
                <div class="coluna_esquerda">
                    <div class="card">                    
                        <h3>Resumo</h3>
                        <p>Fale sobre voce: </p>
                        <p><textarea id="texto_apresentacao" rows=7 cols=50 >Texto inicial</textarea></p> <!--utilizando o input para criar uma caixa de texto com 7 linha e 50 colunas para o usuario preencher, informando informaçoes relevantes sobre ele-->
                    
                        <?php
                            include '../formulario/pagina_cadastro/conexao.php';
                            //Incluindo os comando php atraves do include (no caso a conexao do com o banco de dados)

                            /* utilizamos os codigos a baixo para nao nos preocuparmos com os ataques de SQL Injection. */
                            $texto_apresentacao = mysqli_real_escape_string($banco_dados, $_POST['texto_apresentacao']);

                            if(empty($texto_apresentacao)){         
                            /* Se a validação falhar, redirecionamos para a tela inicial.
                            A função header redireciona para um novo endereço e a função exit() 
                            interromente o resto do processamento
                            */

                                echo "<h1>Dados Faltantes, volte para a tela de cadastro:";
                                "  <a href='http://localhost/cadastro.php'>";
                                echo "Cadastro de chamado </a>" ;
                                echo "</h1>";
                                exit();
                            }  

                            echo '<h3>';
                            //echo nos permite modificar a página
                            //exibimos as informações que foram enviadas
                            echo '<p>Apresentacao: ' . $texto_apresentacao;
                            echo '</h3>';

                            /*Para inserirmos alguma informação no banco de dados precisamos montar o comando
                            SQL para executar a operação. No caso da inserção de dados, utilizamos o insert. */
                            $query = "INSERT INTO cadastro_curriculo " .
                                    "(" .
                                    "texto_apresentacao) " .
                                    "VALUES( " .
                                    "'$texto_apresentacao'," . 
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

                            mysqli_close($banco_dados);
                            //finalizar a conexao com o banco de dados
                            
                        ?>
                    </div>
                </div>

                <div class = "coluna_esquerda">
                    <p></p>
                    <p>Enviar Dados</p>
                        <p><input id="EDados" type="submit" value="Enviar"> </p>
                        <p></p>
                        <p>Limpar Dados </p>
                        <p><input id="LDados" type="reset" value="Limpar"> </p>
                </div>
            </form>
    </body>
</hmtl>