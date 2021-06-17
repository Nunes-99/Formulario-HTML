<?php

    /* A página não pode ser acessada a menos que o usuário esteja conectado.
    Quando o login do usuário for completado com sucesso, usaremos o nome de usuário para criar uma variável de sessão. 
    Se a variável não existir, significa que o usuário não fez login e não deve visitar a página.
    Portanto, o usuário será redirecionado para a página inicial */
    if(!$_SESSION['usuario']){
        header('Location: /formulario 1/ curriculo.html');
    }
?>