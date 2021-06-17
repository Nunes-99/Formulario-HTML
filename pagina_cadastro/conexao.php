<?php
$banco_dados = mysqli_connect('localhost:3307', 'root', 'usbw', 'cadastro_curriculo');
//aqui estamos conectando ao banco de dados SQL
if(! ){
    /*
    Aqui tratamos o erro com um if, fazendo com que os scripts não parem abruptamente se ocorrer algum erro
    */
        echo "Erro de conexão com banco de dados.";
    }
    
?>