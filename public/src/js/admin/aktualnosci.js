// Add row at the post.
$('#addRow').on('click', function addRow() {
    var _token = $('input[name="_token"]').val(); // Declare csrf-token for validation.

    // Send Ajax to create/remove rows in table.
    $.ajax({
        url: '/admin/aktualnosci/actions',
        type: 'POST',
        data: {
            _token: _token,
            action: 'add_row'
        },
        success: function (id) {
            console.log(id);
            if(id) {
                var old_id = $('form > div:first').data('id'); // Declare id for replace.

                // Clone and clear new row.
                $('form > div:eq(0)')
                    .clone()
                    .insertBefore('form > div:first')
                    .find('img')
                    .attr('src', '')
                    .parent()
                    .parent()
                    .attr('data-id', id)
                    .find('input, textarea').each(function () {
                        // Replace attr name and clear values.
                        $(this).val('').attr('name', $(this).attr('name').replace(old_id, id));
                    });
            }
        }
    });
});

// Remove row at the post.
$('form').on('click', '#removeRow',function removeRow() {
    var _token = $('input[name="_token"]').val(); // Declare csrf-token for validation.
    var active_element = $(this).parent(); // Declare active element for removed.
    var id = active_element.data('id'); // Declare id record for removed.
    var countElements = $('form > div').length; // Declare count div from table.

    // If count tr from table < 2(active and last) not delete this element.
    if(countElements <= 1) {
        // Clear all inputs value.
        active_element.find('input:text, textarea').val('');
        return false;
    }

    // Send Ajax to create/remove rows in page.
    $.ajax({
        url: '/admin/aktualnosci/actions',
        type: 'POST',
        data: {
            _token: _token,
            action: 'remove_row',
            id: id
        },
        success: function (result) {
            if(result) {
                active_element.remove();
            }
        }
    });
});