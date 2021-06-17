$(document).ready(function(){  
    $("#cargo").focus(function(){
        // dara foco no campo em que sera inserido o texto
        $(this).css("border-color", "blue");
        $(this).css("outline-color", "blue");
    });
    $("#cargo").blur(function(){
        //quando o usuario sair do campo, a borda voltara na cor preta perdendo o foco na mesma
        $(this).css("border-color", "black");
    });

    $("#cargo").blur(function (){
        //ao campo perder o foco e nao estiver preenchido aparecerá uma informação que o campo nao pode estar vazio
        //e o campo ficara com a borda vermelha, se o campo estiver preenchido, omesmo ficara com a borda verde
        var cargo = $.trim($("#cargo").val());
        var texto = "";

        if(cargo === texto){
            console.log("igual", cargo, " - ", texto);
            alert("Os campos nao podem estar vazios");
            $(this).css("border-color", "red");
        
        }else{
            console.log("diferente ", cargo, " - ", texto);
            $(this).css("border-color", "green");
        }
    });


    $("#empresa").focus(function(){
        // dara foco no campo em que sera inserido o texto
        $(this).css("border-color", "blue");
        $(this).css("outline-color", "blue");
    });
    $("#empresa").blur(function(){
        //quando o usuario sair do campo, a borda voltara na cor preta perdendo o foco na mesma
        $(this).css("border-color", "black");
    });

    $("#empresa").blur(function (){
        //ao campo perder o foco e nao estiver preenchido aparecerá uma informação que o campo nao pode estar vazio
        //e o campo ficara com a borda vermelha, se o campo estiver preenchido, omesmo ficara com a borda verde
        var empresa = $.trim($("#empresa").val());
        var texto = "";

        if(empresa === texto){
            console.log("igual", empresa, " - ", texto);
            alert("Os campos nao podem estar vazios");
            $(this).css("border-color", "red");
        
        }else{
            console.log("diferente ", empresa, " - ", texto);
            $(this).css("border-color", "green");
        }
    });


    $("#textod").focus(function(){
        // dara foco no campo em que sera inserido o texto
        $(this).css("border-color", "blue");
        $(this).css("outline-color", "blue");
    });
    $("#textod").blur(function(){
        //quando o usuario sair do campo, a borda voltara na cor preta perdendo o foco na mesma
        $(this).css("border-color", "black");
    });

    $("#textod").blur(function (){
        //ao campo perder o foco e nao estiver preenchido aparecerá uma informação que o campo nao pode estar vazio
        //e o campo ficara com a borda vermelha, se o campo estiver preenchido, omesmo ficara com a borda verde
        var textod = $.trim($("#textod").val());
        var texto = "";

        if(textod === texto){
            console.log("igual", textod, " - ", texto);
            alert("Os campos nao podem estar vazios");
            $(this).css("border-color", "red");
        
        }else{
            console.log("diferente ", textod, " - ", texto);
            $(this).css("border-color", "green");
        }
    });


    $("#dados").submit(function (evento){
        /* utilizamos o jQuery para validaros elementos do formulario. Ao enviar o formulario, que é um evento, 
        ele recebe um callback function. 
        Ou seja, se essa função retornar true, ela irá continuar com o procedimento de submissão para o servidor, 
        se ela retornar false, o procedimento não ocorre.
        */
        var cargo = $("#cargo");
        var empresa = $("#empresa");
        var textod = $("#textod");

        
        if(!validarInput(cargo) ||
           !validarInput(empresa) ||
           !validarInput(textod) 
           ){
            return false;
        }

        return true;
    });


    function validarInput(elemento){
        /* Como  os elementos são de texto podemos então fazemos uma função de validação única.
        Ou seja, estamos validando os campos vazios. 
        */
    
        if(elemento.val().trim() === "" || cargo == null){
            elemento.focus();
            return false;
            
        }        
    
        return true; 
    });



    $("#EEP").click(function(evento){
        //ao clicar os dados serao enviado e aparece uma mensagem: "Dados enviados com sucesso"
        alert("Dados enviados com sucesso");
        console.log("evento ", evento);
    });

    $("#LEP").click(function(evento){
        //ao clicar os dados serao apagados e aparece uma mensagem: "Os dados foram apagados com sucesso"
    alert("Os dados foram apagados com sucesso");
    console.log("evento ", evento);
    });
});