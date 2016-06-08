/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function(){
   
    //exclui usuario
    $(".excluirConteudo").click(function() {

        var handle = $(this);
        var id = $(this).attr("id");

        $.ajax({
            url: '../Configuracoes/deleteConteudo',
            type: 'POST',
            data: {
                id: id
            },
            success: function(msg) {

                var tr = $(handle).closest('tr');
                tr.fadeOut(600, function() {
                    tr.remove();
                });

            }
        });

    });
    
});

