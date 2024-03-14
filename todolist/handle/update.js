$(document).ready(function () {
    var urlParams = new URLSearchParams(window.location.search);
    var taskId = urlParams.get('id');
    $.ajax({
        url: 'app/fetch_single.php?id=' + taskId,
        type: 'GET',
        success: function (response) {
            var task = JSON.parse(response);
            $('#taskId').val(task.id);
            $('#name').val(task.name);
            $('#description').val(task.description);
        }
    });
});
$(document).ready(function () {
    // Update form submission
    $('#updateForm').submit(function (event) {
        event.preventDefault();
        var taskId = $('#taskId').val();
        var name = $('#name').val();
        var description = $('#description').val();
        showBootstrapAlert('success', 'Berhasil Update &nbsp' + `${name}`);
        updateTodoList(taskId, name, description);
    });

    function showBootstrapAlert(type, message) {
        var alert = '<div class="alert alert-' + type + ' alert-dismissible fade show" role="alert">' +
            message +
            '</div>';

        $('#alertPlaceholder').html(alert);

        setTimeout(function () {
            $('.alert').alert('close');
        }, 3000);
    }
    // Function to update todo list
    function updateTodoList(taskId, name, description) {
        $.ajax({
            url: 'app/update.php',
            type: 'POST',
            data: { id: taskId, name: name, description: description },
            success: function (response) {
                window.location.href = 'index.php';
            }
        });
    }
});
