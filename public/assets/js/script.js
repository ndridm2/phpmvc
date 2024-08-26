$(function() {

    $('.modalInsert').on('click', function() {
        $('#exampleModalLabel').html('New Programming Language')
        $('.modal-footer button[type=submit]').html('Insert data')
    });

    $('.modalUpdate').on('click', function() {
        $('#exampleModalLabel').html('Update Programming Language')
        $('.modal-footer button[type=submit]').html('Update data')
        $('.modal-body form').attr('action', 'http://localhost:8888/phpmvc/public/feature/update')

        const id = $(this).data('id');
        $.ajax({
            url: 'http://localhost:8888/phpmvc/public/feature/getUpdate',
            data: {id : id},
            method: 'POST',
            dataType: 'json',
            success: function(data) {
                $('#bahasa').val(data.bahasa)
                $('#tahun').val(data.tahun)
                $('#author').val(data.author)
                $('#tipe').val(data.tipe)
                $('#id').val(data.id)
            }
        });
    });
});