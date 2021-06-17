<hmtl>
    <head>
        <title>Telefone_Cadastro</title>
        <link rel="stylesheet" type="text/css" href="../css/cabecalho1.css"/> <!-- tranporte das modificações feitas no css-->
        <link rel="stylesheet" type="text/css" href="../css/menu1.css"/>
        <link rel="stylesheet" type="text/css" href="../css/principal1.css"/>
        <link rel="stylesheet" type="text/css" href="../css/conteudo1.css"/>

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" src="/idioma.js"></script>

    </head>



    <body>
        <div id=conteudo>
            <h2>Preencha o Idioma</h2>
            <form id=dados method="post" action="cadastro.php">
                
                <div class="coluna_esquerda">
                    <div class="card">                    
                        <h3>Formação </h3>
                        <p>Idioma: <input type="text" id="idioma" name="idioma"> </p>  <!--utilizando o input para criar uma caixa de texto para o usuario preencher-->
                        <p>Instituição: <input type="text" id="insti" name="insti"> </p>
                        <p>Data de Inicio: <input type="date" id="d_inicio" name="d_inicio"> </p>
                        <p>Data de Termino: <input type="date" id="d_termino" name="d_termino"> </p>
                    </div>

                    <div>
                        <div class="coluna_esquerda">
                            <div class="card"> 
                                <p>Nivel de Escrita: <input name="nivel" type="radio"> Basico <!-- utilizando este tipo de input o usuario so podera selecionar uma opção pois os inputs esta com o mesmo name-->
                                                <input name="nivel" type="radio"> Intermediario </p>
                                                <input name="nivel" type="radio"> Avançado </p>
                            </div>
                        </div>

                        <div class="coluna_esquerda">
                            <div class="card"> 
                                <p>Nivel de Conversação: <input name="NC" type="radio"> Basico <!-- utilizando este tipo de input o usuario so podera selecionar uma opção pois os inputs esta com o mesmo name-->
                                                <input name="NC" type="radio"> Intermediario </p>
                                                <input name="NC" type="radio"> Avançado </p>
                            </div>
                        </div>


                        <?php

                            include '../formulario/pagina_cadastro/conexao.php'; //Incluindo os comando php atraves do include (no caso a conexao do com o banco de dados)

                            /* utilizamos os codigos a baixo para nao nos preocuparmos com os ataques de SQL Injection. */
                            $idioma = mysqli_real_escape_string($banco_dados, $_POST['idioma']);
                            $insti = mysqli_real_escape_string($banco_dados, $_POST['insti']);
                            $d_inicio = mysqli_real_escape_string($banco_dados, $_POST['d_inicio']);
                            $d_termino = mysqli_real_escape_string($banco_dados, $_POST['d_termino']);
                            $nivel = mysqli_real_escape_string($banco_dados, $_POST['nivel']);
                            $NC = mysqli_real_escape_string($banco_dados, $_POST['NC']);


                            /* Se a validação falhar, redirecionamos para a tela inicial.
                            A função header redireciona para um novo endereço e a função exit() 
                            interromente o resto do processamento
                            */
                            if(empty($idioma) ||
                                empty($insti) ||
                                empty($d_inicio) ||
                                empty($d_termino) ||
                                empty($nivel) ||
                                empty($NC)){         
                                    

                                echo "<h1>Dados Faltantes, volte para a tela de cadastro:";
                                "  <a href='http://localhost/cadastro.php'>";
                                echo "Cadastro de chamado </a>" ;
                                echo "</h1>";
                                exit();
                            } 

                            echo '<h3>';

                            //echo nos permite modificar a página
                            //exibimos as informações que foram enviadas
                            echo '<p>Idioma: ' . $idioma;
                            echo '<p>Instituicao: ' . $insti;
                            echo '<p>Data Inicio: ' .  date("d/m/Y", strtotime($d_inicio));
                            echo '<p>Data Termino: ' .  date("d/m/Y", strtotime($d_termino));
                            echo '<p>Nivel de Escrita: ' . $nivel;
                            echo '<p>Nivel de Conversação: ' . $NC;

                            echo '</h3>';

                            /*Para inserirmos alguma informação no banco de dados precisamos montar o comando
                             SQL para executar a operação. No caso da inserção de dados, utilizamos o insert. */
                            $query = "INSERT INTO cadastro_curriculo " .
                                    "(" .
                                    "idioma, instituicao, d_inicio, d_termino, nivel, NC) " .
                                    "VALUES( " .
                                    "'$idioma'," . 
                                    "'$insti'," .
                                    "'$d_inicio'," .
                                    "'$d_termino'," .
                                    "'$nivel'," .
                                    "'$NC'," .
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
                        <p><input id="EI" type="submit" value="Enviar"> </p>
                        <p></p>
                        <p>Limpar Dados </p>
                        <p><input id="LI" type="reset" value="Limpar"> </p>
                </div>
            </form>
    </body>
</hmtl>