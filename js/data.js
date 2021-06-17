function dataRetroativa(data_inicio){
    /* É desta forma que se cria a data se nao for passado nenhum valor como parametro.
    no caso foi utilizado a data do dia a dia */
    
    var hoje = new Date();

    if((hoje.getDate() > data_inicio.getDate()) && (hoje.getMonth() == data_inicio.getMonth()) && (hoje.getFullYear() == data_inicio.getFullYear())){            
        alert("Data retroativa");      
    }
    
    else if((hoje.getDate() > data_inicio.getDate()) && (hoje.getMonth() > data_inicio.getMonth()) ||  (hoje.getFullYear() > data_inicio.getFullYear())){            
    alert("Data retroativa");      
    }
    
    else if((hoje.getDate() < data_inicio.getDate()) && (hoje.getMonth() > data_inicio.getMonth()) ||  (hoje.getFullYear() > data_inicio.getFullYear())){            
    alert("Data retroativa");      
    }
};

};