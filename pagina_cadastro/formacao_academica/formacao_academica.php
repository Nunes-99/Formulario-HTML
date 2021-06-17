<hmtl>
    <head>
        <title>Telefone_Cadastro</title> <!-- titulo da pagina -->
        <link rel="stylesheet" type="text/css" href="../css/cabecalho1.css"/> <!-- tranporte das modificações feitas no css-->
        <link rel="stylesheet" type="text/css" href="../css/menu1.css"/>
        <link rel="stylesheet" type="text/css" href="../css/principal1.css"/>
        <link rel="stylesheet" type="text/css" href="../css/conteudo1.css"/>

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" src="/formacao_academica.js"></script>

    </head>



    <body>
        <div id=conteudo> <!-- utilando esta id, as formataçoes feitas no css do conteudo estarao presentes nesta pagina -->
            <h2>Preencha a Formação</h2>
            <form id=dados method="post" action="cadastro.php">
                
                <div class="coluna_esquerda">
                    <div class="card">                    
                        <h3>Formação Academica</h3>
                        <p>Curso: <input id="curso" type="text" name="curso"> </p>  <!--utilizando o input para criar uma caixa de texto para o usuario preencher-->
                        <p>Instituição: <input id="inst" type="text" name="inst"> </p>
                        <p>Data de Inicio: <input id="data_inicio" type="date" name="data_inicio"> </p>
                        <p>Data de Termino: <input id="data_final" type="date" name="data_final"> </p>

                        <?php

                            include '../formulario/pagina_cadastro/conexao.php'; //Incluindo os comando php atraves do include (no caso a conexao do com o banco de dados)
                            include '../formulario/pagina_cadastro/cadastro.php'; //Incluindo os comando php atraves do include (no caso a pagina cadastro.php)
                            
                            /* utilizamos os codigos a baixo para nao nos preocuparmos com os ataques de SQL Injection. */
                            $curso = mysqli_real_escape_string($banco_dados, $_POST['curso']);
                            $inst = mysqli_real_escape_string($banco_dados, $_POST['inst']);
                            $data_inicio = mysqli_real_escape_string($banco_dados, $_POST['data_inicio']);
                            $data_final = mysqli_real_escape_string($banco_dados, $_POST['data_final']);

                            /* Se a validação falhar, redirecionamos para a tela inicial.
                            A função header redireciona para um novo endereço e a função exit() 
                            interromente o resto do processamento
                            */
                            if(empty($curso) ||
                                empty($inst) ||
                                empty($data_inicio) ||
                                empty($data_final)){         
                                    

                                echo "<h1>Dados Faltantes, volte para a tela de cadastro:";
                                "  <a href='http://localhost/cadastro.php'>";
                                echo "Cadastro de chamado </a>" ;
                                echo "</h1>";
                                exit();
                            } 


                            echo '<h3>';

                            //echo nos permite modificar a página
                            //exibimos as informações que foram enviadas
                            echo '<p>Curso: ' . $curso;
                            echo '<p>Instituicao: ' . $inst;
                            echo '<p>Data Inicio: ' .  date("d/m/Y", strtotime($data_inicio));
                            echo '<p>Data Termino: ' .  date("d/m/Y", strtotime($data_final));

                            echo '</h3>';

                            /*Para inserirmos alguma informação no banco de dados precisamos montar o comando
                            SQL para executar a operação. No caso da inserção de dados, utilizamos o insert. */
                            $query = "INSERT INTO cadastro_curriculo " .
                                    "(" .
                                    "curso, instituicao, data_inicio, data_final) " .
                                    "VALUES( " .
                                    "'$curso'," . 
                                    "'$inst'," .
                                    "'$data_inicio'," .
                                    "'$data_final'," .
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

                <div class = "coluna_esquerda">
                    <p></p>
                    <p>Enviar Dados</p>
                        <p><input id="EFA" type="submit" value="Enviar"> </p>
                        <p></p>
                        <p>Limpar Dados </p>
                        <p><input id="LFA" type="reset" value="Limpar"> </p>
                </div>
            </form>
    </body>
</hmtl>