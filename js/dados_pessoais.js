$(document).ready(function(){   

    $("#Nome").focus(function(){
        // dara foco no campo em que sera inserido o texto
        $(this).css("border-color", "blue");
        $(this).css("outline-color", "blue");
    });

    $("#Nome").blur(function(){
        //quando o usuario sair do campo, a borda voltara na cor preta perdendo o foco na mesma
        $(this).css("border-color", "black");
    });

    $("#Nome").blur(function (){
        //ao campo perder o foco e nao estiver preenchido aparecerá uma informação que o campo nao pode estar vazio
        //e o campo ficara com a borda vermelha, se o campo estiver preenchido, omesmo ficara com a borda verde
        var Nome = $.trim($("#Nome").val());
        var texto = "";

        if(Nome === texto){
            console.log("igual", Nome, " - ", texto);
            alert("Os campos nao podem estar vazios");
            $(this).css("border-color", "red");
        
        }else{
            console.log("diferente ", Nome, " - ", texto);
            $(this).css("border-color", "green");
        }

    });


    $("#Idade").focus(function(){
        // dara foco no campo em que sera inserido o texto
        $(this).css("border-color", "blue");
        $(this).css("outline-color", "blue");
    });

    $("#Idade").blur(function(){
        //quando o usuario sair do campo, a borda voltara na cor preta perdendo o foco na mesma
        $(this).css("border-color", "black");
    });

    $("#Idade").blur(function (){
        //ao campo perder o foco e nao estiver preenchido aparecerá uma informação que o campo nao pode estar vazio
        //e o campo ficara com a borda vermelha, se o campo estiver preenchido, omesmo ficara com a borda verde
        var Idade = $.trim($("#Idade").val());
        var texto = "";

        if(Idade === texto){
            console.log("igual", Idade, " - ", texto);
            alert("Os campos nao podem estar vazios");
            $(this).css("border-color", "red");
        
        }else{
            console.log("diferente ", Idade, " - ", texto);
            $(this).css("border-color", "green");
        }

    });


    $("#dados").submit(function (evento){
        /* utilizamos o jQuery para validaros elementos do formulario. Ao enviar o formulario, que é um evento, 
        ele recebe um callback function. 
        Ou seja, se essa função retornar true, ela irá continuar com o procedimento de submissão para o servidor, 
        se ela retornar false, o procedimento não ocorre.
        */
        var nome = $("#Nome");
        var idade = $("#Idade");
        var estado_civil = $("#situacao");
        var genero = $("#genero");

        
        if(!validarInput(nome) ||
            !validarInput(idade) ||
            !validarInput(estado_civil) ||
            !validarInput(genero) 
            ){
            return false;
        }

        return true;
    });

    function validarInput(elemento){
        /* Como  os elementos são de texto podemos então fazemos uma função de validação única.
        Ou seja, estamos validando os campos vazios. 
        */
    
        if(elemento.val().trim() === "" || nome == null){
            elemento.focus();
            return false;
            
        }        
    
        return true; 
    });





    $("#EDP").click(function(evento){
            //ao clicar os dados serao enviado e aparece uma mensagem: "Dados enviados com sucesso"
        alert("Dados enviados com sucesso");
        console.log("evento ", evento);
    });

    $("#LDP").dbclick(function(evento){
            //ao clicar os dados serao apagados e aparece uma mensagem: "Os dados foram apagados com sucesso"
        alert("Os dados foram apagados com sucesso");
        console.log("evento ", evento);
    });    
});