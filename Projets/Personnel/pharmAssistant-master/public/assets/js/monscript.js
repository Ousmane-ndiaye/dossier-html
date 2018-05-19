jQuery(document).ready(function() {
    $('#addF').on('click',function () {
        $('#datatable2 tbody').append(
            '<tr>'+
                '<form method="post" action="">'+
                    '<td>'+
                        '<input type="text" style="width: auto;" class="gui-input" name="" placeholder="Entrer votre...">'+
                    '</td>'+
                    '<td>'+
                        '<input type="text" style="width: auto;" class="gui-input" name="" placeholder="Entrer votre...">'+
                    '</td>'+
                    '<td>'+
                        '<input type="text" style="width: auto;" class="gui-input" name="" placeholder="Entrer votre...">'+
                    '</td>'+
                    '<td>'+
                        '<input type="text" style="width: auto;" class="gui-input" name="" placeholder="Entrer votre...">'+
                    '</td>'+
                    '<td>'+
                        '<input type="submit" style="width: auto;" class="gui-input" name="" placeholder="Entrer votre...">'+
                    '</td>'+
                '</form>'+
            '</tr>'
        );
    })
});