$(document).ready(function(){  

    $("#em").focus(function(){
        // dara foco no campo em que sera inserido o texto
        $(this).css("border-color", "blue");
        $(this).css("outline-color", "blue");
    });

    $("#em").blur(function(){
        //quando o usuario sair do campo, a borda voltara na cor preta perdendo o foco na mesma
        $(this).css("border-color", "black");
    });

    $("#em").blur(function(){
        var eml = $(this).val();
        var teste =  /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/gi;
        //aqui o email para ser validado ele segue um padrao do regex
        if(teste.test(eml)){
            //se ele seguir o padrao, a borda da caixa de texto ficara verde, se nao ficara vermelho e o usuario tera que mudar
            $(this).css("border-color", "green");
        }
        else{
            $(this).css("border-color", "red");        
        }
    });

    $("#em").blur(function (){
         //ao campo perder o foco e nao estiver preenchido aparecerá uma informação que o campo nao pode estar vazio
        //e o campo ficara com a borda vermelha, se o campo estiver preenchido, omesmo ficara com a borda verde
        var Email = $.trim($("#em").val());
        var texto = "";

        if(Email === texto){
            console.log("igual", Email, " - ", texto);
            alert("Os campos nao podem estar vazios");
            $(this).css("border-color", "red");
        
        }else{
            console.log("diferente ", Email, " - ", texto);
            $(this).css("border-color", "green");
        }

    });


    $("#dados").submit(function (evento){
        /* utilizamos o jQuery para validaros elementos do formulario. Ao enviar o formulario, que é um evento, 
        ele recebe um callback function. 
        Ou seja, se essa função retornar true, ela irá continuar com o procedimento de submissão para o servidor, 
        se ela retornar false, o procedimento não ocorre.
        */
        var em = $("#em");


        
        if(!validarInput(em)){
            return false;
        }

        return true;
    });

    function validarInput(elemento){
        /* Como  os elementos são de texto podemos então fazemos uma função de validação única.
        Ou seja, estamos validando os campos vazios. 
        */
    
        if(elemento.val().trim() === "" || em == null){
            elemento.focus();
            return false;
            
        }        
    
        return true; 
    });


    $("#EEM").click(function(evento){ //ao clicar os dados serao enviado e aparece uma mensagem: "Dados enviados com sucesso"
        alert("Dados enviados com sucesso");
        console.log("evento ", evento);
    });

    $("#LEM").click(function(evento){
        //ao clicar os dados serao apagados e aparece uma mensagem: "Os dados foram apagados com sucesso"
    alert("Os dados foram apagados com sucesso");
    console.log("evento ", evento);
    });
});