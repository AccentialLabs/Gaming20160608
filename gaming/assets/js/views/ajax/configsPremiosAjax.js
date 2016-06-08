/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function() {

    var contador = 0;
    //muda status
    $(".statusCheckbox").click(function() {

        var statusAtual = $(this).attr("value");
        var id = $(this).attr("id");

        $.ajax({
            url: '../Configuracoes/mudaStatusTipoPremio',
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
    $(".excluirTipoPremio").click(function() {

        var handle = $(this);
        var id = $(this).attr("id");

        $.ajax({
            url: '../Configuracoes/deleteTipoPremio',
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

    AddTableRow = function() {
        var newRow = $("<tr class='listas'>");
        var cols = "";

        if (contador == 0) {

            contador++;
            cols += '<td style="border-width: thin; border-style: solid; border-color: black;"><input type="text" class="form-control" placeholder="Descrição" id="addNome' + contador + '"</td>';
            cols += '<td style="border-width: thin; border-style: solid; border-color: black;" class="text-center"><input type="checkbox" checked disabled="disabled"/></td>';
            cols += '<td style="border-width: thin; border-style: solid; border-color: black;">&nbsp;</td>';
            newRow.append(cols);
            $("#imbatman").append(newRow);
            return false;
        } else {

            var addDescricao = $("#addNome" + contador).val();
            
            addTipoPremio(addDescricao);
            
            contador++;
            cols += '<td style="border-width: thin; border-style: solid; border-color: black;"><input type="text" class="form-control" placeholder="Descrição" id="addNome' + contador + '"</td>';
            cols += '<td style="border-width: thin; border-style: solid; border-color: black;" class="text-center"><input type="checkbox" checked disabled="disabled"/></td>';
            cols += '<td style="border-width: thin; border-style: solid; border-color: black;">&nbsp;</td>';
            newRow.append(cols);
            $("#imbatman").append(newRow);
            return false;

        }
    };


});

function addTipoPremio(descricao) {

    $.ajax({
        url: '../Configuracoes/insertTipoPremio',
        type: 'POST',
        data: {
            descricao: descricao,
            status: 1
        },
        success: function(msg) {

        }
    });

}

