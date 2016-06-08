/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(function() {

    //muda status
    $(".statusCheckbox").click(function() {

        var statusAtual = $(this).attr("value");
        var id = $(this).attr("id");

        $.ajax({
            url: '../Programas/mudaStatusProgramas',
            type: 'POST',
            data: {
                id: id,
                statusAtual: statusAtual
            },
            success: function(msg) {
                //s]alert(msg);

            }
        });

    });

    //exclui usuario
    $(".excluirPrograma").click(function() {

        var handle = $(this);
        var id = $(this).attr("id");

        $.ajax({
            url: '../Programas/deletePrograma',
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
