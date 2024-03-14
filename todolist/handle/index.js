$(document).ready(function () {

    fetchTodoList();

    // Handle form submission
    $('#todoForm').submit(function (event) {
        event.preventDefault();
        var name = $('#name').val();
        var description = $('#description').val();
        if (!name || !description) {
            showBootstrapAlert('danger', 'Form Tidak Boleh Kosong');
            return;
        } else {
            showBootstrapAlert('success', 'Berhasil menambahkan &nbsp' + `${name}`);
        }
        addTodoList(name, description);
    });


    function showBootstrapAlert(type, message) {
        var alert = '<div class="alert alert-' + type + ' alert-dismissible fade show" role="alert">' +
            message +
            '</div>';

        $('#alertPlaceholder').html(alert);

        // Setelah 3 detik, hilangkan peringatan
        setTimeout(function () {
            $('.alert').alert('close');
        }, 3000);
    }


    //get all data
    function fetchTodoList() {
        $.ajax({
            url: 'app/fetch.php',
            type: 'GET',
            success: function (response) {
                $('#todoList').html(response);
            }
        });

    }


    function addTodoList(name, description) {
        $.ajax({
            url: 'app/add.php',
            type: 'POST',
            data: { name: name, description: description },
            success: function (response) {
                fetchTodoList();
                $('#name').val('');
                $('#description').val('');
            }
        });
    }
    //delete
    $(document).on('click', '.delete', function () {
        var id = $(this).data('id');
        $.ajax({
            url: 'app/delete.php',
            type: 'POST',
            data: { id: id },
            success: function (response) {
                fetchTodoList();
            }
        });
    });
});
