$(document).ready(function(){  


    $("#em_cad").focus(function(){
        // dara foco no campo em que sera inserido o texto
        $(this).css("border-color", "blue");
        $(this).css("outline-color", "blue");
    });

    $("#em_cad").blur(function(){
        //quando o usuario sair do campo, a borda voltara na cor preta perdendo o foco na mesma
        $(this).css("border-color", "black");
    });

    $("#em_cad").blur(function(){
        var eml = $(this).val();
        var teste =  /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/gi;
        //aqui o email para ser validado ele segue um padrao do regex
        var em_cad = $.trim($("#linkd").val());
        var texto = "";

        if(teste.test(eml)){
            //ao campo perder o foco e nao estiver preenchido aparecerá uma informação que o campo nao pode estar vazio
             //e o campo ficara com a borda vermelha, se o campo estiver preenchido, omesmo ficara com a borda verde
            $(this).css("border-color", "green");
        }
        else{
            if(em_cad === texto){
                console.log("igual", em_cad, " - ", texto);
                alert("Os campos nao podem estar vazios");
                $(this).css("border-color", "red");
            
            }else{
                console.log("diferente ", em_cad, " - ", texto);
                $(this).css("border-color", "green");
            }        
        }
    });


    $("#senha_cad").focus(function(){
        // dara foco no campo em que sera inserido o texto
        $(this).css("border-color", "blue");
        $(this).css("outline-color", "blue");
    });

    $("#senha_cad").blur(function(){
        //quando o usuario sair do campo, a borda voltara na cor preta perdendo o foco na mesma
        $(this).css("border-color", "black");
    });
    $("#senha_cad").blur(function (){
        //ao campo perder o foco e nao estiver preenchido aparecerá uma informação que o campo nao pode estar vazio
        //e o campo ficara com a borda vermelha, se o campo estiver preenchido, omesmo ficara com a borda verde

        var senha_cad = $.trim($("#senha_cad").val());
        var texto = "";

        if(senha_cad === texto){
            console.log("igual", senha_cad, " - ", texto);
            alert("Os campos nao podem estar vazios");
            $(this).css("border-color", "red");
        
        }else{
            console.log("diferente ", senha_cad, " - ", texto);
            $(this).css("border-color", "green");
        }
    });


    $("#ELOG").click(function(evento){
        //ao clicar os dados serao enviado e aparece uma mensagem: "Dados enviados com sucesso"
        alert("Dados enviados com sucesso");
        console.log("evento ", evento);
    });

    $("#LLOG").click(function(evento){
        //ao clicar os dados serao apagados e aparece uma mensagem: "Os dados foram apagados com sucesso"
    alert("Os dados foram apagados com sucesso");
    console.log("evento ", evento);
    });
});