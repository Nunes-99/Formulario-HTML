<?php




    include '../formulario/pagina_cadastro/conexao.php';
    
    /* os arquivos podem ser acessados diretamente pelas suas URL's. para isso as variaveis usuario e senha
    devem ser configuradas, pois se o usuario estiver nao estiver logado, o mesmo nao terá acesso as informaçoes ali presentes
    */
    if(empty($_POST['usuario']) || empty($_POST['senha']) ){
        header('Location: login.php');
        exit();
    }

    

    /* utilizamos os codigos a baixo para nao nos preocuparmos com os ataques de SQL Injection. */
    $usuario = mysqli_real_escape_string($banco_dados, $_POST['usuario']);
    $senha = mysqli_real_escape_string($banco_dados, $_POST['senha']);

    /*
    ao validar os dados que vieram do formulario, precisa-se verificar se o usuario e senha batem com o que foi cadastrado.
    para isso, fazemos a consulta no SQL com a funçao mysql_num_rows, na qual mostra quantos registros foram retornados
    de uma consulta. 
    se o usuario for unico sera retornado um registro, no caso contrario( se a senha ou usuario forem iguais a de outro usuario)
    nao será encontrado nenhum usuario e nao podera ser autenticado. 
    */
    $busca = "select usuario, senha from usuario where usuario = '$usuario' and senha=md5('$senha')";
    $result = mysqli_query($banco_dados, $busca);
    $qtd_registros = mysqli_num_rows($result);
    
    /*Se tivermos uma linha de retorno siginifica que o usuário e senha informado é válido, e pomodes
    finalmente e podemos autenticar o mesmo. Para autenticar, criamos uma sessão.  */
    if($qtd_registros == 1){
        /*Para utilizarmos a sessão utilizamos a superglobal $_SESSION. */
        session_start();
        $_SESSION['usuario'] = $usuario;
        /* Com o usuário validado podemos redirecionar para a página inicial, onde agora sim teremos
        o usuário logado, e as demais opções do menu serão exibidas */
        header('Location: /curriculo_completo/index.php');
        /*Para garantir que não haverá execução alguma após o redirecionamento */
        exit();
    }else{
        /*Caso não tenhamos usuário e senha válidos, redirecionamos para tela de login novamente, onde
        exibiremos a mensagem de usuário e senha inválidos. */
        header('Location: login.php');
        exit();
    }
?>