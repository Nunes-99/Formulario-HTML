$(document).ready(function(){   

    
    $("#texto_apresentacao").focus(function(){ // dara foco no campo em que sera inserido o texto
        $(this).css("border-color", "blue");
        $(this).css("outline-color", "blue");
    });

    $("#texto_apresentacao").blur(function(){ //quando o usuario sair do campo, a borda voltara na cor preta perdendo o foco na mesma
        $(this).css("border-color", "black");
    });

    $("#texto_apresentacao").blur(function (){ 
        //ao campo perder o foco e nao estiver preenchido aparecerá uma informação que o campo nao pode estar vazio
        //e o campo ficara com a borda vermelha, se o campo estiver preenchido, omesmo ficara com a borda verde

        var texto_apresentacao = $.trim($("#texto_apresentacao").val());
        var texto = "";

        if(texto_apresentacao === texto){
            console.log("igual", texto_apresentacao, " - ", texto);
            alert("O campo nao pode estar vazio");
            $(this).css("border-color", "red");
        
        }else{
            console.log("diferente ", texto_apresentacao, " - ", texto);
            $(this).css("border-color", "green");
        }
    });


    $("#dados").submit(function (evento){

        /* utilizamos o jQuery para validaros elementos do formulario. Ao enviar o formulario, que é um evento, 
        ele recebe um callback function. 
        Ou seja, se essa função retornar true, ela irá continuar com o procedimento de submissão para o servidor, 
        se ela retornar false, o procedimento não ocorre.
        */

        var texto_apresentacao = $("#texto_apresentacao");

        
        if(!validarInput(texto_apresentacao)){
            return false;
        }

        return true;
    });

    function validarInput(elemento){
        /* Como  os elementos são de texto podemos então fazemos uma função de validação única.
        Ou seja, estamos validando os campos vazios. 
        */
    
        if(elemento.val().trim() === "" || texto_apresentacao == null){
            elemento.focus();
            return false;
            
        }        
    
        return true; 
    });
    

    
    $("#EDados").click(function(evento){  
        //ao clicar os dados serao enviado e aparece uma mensagem: "Dados enviados com sucesso"
        alert("Dados enviados com sucesso");
        console.log("evento ", evento);
    });

    $("#LDados").click(function(evento){
        //ao clicar os dados serao apagados e aparece uma mensagem: "Os dados foram apagados com sucesso"
    alert("Os dados foram apagados com sucesso");
    console.log("evento ", evento);
    });

});