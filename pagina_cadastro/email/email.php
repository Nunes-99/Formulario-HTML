<hmtl>
    <head>
        <title>E-mail</title> <!-- titulo da pagina -->
        <link rel="stylesheet" type="text/css" href="../css/cabecalho1.css"/> <!-- tranporte das modificações feitas no css-->
        <link rel="stylesheet" type="text/css" href="../css/menu1.css"/>
        <link rel="stylesheet" type="text/css" href="../css/principal1.css"/>
        <link rel="stylesheet" type="text/css" href="../css/conteudo1.css"/>

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" src="email.js"></script>

    </head>



    <body>
        <div id=conteudo>
            <h2>Preencha o e-mail</h2>
            <form id=dados method="post" action="cadastro.php">
                
                <div class="coluna_esquerda">
                    <div class="card"> 
                        <p>E-mail: <input id="em" type="text" name="EEM"> </p>  <!--utilizando o input para criar uma caixa de texto para o usuario preencher-->
                    </div>
                </div>

                <div class = "coluna_esquerda">
                    <p></p>
                    <p>Enviar Dados</p>
                        <p><input id="EEM" type="submit" value="Enviar"> </p>
                        <p></p>
                        <p>Limpar Dados </p>
                        <p><input id="LEM" type="reset" value="Limpar"> </p>

                    <?php

                    include '../formulario/pagina_cadastro/conexao.php'; //Incluindo os comando php atraves do include (no caso a conexao do com o banco de dados)


                    /* utilizamos os codigos a baixo para nao nos preocuparmos com os ataques de SQL Injection. */
                    $EEM = mysqli_real_escape_string($banco_dados, $_POST['EEM']);

                    /* Se a validação falhar, redirecionamos para a tela inicial.
                            A função header redireciona para um novo endereço e a função exit() 
                            interromente o resto do processamento
                    */
                    if(empty($EEM) ){         
                            

                        echo "<h1>Dados Faltantes, volte para a tela de cadastro:";
                        "  <a href='http://localhost/cadastro.php'>";
                        echo "Cadastro de chamado </a>" ;
                        echo "</h1>";
                        exit();
                    } 

                    echo '<h3>';
                    //echo nos permite modificar a página
                    //exibimos as informações que foram enviadas
                    echo '<p>E-mail: ' . $EEM;                    
                    echo '</h3>';

                    /*Para inserirmos alguma informação no banco de dados precisamos montar o comando
                    SQL para executar a operação. No caso da inserção de dados, utilizamos o insert. */
                    $query = "INSERT INTO cadastro_curriculo " .
                                    "(" .
                                    "EEM) " .
                                    "VALUES( " .
                                    "'$EEM'," . 
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
            </form>
    </body>
</hmtl>