<hmtl>
    <head>
        <title>Dados_Cadastro</title> <!-- titulo da pagina -->
        <link rel="stylesheet" type="text/css" href="../css/cabecalho1.css"/> <!-- tranporte das modificações feitas no css-->
        <link rel="stylesheet" type="text/css" href="../css/menu1.css"/>
        <link rel="stylesheet" type="text/css" href="../css/principal1.css"/>
        <link rel="stylesheet" type="text/css" href="../css/conteudo1.css"/>

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/dados_pessoais.js"></script>
    </head>



    <body>
        <div id=conteudo> <!-- criaçao da id para facilitar a modificaçao de algo se for necessario-->
            <h2>Preenchendo Cadastro</h2>
            <form id=dados method="post" action="cadastro.php">  <!-- utilando a estrutura de um formulario -->
                <div class="coluna_esquerda">
                    <div id="LN" class="card" > 
                        <p>Nome: <input ID="Nome" type="text" name="Nome"> </p> <!--utilizando o input para criar uma caixa de texto para o usuario preencher-->
                    </div>
                </div>

                <div class="coluna_esquerda"> <!-- utilizando as class para estruturar melhor o conteudo que sera visualizado-->
                    <div id="LI" class="card" > 
                        <p>Idade: <input id="Idade" type="text" name="Idade"> </p> 
                    </div>
                </div>

                <div class="coluna_esquerda">
                    <div class="card"> 
                        <p>Estado Civil: <input name="situacao" type="radio"> Solteiro <!-- utilizando este tipo de input o usuario so podera selecionar uma opção pois os inputs esta com o mesmo name-->
                                        <input name="situacao" type="radio"> Casado </p>
                                        <input name="situacao" type="radio"> Divorciado </p>
                    </div>
                </div>

                <div class="coluna_esquerda">
                    <div class="card"> 
                        <p>Genero: <input name="genero" type="radio"> Masculino 
                                        <input name="genero" type="radio"> Feminino </p>
                    </div>
                </div>

                <?php


                    include '../formulario/pagina_cadastro/conexao.php'; //Incluindo os comando php atraves do include (no caso a conexao do com o banco de dados)
                    include '../formulario/pagina_cadastro/cadastro.php';//Incluindo os comando php atraves do include (no caso a pagina cadastro.php)

                    /* utilizamos os codigos a baixo para nao nos preocuparmos com os ataques de SQL Injection. */
                    $Nome = mysqli_real_escape_string($banco_dados, $_POST['Nome']);
                    $Idade = mysqli_real_escape_string($banco_dados, $_POST['Idade']);
                    $situacao = mysqli_real_escape_string($banco_dados, $_POST['situacao']);
                    $genero = mysqli_real_escape_string($banco_dados, $_POST['genero']);

                    /* Se a validação falhar, redirecionamos para a tela inicial.
                            A função header redireciona para um novo endereço e a função exit() 
                            interromente o resto do processamento
                    */
                    if(empty($Nome) ||
                        empty($Idade) ||
                        empty($situacao) ||
                        empty($genero)){         
                            

                        echo "<h1>Dados Faltantes, volte para a tela de cadastro:";
                        "  <a href='http://localhost/cadastro.php'>";
                        echo "Cadastro de chamado </a>" ;
                        echo "</h1>";
                        exit();
                    }  


                    echo '<h3>';
                    //echo nos permite modificar a página
                    //exibimos as informações que foram enviadas

                    echo '<p>Nome: ' . $Nome;
                    echo '<p>Idade: ' . $Idade;
                    echo '<p>situacao: ' . $situacao;
                    echo '<p>genero: ' . $genero;

                    echo '</h3>';

                    /*Para inserirmos alguma informação no banco de dados precisamos montar o comando
                    SQL para executar a operação. No caso da inserção de dados, utilizamos o insert. */
                    $query = "INSERT INTO cadastro_curriculo " .
                                    "(" .
                                    "nome, idade,situacao, genero) " .
                                    "VALUES( " .
                                    "'$Nome'," . 
                                    "'$Idade'," .
                                    "'$situacao'," .
                                    "'$genero'," .
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


                <div class = "coluna_esquerda">
                    <p></p>
                    <p>Enviar Dados</p> 
                        <p><input id="EDP" type="submit" value="Enviar"> </p> <!-- este botao ira enviar os dados para o servidor-->
                        <p></p>
                        <p>Limpar Dados </p> 
                        <p><input id="LDP" type="reset" value="Limpar"> </p> <!--este botao ira limpar os dados preenchido pelo usuario-->
                </div>

            </form>




    </body>



</hmtl>