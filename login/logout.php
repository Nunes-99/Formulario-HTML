<?php
    include '../formulario/pagina_cadastro/conexao.php';


    /* sempre que formos trabalhar com a sessão precisamos usar a função para definir. */
    session_start();

    /* A função destroy, destroi as funções iniciadas, ou seja, limpando as informações que existem na superglobal
    $_SESSION, fazendo assim com que o servidor não tenha mais registro de que o usuário estava logado */
    session_destroy();
    /* Redirecionamos para a página inicial */
    header('Location: /formulario/curriculo.html'); 
    exit();
    
?>
