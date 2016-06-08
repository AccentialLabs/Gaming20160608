$.confirm({
    animation: 'zoom',
    closeAnimation: 'scale'
});
// Available animations:
// right, left, bottom, top, rotate, none, opacity, scale, zoom,
// scaleY, scaleX, rotateY, rotateYR (reverse), rotateX, rotateXR (reverse)

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