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
            url: '../Configuracoes/mudaStatusUsuarioFacilitador',
            type: 'POST',
            data: {
                id: id,
                statusAtual: statusAtual
            },
            success: function(msg) {

            }
        });

    });

    //exclui usuario
    $(".excluirUsuarioFacilitador").click(function() {

        var handle = $(this);
        var id = $(this).attr("id");

        var tr = $(handle).closest('tr');
        tr.fadeOut(600, function() {
            tr.remove();
        });

        $.ajax({
            url: '../Configuracoes/deleteUsuarioFacilitador',
            type: 'POST',
            data: {
                id: id
            },
            success: function(msg) {



            }
        });

    });

    AddTableRow = function() {
        var newRow = $("<tr class='listas'>");
        var cols = "";

        if (contador == 0) {

            contador++;
            cols += '<td style="border-width: thin; border-style: solid; border-color: black;"><input type="text" placeholder="Nome" class="form-control" id="addNome' + contador + '"/></td>';
            cols += '<td style="border-width: thin; border-style: solid; border-color: black;"><input type="email" placeholder="Email" class="form-control" id="addEmail' + contador + '"/></td>';
            cols += '<td style="border-width: thin; border-style: solid; border-color: black;"><input type="phone" placeholder="Telefone" class="form-control" id="addTelefone' + contador + '"/></td>';
            cols += '<td style="border-width: thin; border-style: solid; border-color: black;" class="text-center"><input type="checkbox" checked disabled="disabled"/></td>';
            cols += '<td style="border-width: thin; border-style: solid; border-color: black;">&nbsp;</td>';
            newRow.append(cols);
            $("#imbatman").append(newRow);

            return false;
        } else {

            var addNome = $("#addNome" + contador).val();
            var addEmail = $("#addEmail" + contador).val();
            var addTelefone = $("#addTelefone" + contador).val();

            //inserindo novo usuario facilitador
            addUsuarioFacilitador(addNome, addEmail, addTelefone);

            contador++;
            cols += '<td style="border-width: thin; border-style: solid; border-color: black;"><input type="text" placeholder="Nome" class="form-control" id="addNome' + contador + '"/></td>';
            cols += '<td style="border-width: thin; border-style: solid; border-color: black;"><input type="email" placeholder="Email" class="form-control" id="addEmail' + contador + '"/></td>';
            cols += '<td style="border-width: thin; border-style: solid; border-color: black;"><input type="phone" placeholder="Telefone" class="form-control" id="addTelefone' + contador + '"/></td>';
            cols += '<td style="border-width: thin; border-style: solid; border-color: black;" class="text-center"><input type="checkbox" checked disabled="disabled"/></td>';
            cols += '<td style="border-width: thin; border-style: solid; border-color: black;">&nbsp;</td>';
            newRow.append(cols);
            $("#imbatman").append(newRow);

            return false;
        }
    };

});

function addUsuarioFacilitador(nome, email, telefone){
    
       $.ajax({
            url: '../Configuracoes/insertUsuarioFacilitador',
            type: 'POST',
            data: {
                nome: nome,
                email: email,
                telefone: telefone,
                status: 1
            },
            success: function(msg) {
                
            }
        });
    
}

