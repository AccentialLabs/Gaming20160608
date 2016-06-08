/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function() {

    $("#openModalDelete").fadeOut(0);
    var acaoParaExcluir = '';
    var handle = '';

    //muda status
    $(".statusCheckbox").click(function() {
        
        alert(id);
        var statusAtual = $(this).attr("value");
        var id = $(this).attr("id");

        $.ajax({
            url: '../Acoes/mudaStatusAcao',
            type: 'POST',
            data: {
                id: id,
                statusAtual: statusAtual
            },
            success: function(msg) {
                alert(sucesso);
            }
        });

    });

    //exclui usuario
    $(".excluirAcao").click(function() {
       // alert('dsd');
        handle = $(this);
        acaoParaExcluir = $(this).attr("id");

        $("#openModalDelete").click();

//        $.ajax({
//            url: '../Missoes/deleteAcao',
//            type: 'POST',
//            data: {
//                id: id
//            },
//            success: function(msg) {
//
//                var tr = $(handle).closest('tr');
//                tr.fadeOut(600, function() {
//                    tr.remove();
//                });
//
//            }
//        });

    });

    $("#confirmExcluirAcao").click(function() {

        $.ajax({
            url: '../Acoes/deleteAcao',
            type: 'POST',
            data: {
                id: acaoParaExcluir
            },
            success: function(msg) {

              var tr = $(handle).closest('tr');
                tr.fadeOut(600, function() {
                    tr.remove();
                });

            $('#myModalDeleteAcao').modal('toggle');
            $('#myModalDeleteAcao').modal('hide');

              

            }
        });

    });


});

