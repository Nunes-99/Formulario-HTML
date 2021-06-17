<?php
                        
    include '../formulario/pagina_cadastro/conexao.php'; //Incluindo os comando php atraves do include (no caso a conexao do com o banco de dados)

    function debug_to_console($data) {
        $output = $data;
        if (is_array($output))
            $output = implode(',', $output);

            echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
    }


    /*Adicionamos agora a variavel para recuperar o local da ocorrencia */
    $local = $_POST['local'];

            

    /*
    Aqui fazemos uma consulta no banco de dados para exibir a descrição do local.     
    Utilizamos a função mysqli_fetch_row(), pois ela retorna um vetor onde cada elemento irá representar um dos campos do registro retornado.
    */
    $consulta_local = "SELECT descricao from local where id_local = $local";
    $result_consulta_local = mysqli_query($banco_dado, $consulta_local);
    $local_recuperado = mysqli_fetch_row($result_consulta_local);

    echo '<h2>';

    //Do vetor de resultado da consulta de local, pegamos o primeiro e unico campo do registro
    echo '<p>Local: ' . $local_recuperado[0];

    echo '</h2>';

    /* Precisamos inserir no Insert também o local selecionado pelo usuário */
    $query = "INSERT INTO escrever o nome da tabela " .
                            "(" .
                            " id_local) " .
                            "VALUES( " .
                            "$local" .
                            ")";
                            
                            
                            $resultado = mysqli_query($banco_dados, $query);
                            if($resultado){
                                echo '<br> CADASTRO COM SUCESSO';
                            }else{
                                echo '<br>ERRO';
                            }

                            mysqli_close($banco_dados);
    

    

    
?>