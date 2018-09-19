// Add row at the post.
$('#addRow').on('click', function () {
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
            if(id) {
                var $firstDIV = $('#posts-form > div:eq(0)')
                var old_id = $firstDIV.data('id'); // Declare id for replace.

                // Clone and clear new row.
                $firstDIV
                  .clone()
                  .insertBefore('#posts-form > div:first')
                  .find('img')
                  .attr('src', '')
                  .parent()
                  .parent()
                  .attr('data-id', id)
                  .find('.input-to-clone')
                  .each(function() {
                    $(this).val('').attr('name', $(this).attr('name').replace(old_id, id));
                    if($(this).hasClass('richText-initial')) {
                      $(this).attr('id', $(this).attr('id').replace(old_id, id));
                      $parent = $(this).parent();
                      var $newTextarea = $(this).insertBefore($parent);
                      $parent.remove();
                      $newTextarea.empty();
                      initRichText($newTextarea, id);
                    }
                  });
            }
        }
    });
});

$('#posts-form').submit(function(e) {
    $('#posts-form .richText-initial').each(function(){
        $(this).val($(this).parent().find('.richText-editor').html())
    })
})

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



var currentSessionFiles = [];

function setHandler(el) {
  var $addFileBtn = $(el).parent().parent().find('.btn')
  $addFileBtn.hide();
  $addFileBtn.click(function(){$(el).hide();});

  $(el).on('change', function() {
    var $fileOutput = $(el).prev()
    var fileData = $(el).prop('files')[0];
    var formData = new FormData();
    formData.append('file', fileData);
    formData.append('currentSessionFiles', currentSessionFiles);

    jQuery.ajax({
      type: 'POST',
      url:"/admin/aktualnosci/upload_file",
      data: formData,
      processData: false,
      contentType: false,
      success: function(res) {
        var res = JSON.parse(res);
        if(res.error) throw res.error;
        $fileOutput.val(res.permalink);
        currentSessionFiles.push(res.permalink.split('/').pop());
        $addFileBtn.show();
      },
    });
  });
}

function initRichText(el, id) {
  $(el).richText({
    // text formatting
    bold: true,
    italic: true,
    underline: true,

    // text alignment
    leftAlign: true,
    centerAlign: true,
    rightAlign: true,

    // lists
    ol: true,
    ul: true,

    // title
    heading: true,

    // fonts
    fonts: true,
    fontList: [ "Arial",
                "Arial Black",
                "Comic Sans MS",
                "Courier New",
                "Geneva",
                "Georgia",
                "Helvetica",
                "Impact",
                "Lucida Console",
                "Tahoma",
                "Times New Roman",
                "Verdana"
                ],
    fontColor: true,
    fontSize: true,

    // link
    urls: true,

    // tables
    table: true,

    // code
    removeStyles: true,
    code: true,

    fileText: "",
    fileHTML:
      "<form>"+
        "<input type='text' id='fileText' placeholder='Link text'/>"+
        "<input type='hidden' id='fileURL' class='file-output'/>"+
        "<input type='file' class='file-input' id='file-input-"+id+"'/>"+
      "</form>",
  });
  setHandler($('#file-input-'+id));
}

$(document).ready(function() {
  $('.post-textarea').each(function() {
    var currId = $(this).attr('id').split('-').pop()
    initRichText(this, currId);
  });
});
