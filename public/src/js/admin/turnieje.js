// Add row at the tables.
$('#addRow').on('click', function addRow() {
    var _token = $('input[name="_token"]').val(); // Declare csrf-token for validation.

    // Send Ajax to create/remove rows in table.
    $.ajax({
        url: '/admin/turnieje/actions',
        type: 'POST',
        data: {
            _token: _token,
            action: 'add_row'
        },
        success: function (id) {
            if(id) {
                var old_id = $('table#table_id tbody tr:first').data('id'); // Declare id for replace.
                var last_nr = parseInt($('table#table_id tbody tr:first input:text[readonly]').val()); // Declare id for replace.

                // Clone and clear new row.
                $('table#table_id tbody tr:first')
                    .clone()
                    .insertBefore('tbody tr:first')
                    .find('input')
                    .val('')
                    .parent()
                    .find('input:text[readonly]')
                    .val((isNaN(last_nr) ? 0 : last_nr) + 1)
                    .parent()
                    .parent()
                    .attr('data-id', id)
                    .find('td input').each(function () {
                        var name = $(this).attr('name'); // Get old attr name.
                        $(this).attr('name', name.replace(old_id, id)); // Replace attr name.
                    });
            }
        }
    });
});

// Remove row at the tables.
$('table').on('click', '#removeRow',function removeRow() {
    var _token = $('input[name="_token"]').val(); // Declare csrf-token for validation.
    var active_tr = $(this).parent(); // Declare active tr for removed.
    var id = active_tr.data('id'); // Declare id record for removed.
    var countTr = $('table#table_id tbody tr').length; // Declare count tr from table.

    // If count tr from table < 2(active and last) not delete this element.
    if(countTr <= 2) {
        // Clear all inputs value.
        active_tr.find('td input:text').val('');
        return false;
    }

    console.log(id);

    // Send Ajax to create/remove rows in table.
    $.ajax({
        url: '/admin/turnieje/actions',
        type: 'POST',
        data: {
            _token: _token,
            action: 'remove_row',
            id: id
        },
        success: function (result) {
            console.log(result);

            if(result) {
                active_tr.remove();
            }
        }
    });
});