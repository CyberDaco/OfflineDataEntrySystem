$(document).ready(function(){
    $(function () {
        $("#data_table").DataTable();
    });

    // DELETE button ::
    $('.delete').click(function(){
        $('#delete_id').val($(this).data("id"));
    });

    $(".select2").select2();
});