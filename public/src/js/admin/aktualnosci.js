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
                $('form > div:first')
                    .clone()
                    .insertAfter('form > div:last')
                    .find('input:text, textarea')
                    .val('')
                    .parent()
                    .parent()
                    .find('div.videoContainer')
                    .remove();

                // Replace attr name
                $('form > div:last').find('input, textarea').each(function () {
                   var name = $(this).attr('name'); // Get old attr name.
                   $(this).attr('name', name.replace(old_id, id)); // Replace attr name.
                });

            }
        }
    });
});

// Remove row at the post.
$('form').on('click', '#removeRow',function removeRow() {
    var _token = $('input[name="_token"]').val(); // Declare csrf-token for validation.
    var active_element = $(this).parent(); // Declare active element for removed.
    var id = active_element.parent().find('div:first').data('id'); // Declare id record for removed.
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
            console.log(result);

            if(result) {
                active_element.remove();
            }
        }
    });
});