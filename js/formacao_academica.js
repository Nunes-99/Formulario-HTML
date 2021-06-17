$(document).ready(function(){  
    $("#curso").focus(function(){
        // dara foco no campo em que sera inserido o texto
        $(this).css("border-color", "blue");
        $(this).css("outline-color", "blue");
    });
    $("#curso").blur(function(){
        //quando o usuario sair do campo, a borda voltara na cor preta perdendo o foco na mesma
        $(this).css("border-color", "black");
    });

    $("#curso").blur(function (){
        //ao campo perder o foco e nao estiver preenchido aparecerá uma informação que o campo nao pode estar vazio
        //e o campo ficara com a borda vermelha, se o campo estiver preenchido, omesmo ficara com a borda verde
        var curso = $.trim($("#curso").val());
        var texto = "";

        if(curso === texto){
            console.log("igual", curso, " - ", texto);
            alert("Os campos nao podem estar vazios");
            $(this).css("border-color", "red");
        
        }else{
            console.log("diferente ", curso, " - ", texto);
            $(this).css("border-color", "green");
        }
    });


    $("#inst").focus(function(){
        // dara foco no campo em que sera inserido o texto
        $(this).css("border-color", "blue");
        $(this).css("outline-color", "blue");
    });
    $("#inst").blur(function(){
        //quando o usuario sair do campo, a borda voltara na cor preta perdendo o foco na mesma
        $(this).css("border-color", "black");
    });

    $("#inst").blur(function (){
        //ao campo perder o foco e nao estiver preenchido aparecerá uma informação que o campo nao pode estar vazio
        //e o campo ficara com a borda vermelha, se o campo estiver preenchido, omesmo ficara com a borda verde
        var inst = $.trim($("#inst").val());
        var texto = "";

        if(inst === texto){
            console.log("igual", inst, " - ", texto);
            alert("Os campos nao podem estar vazios");
            $(this).css("border-color", "red");
        
        }else{
            console.log("diferente ", inst, " - ", texto);
            $(this).css("border-color", "green");
        }
    });


    $("#data_inicio").focus(function(){
        // dara foco no campo em que sera inserido o texto
        $(this).css("border-color", "blue");
        $(this).css("outline-color", "blue");
    });
    $("#data_inicio").blur(function(){
        //quando o usuario sair do campo, a borda voltara na cor preta perdendo o foco na mesma
        $(this).css("border-color", "black");
    });

    $("#data_inicio").blur(function(){   
        //retornado os dados do data.js 
        var data_inicio = new Date($(this).val());  
        dataRetroativa(data_inicio);

    });
    


    $("#data_final").focus(function(){
        // dara foco no campo em que sera inserido o texto
        $(this).css("border-color", "blue");
        $(this).css("outline-color", "blue");
    });
    $("#data_final").blur(function(){
        //quando o usuario sair do campo, a borda voltara na cor preta perdendo o foco na mesma
        $(this).css("border-color", "black");
    });

    $("#data_final").blur(function(){   
        //retornado os dados do data.js 
        var data_final = new Date($(this).val());  
        dataRetroativa(data_final);

    });


    $("#dados").submit(function (evento){
        /* utilizamos o jQuery para validaros elementos do formulario. Ao enviar o formulario, que é um evento, 
        ele recebe um callback function. 
        Ou seja, se essa função retornar true, ela irá continuar com o procedimento de submissão para o servidor, 
        se ela retornar false, o procedimento não ocorre.
        */
        var curso = $("#curso");
        var inst = $("#inst");
        var data_inicio = $("#data_inicio");
        var data_final = $("#data_final");

        
        if(!validarInput(curso) ||
            !validarInput(inst) ||
            !validarInput(data_inicio) ||
            !validarInput(data_final)
            ){
            return false;
        }

        return true;
    });


    function validarInput(elemento){
        /* Como  os elementos são de texto podemos então fazemos uma função de validação única.
        Ou seja, estamos validando os campos vazios. 
        */
    
        if(elemento.val().trim() === "" || curso == null){
            elemento.focus();
            return false;
            
        }        
    
        return true; 
    });




    $("#EFA").click(function(evento){
        //ao clicar os dados serao enviado e aparece uma mensagem: "Dados enviados com sucesso"
        alert("Dados enviados com sucesso");
        console.log("evento ", evento);
    });

    $("#LFA").click(function(evento){
        //ao clicar os dados serao apagados e aparece uma mensagem: "Os dados foram apagados com sucesso"
    alert("Os dados foram apagados com sucesso");
    console.log("evento ", evento);
    });
});