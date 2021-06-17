$(document).ready(function(){ 

    $("#linkd").focus(function(){// dara foco no campo em que sera inserido o texto
        $(this).css("border-color", "blue");
        $(this).css("outline-color", "blue");
    });

    $("#linkd").blur(function(){
        //quando o usuario sair do campo, a borda voltara na cor preta perdendo o foco na mesma
        $(this).css("border-color", "black");
    });

    $("#linkd").blur(function(){
        var link = $(this).val();
        var teste =  /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/gi;
        //aqui o likdin para ser validado ele segue um padrao do regex

        var linkd = $.trim($("#linkd").val());
        var texto = "";

        if(teste.test(link)){
        //ao campo perder o foco e nao estiver preenchido aparecerá uma informação que o campo nao pode estar vazio
        //e o campo ficara com a borda vermelha, se o campo estiver preenchido, omesmo ficara com a borda verde
            $(this).css("border-color", "green");
        }
        else{
            if(linkd === texto){
                console.log("igual", linkd, " - ", texto);
                alert("Os campos nao podem estar vazios");
                $(this).css("border-color", "red");
            
            }else{
                console.log("diferente ", linkd, " - ", texto);
                $(this).css("border-color", "green");
            }        
        }
    });


    $("#dados").submit(function (evento){
        /* utilizamos o jQuery para validaros elementos do formulario. Ao enviar o formulario, que é um evento, 
        ele recebe um callback function. 
        Ou seja, se essa função retornar true, ela irá continuar com o procedimento de submissão para o servidor, 
        se ela retornar false, o procedimento não ocorre.
        */
        var linkd = $("#linkd");

        
        if(!validarInput(linkd) 
            ){
            return false;
        }

        return true;
    });


    function validarInput(elemento){
        /* Como  os elementos são de texto podemos então fazemos uma função de validação única.
        Ou seja, estamos validando os campos vazios. 
        */
    
        if(elemento.val().trim() === "" || linkd == null){
            elemento.focus();
            return false;
            
        }        
    
        return true; 
    });

    


    $("#EL").click(function(evento){
        //ao clicar os dados serao enviado e aparece uma mensagem: "Dados enviados com sucesso"
        alert("Dados enviados com sucesso");
        console.log("evento ", evento);
    });

    $("#LL").click(function(evento){
        //ao clicar os dados serao apagados e aparece uma mensagem: "Os dados foram apagados com sucesso"
    alert("Os dados foram apagados com sucesso");
    console.log("evento ", evento);
    });
});