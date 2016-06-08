/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function(){
    
    
    $(".usuario_gestor_active").click(function(){
        
        var id = $(this).attr("value");
        
         $.ajax({
            url: '../Configuracoes/ativarOuInativarUsGestores',
            type: 'POST',
            data: {
                id: id
            },
            success: function(msg) {
               
            }
        });
        
    });
    
    $("#input-alatorio").keyup(function(){
        
        alert("show me the money");
        Radom
        
    });
    
});
    


