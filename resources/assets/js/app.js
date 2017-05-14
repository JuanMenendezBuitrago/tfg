$(document).ready(function() {
    $('.row.flash').find('div.alert').not('.alert-important').delay(3000).fadeOut(350);
    if($('#list').length >0){
      var actions = $('#actions');
      var actionsIndex = $('thead th').index(actions);
      var modal = $('#modal');
      var list = $('#list').DataTable({
        "columnDefs": [
            { "orderable": false, "targets": actionsIndex }
          ],
        "language":  {
            "sProcessing":   "Processant...",
            "sLengthMenu":   "Mostra _MENU_ registres",
            "sZeroRecords":  "No s'han trobat registres.",
            "sInfo":         "Mostrant de _START_ a _END_ de _TOTAL_ registres",
            "sInfoEmpty":    "Mostrant de 0 a 0 de 0 registres",
            "sInfoFiltered": "(filtrat de _MAX_ total registres)",
            "sInfoPostFix":  "",
            "sSearch":       "Filtrar:",
            "sUrl":          "",
            "oPaginate": {
                "sFirst":    "Primer",
                "sPrevious": "Anterior",
                "sNext":     "Següent",
                "sLast":     "Últim"
            }
        }
      });
    }
    $('.btn-commit').on('click', function(event){
        event.preventDefault();

        $.ajax({
                type: 'POST',
                dataType: 'json',
                url: $(this).attr('href'),
                data: {
                    _method: 'delete',
                    _token: $.ajaxSetup()['headers']['csrftoken']
                },
                success: function(result) {
                    list.row($('.to-delete')).remove().draw(false);
                    modal.modal('hide');
                },
                error: function(result) {
                        
                }
            });
    });

    $('#list').on('click','.delete-resource', function(event){
        event.preventDefault();

        var row = $(this).parents('tr[role=row]');
            row.addClass('to-delete');
        var itemTitle = row.find('.record-title').html();

        $('.modal-title', modal).html('Estàs segur?');
        $('.btn-commit', modal).attr('href',$(this).attr('href'));
        $('.modal-body', modal).html('Confirma que vols esborrar "' + itemTitle + '"');
        modal.modal();
    });

    $(':file').on('fileselect', function(event, numFiles, label) {
        var input = $(this).parents('.input-group').find(':text'),
        log = numFiles > 1 ? numFiles + ' files selected' : label;

        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }
    });

    $(document).on('change', ':file', function() {
        var input = $(this),
            numFiles = input.get(0).files ? input.get(0).files.length : 1,
            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [numFiles, label]);
    });
});