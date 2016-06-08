/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 (function($) {
			
                AddTableRow = function() {
                    var newRow = $("<tr class='listas'>");
                    var cols = "";
                    cols += '<td style="border-width: thin; border-style: solid; border-color: black;">&nbsp;</td>';
                    cols += '<td style="border-width: thin; border-style: solid; border-color: black;">&nbsp;</td>';
                    cols += '<td style="border-width: thin; border-style: solid; border-color: black;">&nbsp;</td>';
                    newRow.append(cols);
                    $("#imbatman").append(newRow);
                    return false;
                };
            })(jQuery);