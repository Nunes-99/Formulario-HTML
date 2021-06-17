$(document).ready(function(){  

    $("#tc").focus(function(){
        // dara foco no campo em que sera inserido o texto
        $(this).css("border-color", "blue");
        $(this).css("outline-color", "blue");
    });
    $("#tc").blur(function(){
        //quando o usuario sair do campo, a borda voltara na cor preta perdendo o foco na mesma
        $(this).css("border-color", "black");
    });

    


    $("#tf").focus(function(){
        // dara foco no campo em que sera inserido o texto
        $(this).css("border-color", "blue");
        $(this).css("outline-color", "blue");
    });
    $("#tf").blur(function(){
        //quando o usuario sair do campo, a borda voltara na cor preta perdendo o foco na mesma
        $(this).css("border-color", "black");
    });


    $("#dados").submit(function (evento){
        /* utilizamos o jQuery para validaros elementos do formulario. Ao enviar o formulario, que é um evento, 
        ele recebe um callback function. 
        Ou seja, se essa função retornar true, ela irá continuar com o procedimento de submissão para o servidor, 
        se ela retornar false, o procedimento não ocorre.
        */
        var tc = $("#tc");
        var tf = $("#tf");

        
        if(!validarInput(tc) ||
            !validarInput(tF)
            ){
            return false;
        }

        return true;
    });


    function validarInput(elemento){
        /* Como  os elementos são de texto podemos então fazemos uma função de validação única.
        Ou seja, estamos validando os campos vazios. 
        */
    
        if(elemento.val().trim() === "" || tc == null){
            elemento.focus();
            return false;
            
        }        
    
        return true; 
    });


    $("#ETC").click(function(evento){
        //ao clicar os dados serao enviado e aparece uma mensagem: "Dados enviados com sucesso"
        alert("Dados enviados com sucesso");
        console.log("evento ", evento);
    });

    $("#LTC").click(function(evento){
        //ao clicar os dados serao apagados e aparece uma mensagem: "Os dados foram apagados com sucesso"
    alert("Os dados foram apagados com sucesso");
    console.log("evento ", evento);
    });
});