$(document).ready(function(){

    $("#idioma").focus(function(){// dara foco no campo em que sera inserido o texto
        $(this).css("border-color", "blue");
        $(this).css("outline-color", "blue");
    });
    $("#idioma").blur(function(){
        //quando o usuario sair do campo, a borda voltara na cor preta perdendo o foco na mesma
        $(this).css("border-color", "black");
    });

    $("#idioma").blur(function (){
        //ao campo perder o foco e nao estiver preenchido aparecerá uma informação que o campo nao pode estar vazio
        //e o campo ficara com a borda vermelha, se o campo estiver preenchido, omesmo ficara com a borda verde
        var idioma = $.trim($("#idioma").val());
        var texto = "";

        if(idioma === texto){
            console.log("igual", idioma, " - ", texto);
            alert("Os campos nao podem estar vazios");
            $(this).css("border-color", "red");
        
        }else{
            console.log("diferente ", idioma, " - ", texto);
            $(this).css("border-color", "green");
        }
    });


    $("#insti").focus(function(){
        // dara foco no campo em que sera inserido o texto
        $(this).css("border-color", "blue");
        $(this).css("outline-color", "blue");
    });
    $("#insti").blur(function(){
        //quando o usuario sair do campo, a borda voltara na cor preta perdendo o foco na mesma
        $(this).css("border-color", "black");
    });

    $("#insti").blur(function (){
        //ao campo perder o foco e nao estiver preenchido aparecerá uma informação que o campo nao pode estar vazio
        //e o campo ficara com a borda vermelha, se o campo estiver preenchido, omesmo ficara com a borda verde
        var insti = $.trim($("#insti").val());
        var texto = "";

        if(insti === texto){
            console.log("igual", insti, " - ", texto);
            alert("Os campos nao podem estar vazios");
            $(this).css("border-color", "red");
        
        }else{
            console.log("diferente ", insti, " - ", texto);
            $(this).css("border-color", "green");
        }
    });


    $("#d_inicio").focus(function(){
        // dara foco no campo em que sera inserido o texto
        $(this).css("border-color", "blue");
        $(this).css("outline-color", "blue");
    });
    $("#d_inicio").blur(function(){
        //quando o usuario sair do campo, a borda voltara na cor preta perdendo o foco na mesma
        $(this).css("border-color", "black");
    });
    $("#d_inicio").blur(function(){    
        //retornado os dados do data.js 
        var d_inicio = new Date($(this).val());  
        dataRetroativa(data_inicio);

    });



    $("#d_termino").focus(function(){
        // dara foco no campo em que sera inserido o texto
        $(this).css("border-color", "blue");
        $(this).css("outline-color", "blue");
    });
    $("#d_termino").blur(function(){
        //quando o usuario sair do campo, a borda voltara na cor preta perdendo o foco na mesma
        $(this).css("border-color", "black");
    });
    $("#d_termino").blur(function(){    
        //retornado os dados do data.js 
        var d_termino = new Date($(this).val());  
        dataRetroativa(data_final);

    });


    $("#dados").submit(function (evento){
        /* utilizamos o jQuery para validaros elementos do formulario. Ao enviar o formulario, que é um evento, 
        ele recebe um callback function. 
        Ou seja, se essa função retornar true, ela irá continuar com o procedimento de submissão para o servidor, 
        se ela retornar false, o procedimento não ocorre.
        */
        var idioma = $("#idioma");
        var insti = $("#insti");
        var d_inicio = $("#d_inicio");
        var d_termino = $("#d_termino");
        var idioma = $("#nivel");
        var insti = $("#NC");

        
        if(!validarInput(idioma) ||
            !validarInput(insti) ||
            !validarInput(d_inicio) ||
            !validarInput(d_termino) ||
            !validarInput(nivel) ||
            !validarInput(NC)
            ){
            return false;
        }

        return true;
    });


    function validarInput(elemento){
        /* Como  os elementos são de texto podemos então fazemos uma função de validação única.
        Ou seja, estamos validando os campos vazios. 
        */
    
        if(elemento.val().trim() === "" || idioma == null){
            elemento.focus();
            return false;
            
        }        
    
        return true; 
    });



    $("#EI").click(function(evento){
        //ao clicar os dados serao enviado e aparece uma mensagem: "Dados enviados com sucesso"
        alert("Dados enviados com sucesso");
        console.log("evento ", evento);
    });

    $("#LI").click(function(evento){
         //ao clicar os dados serao apagados e aparece uma mensagem: "Os dados foram apagados com sucesso"
    alert("Os dados foram apagados com sucesso");
    console.log("evento ", evento);
    });
});